<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FishDataModel;

class FishData extends Controller{
  public function indexCatalog()
  {
    $model = new FishDataModel();
    $data['fish'] = $model->getFishAll();
    echo view('/catalog', $data);
  }
}