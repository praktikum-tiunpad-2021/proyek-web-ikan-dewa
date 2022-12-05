<?php

namespace App\Controllers;
use App\Models\FishDataModel;
use App\Models\UserModel;
use App\Models\TransactionModel;
use App\Models\VoucherModel;

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

    // public function checkVoucher($Id_Fish){
    //     if ($this->request->getMethod() == 'post') {
    //         // validation
    //         $rules = [
    //           'Code_Voucher' => 'validateVoucher[Code_Voucher]',
    //         ];
    //         $errors = [
    //           'Code_Voucher' => [
    //             'validateVoucher' => 'Kode Voucher Salah!'
    //           ]
    //         ];
    //         if (!$this->validate($rules, $errors)) {
    //           $data['validation'] = $this->validator;
    //         } else {
    //           $model = new VoucherModel();
      
    //           $user = $model->where('Code_Voucher', $this->request->getPost('Code_Voucher'))->first();

    //             $data = [
    //                 'Code_Voucher' => $this->request->getPost('Code_Voucher'),
    //                 'Price_Discount' => $user['Price_Discount'],
    //             ];

    //             session()->set($data);

    //           return redirect()->to('order/'.$Id_Fish);
    //         }
    //       }
    // }

    public function detail_order($Id_Transaction){
        $Data_Transaction = $this->TransactionModel->getDetailOrder($Id_Transaction);
        $Data_Transaction_Post_Code = $this->TransactionModel->getDetailOrderPostCode($Id_Transaction);
        $data = [
            'Data_Transaction' => $Data_Transaction,
            'Data_Transaction_Post_Code' => $Data_Transaction_Post_Code,
        ];
        return view('pages/detail_order', $data);
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
        $Data_Transaction_Success = $this->TransactionModel->getTransactionSuccess(session()->get('id'));
        $Data_Transaction_Pending = $this->TransactionModel->getTransactionPending(session()->get('id'));
        $data = [
            'fishDataMyOrder' => $dataMyOrder,
            'Data_Transaction_Success' => $Data_Transaction_Success,
            'Data_Transaction_Pending' => $Data_Transaction_Pending,
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
        $Region_Fish_Group = $this->FishDataModel->getRegionFishGroup();

        $data = [
            'activePage' => 'home',
            'fishData' => $Id_Fish,
            'bestSellerFish' => $Best_Seller,
            'topSearchFish' => $Top_Search,
            'Region_Fish_Group' => $Region_Fish_Group,
        ];
        return view('pages/landing',$data);
    }
}
