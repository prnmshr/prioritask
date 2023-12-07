<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function quadone()
    {
        return view('site.quadone');
    }

    public function quadtwo()
    {
        return view('site.quadtwo');
    }

    public function quadthree()
    {
        return view('site.quadthree');
    }

    public function quadfour()
    {
        return view('site.quadfour');
    }
}
