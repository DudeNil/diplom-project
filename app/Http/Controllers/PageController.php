<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\RedirectResponse;
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
    public function register(Request $req):RedirectResponse
    {
        $page = new Page();
        $page->name = $req->input('name');
        $page->email = $req->input('email');
        $page->phone = $req->input('phone');
        $page->service = $req->input('service');
        $page->barber = $req->input('master_barber');
        $page->date = $req->input('date');
        $page->time = $req->input('radio-1');

        $page->save();

        return redirect('/signup');
    }
}
