<?php

namespace laravel54\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function permcorto()
    {
        return view('PermCortoForm');
    }
    public function permlargo()
    {
        return view('PermLargoForm');
    }
    public function autpcorto()
    {
        return view('AutPForm');
    }
    public function autplargo()
    {
        return view('AutPForm');
    }
    public function worship()
    {
        return view('Worship');
    }
}
