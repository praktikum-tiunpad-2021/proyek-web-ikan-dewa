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
}