<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminCRUDModel extends Model
{
  /* ------------------------ BATAS TABLE ------------------------ */
  public function saveUsers($data)
  {
    $query = $this->db->table('users')->insert($data);
    return $query;
  }
  public function updateUsers($data, $id)
  {
    $query = $this->db->table('users')->update($data, array('id' => $id));
    return $query;
  }
  public function deleteUsers($id)
  {
    $query = $this->db->table('users')->delete(array('id' => $id));
    return $query;
  }

  /* ------------------------ BATAS TABLE ------------------------ */
  public function saveFish($data)
  {
    $query = $this->db->table('fish')->insert($data);
    return $query;
  }
  public function updateFish($data, $Id_Fish)
  {
    $query = $this->db->table('fish')->update($data, array('Id_Fish' => $Id_Fish));
    return $query;
  }
  public function deleteFish($Id_Fish)
  {
    $query = $this->db->table('fish')->delete(array('Id_Fish' => $Id_Fish));
    return $query;
  }

  /* ------------------------ BATAS TABLE ------------------------ */
  public function saveFishDetail($data)
  {
    $query = $this->db->table('fish_detail')->insert($data);
    return $query;
  }
  public function updateFishDetail($data, $Id_Fish)
  {
    $query = $this->db->table('fish_detail')->update($data, array('Id_Fish' => $Id_Fish));
    return $query;
  }
  public function deleteFishDetail($Id_Fish)
  {
    $query = $this->db->table('fish_detail')->delete(array('Id_Fish' => $Id_Fish));
    return $query;
  }
}