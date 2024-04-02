<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view('pages.main');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function price()
    {
        return view('pages.price');
    }
    public function barbers()
    {
        return view('pages.barbers');
    }
    public function contacts()
    {
        return view('pages.contacts');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function signup()
    {
        return view('pages.signup');
    }
}
