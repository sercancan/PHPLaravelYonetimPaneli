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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $tarih = date("d-m-Y");
      $gun = date("d");
      return view("backend.anasayfa")->withSayfa("Anasayfa")->withTarih($tarih)->withGun($gun);
    
    }
}
