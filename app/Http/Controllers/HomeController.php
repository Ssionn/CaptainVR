<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\Coach;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function vr_coaches()
    {
        return view('home.vrcoaches', [
            'coaches' => Coach::all(),
        ]);
    }

    public function metaverse_coaches()
    {
        return view('home.metaversecoaches', [
            'coaches' => Coach::all(),
        ]);
    }

    public function xr_academy()
    {
        return view('home.xracademy', [
            'academics' => Academic::all(),
            'packages' => Package::all(),
        ]);
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

    public function vr_show(Request $request)
    {
        return view('home.vr_coaches.show', [
            'coach' => Coach::where('name', str_replace('-', ' ', $request->name))->firstOrFail(),
        ]);
    }

    public function meta_show(Request $request)
    {
        return view('home.metaverse_coaches.show', [
            'coach' => Coach::where('name', str_replace('-', ' ', $request->name))->firstOrFail(),
        ]);
    }

    public function xr_academy_show(Request $request)
    {
    }


}
