<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function portofolio()
    {
        return view('home.portofolio');
    }

    public function services()
    {
        return view('home.services');
    }

    public function team()
    {
        return view('home.team');
    }

    public function testimonials()
    {
        return view('home.testimonials');
    }
}
