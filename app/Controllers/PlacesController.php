<?php

namespace App\Controllers;

use App\Models\PlaceeModel;
use CodeIgniter\API\ResponseTrait;

class PlacesController extends BaseController
{
    use ResponseTrait;

    public function getPlace($id)
    {
        $placeeModel = new PlaceeModel();
        $place = $placeeModel->getPlace($id);

        if ($place) {
            return $this->respond($place);
        } else {
            return $this->failNotFound('Tempat wisata tidak ditemukan');
        }
    }
}
