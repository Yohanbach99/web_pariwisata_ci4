<?php

namespace App\Controllers;
use App\Models\PlaceModel;
use App\Models\PlacesModel;

class Admin extends BaseController
{
    private $placesModel;

    public function __construct()
    {
        $this->placesModel = new PlacesModel();
    }

    public function dashboard()
    {
        $data['places'] = $this->placesModel->findAll();
        // Cek apakah pengguna sudah login dan memiliki role admin
        if (!session()->get('logged_in') || session()->get('user_role') != 'admin') {
            return redirect()->to('/login');
        }

        // Tampilkan halaman dashboard admin
        return view('dashboard_admin', $data);
    }

    public function createPlace()
    {
        // Cek apakah pengguna sudah login dan memiliki role admin
        if (!session()->get('logged_in') || session()->get('user_role') != 'admin') {
            return redirect()->to('/login');
        }

        // Tampilkan halaman tambah tempat wisata
        return view('create_place');
    }

    public function savePlace()
    {
        // Cek apakah pengguna sudah login dan memiliki role admin
        if (!session()->get('logged_in') || session()->get('user_role') != 'admin') {
            return redirect()->to('/login');
        }

        // Ambil data yang dikirimkan dari form tambah tempat wisata
        $name = $this->request->getPost('name');
        $description = $this->request->getPost('description');
        $image = $this->request->getFile('image');

        // Pindahkan file gambar ke folder yang ditentukan
        $newName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/uploads', $newName);

        // Simpan data tempat wisata ke database
        $placeModel = new PlaceModel();
        $placeModel->save([
            'name' => $name,
            'description' => $description,
            'image' => $newName
        ]);

        session()->setFlashdata('message', 'Tempat wisata berhasil ditambahkan.');
        return redirect()->to('/admindashboard');
    }

    public function editPlace($id)
    {
        // Cek apakah pengguna sudah login dan memiliki role admin
        if (!session()->get('logged_in') || session()->get('user_role') != 'admin') {
            return redirect()->to('/login');
        }

        // Ambil data tempat wisata dari database
        $placeModel = new PlaceModel();
        $place = $placeModel->find($id);

        // Tampilkan halaman edit tempat wisata
        return view('edit_place', ['place' => $place]);
    }

    public function updatePlace($id)
    {
        // Cek apakah pengguna sudah login dan memiliki role admin
        if (!session()->get('logged_in') || session()->get('user_role') != 'admin') {
            return redirect()->to('/login');
        }

        // Ambil data yang dikirimkan dari form edit tempat wisata
        $name = $this->request->getPost('name');
        $description = $this->request->getPost('description');
        $image = $this->request->getFile('image');

        // Update data tempat wisata di database
        $placeModel = new PlaceModel();
        $place = $placeModel->find($id);

        // Jika ada gambar yang diunggah, pindahkan file gambar ke folder yang ditentukan
        if ($image->isValid()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $newName);

            // Hapus file gambar lama
            unlink(ROOTPATH . 'public/uploads/' . $place['image']);

            // Update data tempat wisata dengan gambar baru
            $placeModel->update($id, [
                'name' => $name,
                'description' => $description,
                'image' => $newName
            ]);
        } else {
            // Update data tempat wisata tanpa mengubah gambar
            $placeModel->update($id, [
                'name' => $name,
                'description' => $description
            ]);
        }

        session()->setFlashdata('message', 'Tempat wisata berhasil diperbarui.');
        return redirect()->to('/admindashboard');
    }

    // Metode untuk menghapus tempat wisata
    public function deletePlace($id)
    {
        $place = $this->placesModel->find($id);

        if ($place === null) {
            // Jika tempat wisata tidak ditemukan, redirect atau tampilkan pesan error
            return redirect()->to('/admindashboard')->with('error', 'Tempat wisata tidak ditemukan.');
        }

        // Hapus tempat wisata dari database
        $this->placesModel->delete($id);

        // Redirect ke halaman tempat wisata setelah menghapus
        return redirect()->to('/admindashboard')->with('success', 'Tempat wisata berhasil dihapus.');
    }
}
