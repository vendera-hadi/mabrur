<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\User;
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
    public function index(Request $request)
    {
        $data = [];
        if(Auth::user()->role == 'admin'){
          $users = User::member()->hasUploaded();
          if(!empty($request->name)) $users->where('name','like','%'.$request->name.'%');
          if(!empty($request->category_id)) $users->where('category_id', $request->category_id);
          $data['users'] = $users->paginate(12);
        }
        return view('home', $data);
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
        $data['videos'] = Video::paginate(12);
        return view('gallery', $data);
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

    public function linkupload(Request $request)
    {
      $video = Auth::user()->video ? Auth::user()->video : new Video;
      $video->user_id = Auth::id();
      $video->title = $request->title;
      $video->url = $request->link;
      $video->embed_code = $request->embed_code;
      $video->save();
      return redirect()->back()->with('success', 'Link Berhasil Disimpan');
    }
}
