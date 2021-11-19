<?php
namespace App\Models;
use CodeIgniter\Model;

class FishDataModel extends Model
{
  protected $table = 'fish';
  protected $primaryKey = 'Id_Fish';

  public function getDataAll($id = false)
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
    ->join('fish_detail', 'fish.Id_Fish = fish_detail.Id_Fish', 'JOIN')
    ->join('seller', 'fish.Id_Seller = seller.Id_Seller', 'JOIN')
    ->where(['fish.Id_Fish' => $Id_Fish])
    ->get()->getResultArray();
    return $query;
  }

  public function getBestSellerFish()
  {
    $query = $this->db->table('fish')
    ->where(['Rating_Fish >=' => 3])
    ->get()->getResultArray();
    return $query;
  }

  public function getTopSearchFish()
  {
    $query = $this->db->table('fish_views')
    ->join('fish', 'fish.Id_Fish = fish_views.Id_Fish', 'JOIN')
    ->orderBy('Total_Views', 'desc')
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

  public function getFishMyOrder($id)
  {
    $query = $this->db->table('cart')
    ->join('fish', 'cart.Id_Fish = fish.Id_Fish', 'JOIN')
    ->where(['cart.id' => $id])
    ->get()->getResultArray();
    return $query;
  }
}