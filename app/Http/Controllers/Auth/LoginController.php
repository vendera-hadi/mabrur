<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Error occured when registering via Google');
        }

        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();

        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
            return redirect()->to('/');
        } else {
            // create a new user
            // $newUser                  = new User;
            // $newUser->name            = $user->name;
            // $newUser->email           = $user->email;
            // $newUser->google_id       = $user->id;
            // $newUser->save();
            // auth()->login($newUser, true);

            // pilih kategori
            $data['name'] = $user->name;
            $data['email'] = $user->email;
            $data['google_id'] = $user->email;
            return view('after_oauth', $data);
        }
    }
}
