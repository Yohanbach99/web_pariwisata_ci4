<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaceModel extends Model
{
    protected $table = 'places';
    protected $allowedFields = ['name', 'description', 'image'];
    public function getPlaces()
    {
        return $this->findAll();
    }
}
