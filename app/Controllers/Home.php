<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/welcome_message');
    }

    public function catalog()
    {
        return view('pages/catalog');
    }

    public function login()
    {
        return view('pages/login');
    }

    public function landing()
    {
        return view('pages/landing');
    }

    public function editAccount()
    {
        return view('pages/editAccount');
    }
    
    public function product()
    {
        return view('pages/product');
    }

    public function order()
    {
        return view('pages/order');
    }
}
