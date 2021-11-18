<?php

namespace App\Controllers;
use App\Models\FishDataModel;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/welcome_message');
    }

    public function catalog()
    {
        $model = new FishDataModel();
        $data['fish'] = $model->getCargo();
        echo view('pages/catalog', $data);
    }

    public function login()
    {
        return view('pages/login');
    }

    public function register()
    {
        return view('pages/register');
    }

    public function base_landing()
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

    public function checkout()
    {
        return view('pages/checkout');
    }

    public function checkout2()
    {
        return view('pages/checkout2');
    }

    public function myOrder()
    {
        return view('pages/myOrder');
    }

    public function wishlist()
    {
        return view('pages/wishlist');
    }

    public function landing_after_login()
    {
        $data = [
            'activePage' => 'home',
        ];

        return view('pages/landing',$data);
    }
}
