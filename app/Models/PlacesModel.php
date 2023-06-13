<?php

namespace App\Models;

use CodeIgniter\Model;

class PlacesModel extends Model
{
    protected $table = 'places';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'image', 'created_at'];

    public function getPlaces()
    {
        return $this->findAll();
    }
    
}
