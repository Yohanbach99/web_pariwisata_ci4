<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaceeModel extends Model
{
    protected $table = 'places'; // Nama tabel tempat wisata di basis data

    public function getPlace($id)
    {
        return $this->find($id);
    }
}
