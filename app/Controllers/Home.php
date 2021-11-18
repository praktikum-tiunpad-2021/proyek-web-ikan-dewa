<?php

namespace App\Controllers;
use App\Models\FishDataModel;
use App\Models\UserModel;

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
        $userData = $this->UserModel->getNameUser(session()->get('Name_User'));
        $data = [
            'users' => $userData,
        ];
        return view('pages/editAccount', $data);
    }
    
    public function product($Id_Fish)
    {
        $Id_Fish = $this->FishDataModel->getFishAll($Id_Fish);

        $data = [
            'fishData' => $Id_Fish,
        ];
        return view('pages/product', $data);
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
        $model = new FishDataModel();
        $data['users'] = $model->getNameUser();
        $data = [
            'activePage' => 'home',
        ];

        return view('pages/landing',$data);
    }
}
