<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // Tampilkan halaman login
        return view('login');
    }

    public function attemptLogin()
{
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    // Cek apakah pengguna dengan email yang diberikan ada dalam database
    $userModel = new UserModel();
    $user = $userModel->where('email', $email)->first();

    if ($user && is_string($password) && password_verify($password, $user['password'])) {
        // Login berhasil
        $dashboard = '';
        if ($user['role'] == 'user') {
            $dashboard = '/userdashboard';
        } elseif ($user['role'] == 'admin') {
            $dashboard = '/admindashboard';
        }

        $userData = [
            'user_id' => $user['id'],
            'user_email' => $user['email'],
            'user_role' => $user['role'],
            'logged_in' => true
        ];

        session()->set($userData);
        return redirect()->to($dashboard);
    } else {
        // Login gagal
        session()->setFlashdata('message', 'Email atau password salah.');
        return redirect()->back()->withInput();
    }
}


    public function register()
    {
        // Tampilkan halaman register
        return view('register');
    }

    public function createAccount()
    {
        $userModel = new UserModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $hashedPassword = is_string($password) ? password_hash($password, PASSWORD_DEFAULT) : null;

        $userModel->save([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
            'role' => 'user'
        ]);

        session()->setFlashdata('message', 'Akun berhasil dibuat. Silakan login.');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
