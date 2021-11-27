<?php
namespace App\Models;
use CodeIgniter\Model;

class FishDataModel extends Model
{
  protected $table = 'fish';
  protected $primaryKey = 'Id_Fish';

  public function getSaltwaterCatalog()
  {
    $query = $this->db->table('v_getswcatalog')
    // ISI VIEWS
    // ->join('fish_detail', 'fish.Id_Fish = fish_detail.Id_Fish', 'JOIN')
    // ->where(['fish.Type_Fish' => 'Saltwater Fish'])
    ->get()->getResultArray();
    return $query;  
  }

  public function getFreshwaterCatalog()
  {
    $query = $this->db->table('v_getfwcatalog')
    // ISI VIEWS
    // ->join('fish_detail', 'fish.Id_Fish = fish_detail.Id_Fish', 'JOIN')
    // ->where(['fish.Type_Fish' => 'Freshwater Fish'])
    ->get()->getResultArray();
    return $query;  
  }

  public function getFishData($Id_Fish)
  {
    $query = $this->db->table('fish')
    ->join('fish_detail', 'fish.Id_Fish = fish_detail.Id_Fish', 'JOIN')
    ->join('seller', 'fish.Id_Seller = seller.Id_Seller', 'JOIN')
    ->where(['fish.Id_Fish' => $Id_Fish])
    ->get()->getResultArray();
    return $query;
  }

  public function getBestSellerFish()
  {
    $query = $this->db->table('v_getbestsellerfish')
    // ISI VIEWS
    // ->where(['Rating_Fish >=' => 3])
    // ->orderBy('Rating_Fish', 'desc')
    ->get()->getResultArray();
    return $query;
  }

  public function getTopSearchFish()
  {
    $query = $this->db->table('v_gettopsearchfish')
    // ISI VIEWS
    // ->orderBy('Fish_Views', 'desc')
    ->get()->getResultArray();
    return $query;
  }

  public function getFishWishlist($id)
  {
    $query = $this->db->table('wishlist')
    ->join('fish', 'wishlist.Id_Fish = fish.Id_Fish', 'JOIN')
    ->where(['wishlist.id' => $id])
    ->get()->getResultArray();
    return $query;
  }

  public function getFishCart($id)
  {
    $query = $this->db->table('cart')
    ->join('fish', 'cart.Id_Fish = fish.Id_Fish', 'JOIN')
    ->where(['cart.id' => $id])
    ->get()->getResultArray();
    return $query;
  }

  public function saveFishWishlist($data)
  {
    $query = $this->db->table('wishlist')
    ->insert($data);
    return $query;
  }

  public function deleteFishWishlist($Id_Wishlist)
  {
    $query = $this->db->table('wishlist')
    ->delete(array('Id_Wishlist' => $Id_Wishlist));
    return $query;
  }

  public function saveFishCart($data)
  {
    $query = $this->db->table('cart')
    ->insert($data);
    return $query;
  }

  public function deleteFishCart($Id_Cart)
  {
    $query = $this->db->table('cart')
    ->delete(array('Id_Cart' => $Id_Cart));
    return $query;
  }

  public function getTransaction($id)
  {
    $query = $this->db->table('transaction')
    ->join('fish', 'fish.Id_Fish = transaction.Id_Fish', 'JOIN')
    ->join('users', 'users.id = transaction.id', 'JOIN')
    ->where(array('transaction.id' => $id, 'transaction.Status_Transaction' => 'Success'))
    ->get()->getResultArray();
    return $query;
  }

  public function deleteTransaction($Id_Transaction)
  {
    $query = $this->db->table('transaction')
    ->delete(array('Id_Transaction' => $Id_Transaction));
    return $query;
  }
}