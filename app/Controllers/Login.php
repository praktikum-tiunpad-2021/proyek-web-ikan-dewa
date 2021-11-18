<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
  {
    $data = [
      'activePage' => 'login',
    ];
    if (session()->get('isLoggedIn')) {
      session()->setFlashData('error', 'You\'ve already logged in!');
      return redirect()->to('landing');
    }
    helper(['form']);
    if ($this->request->getMethod() == 'post') {
      // validation
      $rules = [
        'email' => 'required|min_length[6]|max_length[50]|valid_email',
        'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
      ];
      $errors = [
        'password' => [
          'validateUser' => 'Email or Password don\'t match'
        ]
      ];
      if (!$this->validate($rules, $errors)) {
        $data['validation'] = $this->validator;
      } else {
        $model = new UserModel();

        $user = $model->where('email', $this->request->getVar('email'))
          ->first();

        $this->setUserSession($user);
        if (!empty($this->request->getVar('email'))) {
          set_cookie('login_email',$this->request->getVar('email'),1800);
          set_cookie('login_password',$this->request->getVar('password'),1800);
        }else{
          set_cookie('login_email','');
          set_cookie('login_password','');
        }
        return redirect()->to('landing')->withCookies();
      }
    }
    return view('pages/login', $data);
  }
  
  private function setUserSession($user)
  {
    $data = [
      'email' => $user['email'],
      'isLoggedIn' => true,
    ];
    session()->set($data);
    return true;
  }

  public function register()
  {
    $data = [
      'activePage' => 'register',
    ];
    if (session()->get('isLoggedIn')) {
        session()->setFlashData('error', 'You\'ve already logged in!');
        return redirect()->to('landing');
    }
    helper(['form']);
    if ($this->request->getMethod() == 'post') {
      // validation
      $rules = [
        'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]|max_length[255]',
        'Name_User' => 'required',
        'Born_Date' => 'required',
      ];
      if (!$this->validate($rules)) {
        $data['validation'] = $this->validator;
      } else {
        $model = new UserModel();

        $newData = [
          'email' => $this->request->getVar('email'),
          'password' => $this->request->getVar('password'),
          'Name_User' => $this->request->getVar('Name_User'),
          'Born_Date' => $this->request->getVar('Born_Date'),
        ];
        $model->ignore(true)->insert($newData);
        $session = session();
        $session->setFlashdata('success', 'Registrasi Sukses!');
        return redirect()->to('login');
      }
    }
    return view('pages/register', $data);
  }

    public function logout()
  {
    session()->destroy();
    return redirect()->to('login');
  }
}