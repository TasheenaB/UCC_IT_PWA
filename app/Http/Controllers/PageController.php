<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // main screen with the menu options
    public function home()
    {
        return view('home');
    }

    public function admissions()
    {
        return view('admissions', [
            'applyUrl' => config('ucc.apply_url'),
            'payUrl'   => config('ucc.pay_url'),
        ]);
    }

    public function social()
    {
        return view('social', [
            'facebook'  => config('ucc.facebook'),
            'twitter'   => config('ucc.twitter'),
            'instagram' => config('ucc.instagram'),
        ]);
    }
}
