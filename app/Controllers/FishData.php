<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FishDataModel;
use App\Models\TransactionModel;

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

  public function saveTransaction()
  {
    $model = new TransactionModel();
    $model2 = new FishDataModel();
    $Id_Fish = $this->request->getVar('Id_Fish');
    $model->save([
    'Id_Fish' => $this->request->getVar('Id_Fish'),
    'id' => $this->request->getVar('id'),
    'Buyer_First_Name' => $this->request->getVar('Buyer_First_Name'),
    'Buyer_Last_Name' => $this->request->getVar('Buyer_Last_Name'),
    'Buyer_Number' => $this->request->getVar('Buyer_Number'),
    'Buyer_Address' => $this->request->getVar('Buyer_Address'),
    'Buyer_Province' => $this->request->getVar('Buyer_Province'),
    'Buyer_City' => $this->request->getVar('Buyer_City'),
    'Buyer_District' => $this->request->getVar('Buyer_District'),
    'Buyer_Neighborhood' => $this->request->getVar('Buyer_Neighborhood'),
    'Buyer_Post_Code' => $this->request->getVar('Buyer_Post_Code'),
    'Delivery_Service' => $this->request->getVar('Delivery_Service'),
    'Payment_Type' => $this->request->getVar('Payment_Type'),
    'Total_Price' => $this->request->getVar('Total_Price'),
    'Status_Transaction' => $this->request->getVar('Status_Transaction'),
    ]);
    $Id_Transaction = $model->getIdTransaction();
    $FishData = $model2->getFishData($Id_Fish);
    $data = [
      'fishData' => $FishData,
      'Data_Transaction' => $Id_Transaction,
    ];
    return view('pages/checkout2', $data);
  }

  public function deleteTransaction($Id_Transaction)
  {
    $model = new FishDataModel();
    $model->deleteTransaction($Id_Transaction);
    return redirect()->to('/myOrder');
  }

  public function updateTransaction()
  {
    $model = new TransactionModel();
    $data = array(
      'Status_Transaction' => $this->request->getPost('Status_Transaction'),
    );
    $model->updateStatusTransaction($data, $this->request->getPost('Id_Transaction'));
    return redirect()->to('/myOrder');
  }
}