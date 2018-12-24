<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function faq()
    {
        return view('faq');
    }

    public function timeline()
    {
        return view('timeline');
    }

    public function upload()
    {
        return view('upload');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function terms()
    {
        return view('terms');
    }

    public function upload_tabungan(Request $request)
    {
      $path = $request->file('file')->store('tabhaji','public');
      $user = Auth::user();
      $user->scan_tabungan = $path;
      $user->uploaded_at = date("Y-m-d H:i:s");
      $user->save();
      return redirect()->back()->with('success', 'Upload Berhasil');
    }
}
