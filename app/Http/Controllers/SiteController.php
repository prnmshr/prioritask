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

    public function tips()
    {
        return view('site.tips');
    }

    public function evaluate()
    {
        return view('site.evaluate');
    }

    public function achieved()
    {
        return view('site.achieved');
    }

    public function unachieved()
    {
        return view('site.unachieved');
    }

    public function insights()
    {
        return view('site.insights');
    }

    public function statistics()
    {
        return view('site.statistics');
    }
}
