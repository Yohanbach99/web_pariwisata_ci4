<?php

namespace App\Controllers;
use App\Models\PlacesModel;

class User extends BaseController
{
    private $placesModel;

    public function __construct()
    {
        $this->placesModel = new PlacesModel();
    }

    public function dashboard()
    {
        $data['places'] = $this->placesModel->findAll();
        // Cek apakah pengguna sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Tampilkan halaman dashboard pengguna
        return view('dashboard_user', $data);
    }

    public function register()
    {
        // Tampilkan halaman registrasi
        return view('register');
    }
    
}
