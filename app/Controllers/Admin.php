<?php

namespace App\Controllers;
use App\Models\AdminModel;


class Admin extends BaseController
{
    public function admin_home(){
        return view('admin/admin_home');
    }

    public function admin_users(){
        $User_Data = $this->AdminModel->getTableUsers();
        $data = [
            'User_Data' => $User_Data,
        ];
        return view('admin/admin_users', $data);
    }
    
    public function admin_users_add(){
        return view('admin/admin_users_add');
    }

    public function admin_users_edit($id){
        $User_Data = $this->AdminModel->getDataUser($id);
        $data = [
            'User_Data' => $User_Data,
        ];
        return view('admin/admin_users_edit', $data);
    }

    public function admin_fish(){
        $Fish_Data = $this->AdminModel->getTableFish();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_fish', $data);
    }

    public function admin_fishDetail(){
        $Fish_Data = $this->AdminModel->getTableFishDetail();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_fishDetail', $data);
    }

    public function admin_cart(){
        $Fish_Data = $this->AdminModel->getTableCart();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_cart', $data);
    }

    public function admin_wishlist(){
        $Fish_Data = $this->AdminModel->getTableWishlist();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_wishlist', $data);
    }

    public function admin_paymentDb(){
        $Fish_Data = $this->AdminModel->getTablePayment();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_paymentDb', $data);
    }

    public function admin_transaction(){
        $Fish_Data = $this->AdminModel->getTableTransaction();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_transaction', $data);
    }

    public function admin_seller(){
        $Fish_Data = $this->AdminModel->getTableSeller();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_seller', $data);
    }

    public function admin_postCode(){
        $Fish_Data = $this->AdminModel->getTablePostCode();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_postCode', $data);
    }
}