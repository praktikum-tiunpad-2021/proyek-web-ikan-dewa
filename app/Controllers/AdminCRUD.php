<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminCRUDModel;

class AdminCRUD extends BaseController{
  /* ------------------------ BATAS TABLE ------------------------ */
  public function Users_save()
  {
    $model = new AdminCRUDModel();
    $passwordHash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
    $data = array(
      'email' => $this->request->getPost('email'),
      'password' => $passwordHash,
      'Name_User' => $this->request->getPost('Name_User'),
      'Born_Date' => $this->request->getPost('Born_Date'),
    );
    $model->saveUsers($data);
    return redirect()->to('/admin/users');
  }
  public function Users_update()
  {
    $model = new AdminCRUDModel();
    $id = $this->request->getPost('id');
    $passwordHash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
    $data = array(
      'email' => $this->request->getPost('email'),
      'password' => $passwordHash,
      'Name_User' => $this->request->getPost('Name_User'),
      'Born_Date' => $this->request->getPost('Born_Date'),
    );
    $model->updateUsers($data, $id);
    return redirect()->to('/admin/users');
  }
  public function Users_delete($id)
  {
    $model = new AdminCRUDModel();
    $model->deleteUsers($id);
    return redirect()->to('/admin/users');
  }

  /* ------------------------ BATAS TABLE ------------------------ */
  public function Fish_save()
  {
    $model = new AdminCRUDModel();
    $data = array(
      'Name_Fish' => $this->request->getPost('Name_Fish'),
      'Type_Fish' => $this->request->getPost('Type_Fish'),
      'Class_Fish' => $this->request->getPost('Class_Fish'),
      'Region_Fish' => $this->request->getPost('Region_Fish'),
      'Color_Fish' => $this->request->getPost('Color_Fish'),
      'Age_Fish' => $this->request->getPost('Age_Fish'),
      'Price_Fish' => $this->request->getPost('Price_Fish'),
      'Rating_Fish' => $this->request->getPost('Rating_Fish'),
      'Img_Fish' => $this->request->getPost('Img_Fish'),
      'Fish_Views' => $this->request->getPost('Fish_Views'),
    );
    $model->saveFish($data);
    return redirect()->to('/admin/fish');
  }
  public function Fish_update()
  {
    $model = new AdminCRUDModel();
    $Id_Fish = $this->request->getPost('Id_Fish');
    $data = array(
      'Name_Fish' => $this->request->getPost('Name_Fish'),
      'Type_Fish' => $this->request->getPost('Type_Fish'),
      'Class_Fish' => $this->request->getPost('Class_Fish'),
      'Region_Fish' => $this->request->getPost('Region_Fish'),
      'Color_Fish' => $this->request->getPost('Color_Fish'),
      'Age_Fish' => $this->request->getPost('Age_Fish'),
      'Price_Fish' => $this->request->getPost('Price_Fish'),
      'Rating_Fish' => $this->request->getPost('Rating_Fish'),
      'Img_Fish' => $this->request->getPost('Img_Fish'),
      'Fish_Views' => $this->request->getPost('Fish_Views'),
    );
    $model->updateFish($data, $Id_Fish);
    return redirect()->to('/admin/fish');
  }
  public function Fish_delete($Id_Fish)
  {
    $model = new AdminCRUDModel();
    $model->deleteFish($Id_Fish);
    return redirect()->to('/admin/fish');
  }
  
  /* ------------------------ BATAS TABLE ------------------------ */
  public function FishDetail_save()
  {
    $model = new AdminCRUDModel();
    $data = array(
      'Desc_Fish_1' => $this->request->getPost('Desc_Fish_1'),
      'Desc_Fish_2' => $this->request->getPost('Desc_Fish_2'),
      'Desc_Fish_3' => $this->request->getPost('Desc_Fish_3'),
      'Desc_Fish_4' => $this->request->getPost('Desc_Fish_4'),
      'Desc_Fish_5' => $this->request->getPost('Desc_Fish_5'),
      'Img_Fish_1' => $this->request->getPost('Img_Fish_1'),
      'Img_Fish_2' => $this->request->getPost('Img_Fish_2'),
      'Img_Fish_3' => $this->request->getPost('Img_Fish_3'),
      'Img_Fish_4' => $this->request->getPost('Img_Fish_4'),
      'Img_Fish_5' => $this->request->getPost('Img_Fish_5'),
    );
    $model->saveFishDetail($data);
    return redirect()->to('/admin/fishDetail');
  }
  public function FishDetail_update()
  {
    $model = new AdminCRUDModel();
    $Id_Fish = $this->request->getPost('Id_Fish');
    $data = array(
      'Desc_Fish_1' => $this->request->getPost('Desc_Fish_1'),
      'Desc_Fish_2' => $this->request->getPost('Desc_Fish_2'),
      'Desc_Fish_3' => $this->request->getPost('Desc_Fish_3'),
      'Desc_Fish_4' => $this->request->getPost('Desc_Fish_4'),
      'Desc_Fish_5' => $this->request->getPost('Desc_Fish_5'),
      'Img_Fish_1' => $this->request->getPost('Img_Fish_1'),
      'Img_Fish_2' => $this->request->getPost('Img_Fish_2'),
      'Img_Fish_3' => $this->request->getPost('Img_Fish_3'),
      'Img_Fish_4' => $this->request->getPost('Img_Fish_4'),
      'Img_Fish_5' => $this->request->getPost('Img_Fish_5'),
    );
    $model->updateFishDetail($data, $Id_Fish);
    return redirect()->to('/admin/fishDetail');
  }
  public function FishDetail_delete($Id_Fish)
  {
    $model = new AdminCRUDModel();
    $model->deleteFishDetail($Id_Fish);
    return redirect()->to('/admin/fishDetail');
  }

  /* ------------------------ BATAS TABLE ------------------------ */
  public function PaymentDb_save()
  {
    $model = new AdminCRUDModel();
    $data = array(
      'Payment_Type' => $this->request->getPost('Payment_Type'),
      'Name_Payment' => $this->request->getPost('Name_Payment'),
      'Number_Payment' => $this->request->getPost('Number_Payment'),
      'Owner_Payment' => $this->request->getPost('Owner_Payment'),
    );
    $model->savePaymentDb($data);
    return redirect()->to('/admin/paymentDb');
  }
  public function PaymentDb_update()
  {
    $model = new AdminCRUDModel();
    $Id_Payment_Db = $this->request->getPost('Id_Payment_Db');
    $data = array(
      'Payment_Type' => $this->request->getPost('Payment_Type'),
      'Name_Payment' => $this->request->getPost('Name_Payment'),
      'Number_Payment' => $this->request->getPost('Number_Payment'),
      'Owner_Payment' => $this->request->getPost('Owner_Payment'),
    );
    $model->updatePaymentDb($data, $Id_Payment_Db);
    return redirect()->to('/admin/paymentDb');
  }
  public function PaymentDb_delete($Id_Payment_Db)
  {
    $model = new AdminCRUDModel();
    $model->deletePaymentDb($Id_Payment_Db);
    return redirect()->to('/admin/paymentDb');
  }

  /* ------------------------ BATAS TABLE ------------------------ */
  public function Seller_save()
  {
    $model = new AdminCRUDModel();
    $data = array(
      'Id_Seller' => $this->request->getPost('Id_Seller'),
      'Name_Seller' => $this->request->getPost('Name_Seller'),
    );
    $model->saveSeller($data);
    return redirect()->to('/admin/seller');
  }
  public function Seller_update()
  {
    $model = new AdminCRUDModel();
    $Id_Seller = $this->request->getPost('Id_Seller');
    $data = array(
      'Name_Seller' => $this->request->getPost('Name_Seller'),
    );
    $model->updateSeller($data, $Id_Seller);
    return redirect()->to('/admin/seller');
  }
  public function Seller_delete($Id_Seller)
  {
    $model = new AdminCRUDModel();
    $model->deleteSeller($Id_Seller);
    return redirect()->to('/admin/seller');
  }

  /* ------------------------ BATAS TABLE ------------------------ */
  public function Transaction_update()
  {
    $model = new AdminCRUDModel();
    $Id_Transaction = $this->request->getPost('Id_Transaction');
    $data = array(
      'Buyer_First_Name' => $this->request->getPost('Buyer_First_Name'),
      'Buyer_Last_Name' => $this->request->getPost('Buyer_Last_Name'),
      'Buyer_Number' => $this->request->getPost('Buyer_Number'),
      'Buyer_Address' => $this->request->getPost('Buyer_Address'),
      'Buyer_Post_Code' => $this->request->getPost('Buyer_Post_Code'),

    );
    $model->updateTransaction($data, $Id_Transaction);
    return redirect()->to('/admin/selectUser');
  }
  public function Transaction_delete($Id_Transaction)
  {
    $model = new AdminCRUDModel();
    $model->deleteTransaction($Id_Transaction);
    return redirect()->to('/admin/selectUser');
  }
  public function Cart_delete($Id_Cart)
  {
    $model = new AdminCRUDModel();
    $model->deleteCart($Id_Cart);
    return redirect()->to('/admin/selectUser');
  }
  public function Wishlist_delete($Id_Wishlist)
  {
    $model = new AdminCRUDModel();
    $model->deleteWishlist($Id_Wishlist);
    return redirect()->to('/admin/selectUser');
  }
}