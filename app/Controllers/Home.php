<?php

namespace App\Controllers;
use App\Models\FishDataModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/login');
    }

    public function sw_catalog()
    {
        $Id_Fish = $this->FishDataModel->getSaltwaterCatalog();
        $data = [
            'fishData' => $Id_Fish,
        ];
        return view('pages/sw_catalog', $data);
    }

    public function fw_catalog()
    {
        $Id_Fish = $this->FishDataModel->getFreshwaterCatalog();
        $data = [
            'fishData' => $Id_Fish,
        ];
        return view('pages/fw_catalog', $data);
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
        $userData = $this->UserModel->getNameUser(session()->get('id'));
        $data = [
            'users' => $userData,
        ];
        return view('pages/editAccount', $data);
    }
    
    public function product($Id_Fish)
    {
        $Id_Fish = $this->FishDataModel->getFishData($Id_Fish);
        $Top_Search = $this->FishDataModel->getTopSearchFish();
        $Best_Seller = $this->FishDataModel->getBestSellerFish();

        $data = [
            'fishData' => $Id_Fish,
            'topSearchFish' => $Top_Search,
            'bestSellerFish' => $Best_Seller,
        ];
        return view('pages/product', $data);
    }

    public function order($Id_Fish)
    {
        $Id_Fish = $this->FishDataModel->getFishData($Id_Fish);

        $data = [
            'fishData' => $Id_Fish,
        ];

        return view('pages/order', $data);
    }

    public function checkout($Id_Fish)
    {
        $Id_Fish = $this->FishDataModel->getFishData($Id_Fish);
        $userData = $this->UserModel->getNameUser(session()->get('id'));
        $data = [
            'fishData' => $Id_Fish,
            'users' => $userData,
        ];
        return view('pages/checkout', $data);
    }

    public function myOrder()
    {
        $dataMyOrder = $this->FishDataModel->getFishCart(session()->get('id'));
        $Data_Transaction = $this->FishDataModel->getTransaction(session()->get('id'));
        $data = [
            'fishDataMyOrder' => $dataMyOrder,
            'Data_Transaction' => $Data_Transaction,
        ];
        return view('pages/myOrder', $data);
    }

    public function wishlist()
    {
        $dataWishlist = $this->FishDataModel->getFishWishlist(session()->get('id'));
        $data = [
            'fishDataWishlist' => $dataWishlist
        ];
        return view('pages/wishlist', $data);
    }

    public function landing_after_login()
    {
        $Id_Fish = $this->FishDataModel->getSaltwaterCatalog();
        $Best_Seller = $this->FishDataModel->getBestSellerFish();
        $Top_Search = $this->FishDataModel->getTopSearchFish();

        $data = [
            'activePage' => 'home',
            'fishData' => $Id_Fish,
            'bestSellerFish' => $Best_Seller,
            'topSearchFish' => $Top_Search,
        ];
        
        return view('pages/landing',$data);
    }
}
