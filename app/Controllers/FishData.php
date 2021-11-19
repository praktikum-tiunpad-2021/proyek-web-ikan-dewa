<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FishDataModel;

class FishData extends Controller{
  public function saveWishlist($Id_Fish)
  {
    $model = new FishDatamodel();
    $data = array(
      'Id_Fish' => $Id_Fish,
      'id' => (session()->get('id')),
    );
    $model->saveFishWishlist($data);
    return redirect()->to('/wishlist');
  }

  public function deleteWishlist($Id_Wishlist)
  {
    $model = new FishDataModel();
    $model->deleteFishWishlist($Id_Wishlist);
    return redirect()->to('/wishlist');
  }

  public function saveCart($Id_Fish)
  {
    $model = new FishDatamodel();
    $data = array(
      'Id_Fish' => $Id_Fish,
      'id' => (session()->get('id')),
    );
    $model->saveFishCart($data);
    return redirect()->to('/myOrder');
  }

  public function deleteCart($Id_Cart)
  {
    $model = new FishDataModel();
    $model->deleteFishCart($Id_Cart);
    return redirect()->to('/myOrder');
  }
}