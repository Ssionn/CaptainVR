<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function vr_coaches()
    {
        return view('home.vrcoaches');
    }

    public function metaverse_coaches()
    {
        return view('home.metaversecoaches');
    }

    public function xr_academy()
    {
        return view('home.xracademy');
    }

    public function xr_products()
    {
        return view('home.xrproducts');
    }

    public function sail_along()
    {
        return view('home.sailalong');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
