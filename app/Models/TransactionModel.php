<?php
namespace App\Models;
use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'Id_Transaction';
    protected $allowedFields = ['Id_Fish', 'id', 'Buyer_First_Name', 
    'Buyer_Last_Name', 'Buyer_Number', 'Buyer_Address', 'Buyer_Post_Code',
    'Delivery_Service', 'Payment_Type', 'Total_Price', 'Status_Transaction'];
    protected $useAutoIncrement = true;

    public function getDataTransactionById($Id_Transaction){
        $query = $this->db->table('transaction')
        ->join('fish', 'fish.Id_Fish = transaction.Id_Fish', 'JOIN')
        ->where(['Id_Transaction' => $Id_Transaction])
        ->get()->getRowArray();
        return $query;
    }

    public function getDataTransaction(){
      $query = $this->db->table('transaction')
        ->join('fish', 'fish.Id_Fish = transaction.Id_Fish', 'JOIN')
        ->orderBy('Id_Transaction', 'desc')
        ->get()->getResultArray();
        return $query[0];
    }

    public function getTransactionSuccess($id)
    {
      $query = $this->db->table('transaction')
      ->join('fish', 'fish.Id_Fish = transaction.Id_Fish', 'JOIN')
      ->join('users', 'users.id = transaction.id', 'JOIN')
      ->where(array('transaction.id' => $id, 'transaction.Status_Transaction' => 'Success'))
      ->get()->getResultArray();
      return $query;
    }
  
    public function getTransactionPending($id)
    {
      $query = $this->db->table('transaction')
      ->join('fish', 'fish.Id_Fish = transaction.Id_Fish', 'JOIN')
      ->join('users', 'users.id = transaction.id', 'JOIN')
      ->where(array('transaction.id' => $id, 'transaction.Status_Transaction' => 'Pending'))
      ->get()->getResultArray();
      return $query;
    }

    public function updateStatusTransaction($data, $Id_Transaction)
    {
      $query = $this->db->table('transaction')
      ->join('fish', 'fish.Id_Fish = transaction.Id_Fish', 'JOIN')
      ->update($data, array('Id_Transaction' => $Id_Transaction));
      return $query;
    }

    public function deleteTransaction($Id_Transaction)
    {
      $query = $this->db->table('transaction')
      ->delete(array('Id_Transaction' => $Id_Transaction));
      return $query;
    }

    public function getDetailOrder($Id_Transaction){
      $query = $this->db->table('transaction')
        ->join('(fish JOIN fish_detail ON fish.Id_Fish = fish_detail.Id_Fish JOIN seller ON fish.Id_Seller = seller.Id_Seller)', 'fish.Id_Fish = transaction.Id_Fish', 'JOIN')
        ->where(['Id_Transaction' => $Id_Transaction])
        ->get()->getRowArray();
        return $query;
    }

    public function getDetailOrderPostCode($Id_Transaction){
      $query = $this->db->table('post_code')
        ->where(['Id_Post_Code' => $Id_Transaction])
        ->get()->getRowArray();
        return $query;
    }

    public function getPaymentDataVA(){
      $query = $this->db->table('payment_db')
      ->where(['Payment_Type' => 'Virtual Account'])
      ->get()->getResultArray();
      return $query;
    }

    public function getPaymentDataGM(){
      $query = $this->db->table('payment_db')
      ->where(['Payment_Type' => 'Gerai Minimarket'])
      ->get()->getResultArray();
      return $query;
    }

    public function getPaymentDataTF(){
      $query = $this->db->table('payment_db')
      ->where(['Payment_Type' => 'Transfer Bank'])
      ->get()->getResultArray();
      return $query;
    }
}