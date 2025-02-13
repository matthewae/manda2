<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function project()
    {
        return view('project');
    }

    public function team()
    {
        return view('team');
    }

    public function client()
    {
        return view('client');
    }

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }

    public function vision()
    {
        return view('vision');
    }
}
