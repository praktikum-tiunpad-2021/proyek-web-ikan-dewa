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
}