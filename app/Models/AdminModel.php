<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    public function getTableUsers()
    {
        $query = $this->db->table('users')
        ->get()->getResultArray();
        return $query;
    }

    public function getDataUser($id)
    {
        $query = $this->db->table('users')
        ->where(['id' => $id])
        ->get()->getResultArray();
        return $query;
    }

    public function getTableFish()
    {
        $query = $this->db->table('fish')
        ->get()->getResultArray();
        return $query;
    }

    public function getDataFish($Id_Fish)
    {
        $query = $this->db->table('fish')
        ->where(['Id_Fish' => $Id_Fish])
        ->get()->getResultArray();
        return $query;
    }

    public function getTableFishDetail()
    {
        $query = $this->db->table('fish_detail')
        ->get()->getResultArray();
        return $query;
    }

    public function getDataFishDetail($Id_Fish)
    {
        $query = $this->db->table('fish_detail')
        ->where(['Id_Fish' => $Id_Fish])
        ->get()->getResultArray();
        return $query;
    }

    public function getTableCart()
    {
        $query = $this->db->table('cart')
        ->get()->getResultArray();
        return $query;
    }

    public function getTableWishlist()
    {
        $query = $this->db->table('wishlist')
        ->get()->getResultArray();
        return $query;
    }

    public function getTablePayment()
    {
        $query = $this->db->table('payment_db')
        ->get()->getResultArray();
        return $query;
    }

    public function getDataPayment($Id_Payment_Db)
    {
        $query = $this->db->table('payment_db')
        ->where(['Id_Payment_Db' => $Id_Payment_Db])
        ->get()->getResultArray();
        return $query;
    }

    public function getTableTransaction($email)
    {
        $query = $this->db->table('transaction')
        ->join('users', 'users.id = transaction.id', 'JOIN')
        ->where(['users.email' => $email])
        ->get()->getResultArray();
        return $query;
    }

    public function getTableSeller()
    {
        $query = $this->db->table('seller')
        ->get()->getResultArray();
        return $query;
    }

    public function getDataSeller($Id_Seller)
    {
        $query = $this->db->table('seller')
        ->where(['Id_Seller' => $Id_Seller])
        ->get()->getResultArray();
        return $query;
    }

    public function getDataEmail()
    {
        $query = $this->db->table('users')
        ->get()->getResultArray();
        return $query;
    }

    public function getTablePostCode()
    {
        $query = $this->db->table('post_code')
        ->get()->getResultArray();
        return $query;
    }

}