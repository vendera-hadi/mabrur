<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // \Auth::logout();
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
}
