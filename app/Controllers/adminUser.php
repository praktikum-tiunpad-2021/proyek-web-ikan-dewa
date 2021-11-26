<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\adminUser as user;

class adminUser extends BaseController{
  public function save()
  {
    $model = new user();
    $passwordHash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
    $data = array(
      'email' => $this->request->getPost('email'),
      'password' => $passwordHash,
      'Name_User' => $this->request->getPost('Name_User'),
      'Born_Date' => $this->request->getPost('Born_Date'),
    );
    $model->saveUsers($data);
    return redirect()->to('/admin/users');
  }

  public function edit($id)
  {
    $model = new user();
    $data['Users'] = $model->getUsers($id)->getRow();
    echo view('admin_users_edit', $data);
  }

  public function update()
  {
    $model = new user();
    $id = $this->request->getPost('id');
    $passwordHash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
    $data = array(
      'email' => $this->request->getPost('email'),
      'password' => $passwordHash,
      'Name_User' => $this->request->getPost('Name_User'),
      'Born_Date' => $this->request->getPost('Born_Date'),
    );
    $model->updateUsers($data, $id);
    return redirect()->to('/admin/users');
  }

  public function delete($id)
  {
    $model = new user();
    $model->deleteUsers($id);
    return redirect()->to('/admin/users');
  }
}