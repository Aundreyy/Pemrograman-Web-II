<?php

namespace App\Controllers;

use App\Models\User;

class Auth extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/buku');
        }
        return view('login');
    }

    public function loginAuth()
    {
        $session = session();
        $userModel = new User();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = $userModel->where('username', $username)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            
            if ($authenticatePassword) {
                $ses_data = [
                    'id'         => $data['id'],
                    'username'   => $data['username'],
                    'email'      => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/buku');
            } else {
                $session->setFlashdata('msg', 'Password salah.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ditemukan.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}