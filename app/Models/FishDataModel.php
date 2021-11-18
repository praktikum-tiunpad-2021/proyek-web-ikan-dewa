<?php
namespace App\Models;
use CodeIgniter\Model;

class FishDataModel extends Model
{
  protected $table = 'fish';
  protected $primaryKey = 'Id_Fish';

  protected $useAutoIncement = true;

  public function getCargo($id = false)
  {
    if($id === false){
      return $this->findAll();
    } else {
      return $this->getWhere(['Id_Fish' => $id]);
    }
  }
  public function getFishAll($Id_Fish)
  {
    $query = $this->db->table('fish')
    ->where(['Id_Fish' => $Id_Fish])
    ->get()->getResultArray();
    return $query;
  }
}