<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{
	public function register()
	{
		return view('register');
	}

    public function process()
    {
        if (!$this->validate([
            'Email' => [
                'rules' => 'required|min_length[4]|max_length[50]|is_unique[users.Email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Email sudah digunakan sebelumnya'
                ]
            ],
            'Password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'Name_User' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UsersModel();
        $users->insert([
            'Email' => $this->request->getVar('Email'),
            'Password' => password_hash($this->request->getVar('Password'), PASSWORD_BCRYPT),
            'Name_Users' => $this->request->getVar('Name_Users'),
            'Tanggal_Lahir' => $this->request->getVar('Tanggal_Lahir')
        ]);
        return redirect()->to('/login');
    }
}