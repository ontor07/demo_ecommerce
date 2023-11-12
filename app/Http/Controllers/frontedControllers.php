<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontedControllers extends Controller
{
    public function home()
    {
        return view ('fronted.index');
    }
    public function about_us()
    {
        return view ('fronted.about_us');
    }
    public function blog()
    {
        return view ('fronted.blog');
    }
    public function blog_details()
    {
        return view ('fronted.blog_details');
    }
    public function brands()
    {
        return view ('fronted.brands');
    }
    public function cart_empty()
    {
        return view ('fronted.cart_empty');
    }
    public function cart_view()
    {
        return view ('fronted.cart_view');
    }
    public function change_password()
    {
        return view ('fronted.change_password');
    }
    public function check_out()
    {
        return view ('fronted.check_out');
    }
    public function compare()
    {
        return view ('fronted.compare');
    }
    public function contact()
    {
        return view ('fronted.contact');
    }
    public function invoice()
    {
        return view ('fronted.invoice');
    }
    public function login()
    {
        return view ('fronted.login');
    }
}
