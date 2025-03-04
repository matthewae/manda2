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

    public function privacy()
    {
        return view('privacy');
    }

    public function term()
    {
        return view('term');
    }

    public function articleCOM()
    {
        return view('articleCOM');
    }

    public function articleRES()
    {
        return view('articleRES');
    }

    public function articleIND()
    {
        return view('articleIND');
    }

    public function articleINF()
    {
        return view('articleINF');
    }

    public function articleHOS()
    {
        return view('articleHOS');
    }

    public function articleEPO()
    {
        return view('articleEPO');
    }

    public function articleRRD()
    {
        return view('articleRRD');
    }

    public function articleRSN()
    {
        return view('articleRSN');
    }

    public function articleSPP()
    {
        return view('articleSPP');
    }

    public function articleRAT()
    {
        return view('articleRAT');
    }

    public function articleRAP()
    {
        return view('articleRAP');
    }

    public function articleSDE()
    {
        return view('articleSDE');
    }

    public function articleKPP()
    {
        return view('articleKPP');
    }

    public function articlePPK()
    {
        return view('articlePPK');
    }

    public function news()
    {
        return view('news');
    }
}

