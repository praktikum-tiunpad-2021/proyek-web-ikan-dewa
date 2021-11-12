<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FishDataModel;

class FishData extends Controller{
  public function indexCatalog()
  {
    $model = new FishDataModel();
    $data['fish'] = $model->getCargo();
    echo view('/catalog', $data);
  }
}