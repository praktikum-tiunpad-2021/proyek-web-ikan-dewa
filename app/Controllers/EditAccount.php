<?php

namespace App\Controllers;

use App\Models\UserModel;

class EditAccount extends BaseController
{
    public function update()
    {
      $model = new UserModel();
      $passwordHash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
      $data = array(
        'password' => $passwordHash,
        'Name_User' => $this->request->getPost('Name_User'),
        'Born_Date' => $this->request->getPost('Born_Date'),
      );
      $model->updateProfile($data, $this->request->getPost('id'));
      return redirect()->to('/editAccount');
    }

}