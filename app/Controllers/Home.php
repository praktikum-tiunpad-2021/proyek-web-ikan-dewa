<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function register()
    {
        return view('register');
    }
}