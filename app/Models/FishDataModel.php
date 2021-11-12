<?php
namespace App\Models;
use CodeIgniter\Model;

class FishDataModel extends Model
{
  protected $table = 'fish';

  public function getCargo($id = false)
  {
    if($id === false){
      return $this->findAll();
    } else {
      return $this->getWhere(['Id_Fish' => $id]);
    }
  }
}