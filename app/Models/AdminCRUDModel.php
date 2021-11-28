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

  /* ------------------------ BATAS TABLE ------------------------ */
  public function savePaymentDb($data)
  {
    $query = $this->db->table('payment_db')->insert($data);
    return $query;
  }
  public function updatePaymentDb($data, $Id_Payment_Db)
  {
    $query = $this->db->table('payment_db')->update($data, array('Id_Payment_Db' => $Id_Payment_Db));
    return $query;
  }
  public function deletePaymentDb($Id_Payment_Db)
  {
    $query = $this->db->table('payment_db')->delete(array('Id_Payment_Db' => $Id_Payment_Db));
    return $query;
  }

  /* ------------------------ BATAS TABLE ------------------------ */
  public function saveSeller($data)
  {
    $query = $this->db->table('seller')->insert($data);
    return $query;
  }
  public function updateSeller($data, $Id_Seller)
  {
    $query = $this->db->table('seller')->update($data, array('Id_Seller' => $Id_Seller));
    return $query;
  }
  public function deleteSeller($Id_Seller)
  {
    $query = $this->db->table('seller')->delete(array('Id_Seller' => $Id_Seller));
    return $query;
  }
}