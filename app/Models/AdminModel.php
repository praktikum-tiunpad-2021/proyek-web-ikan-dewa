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

    public function getTableFishAndFishDetail()
    {
        $query = $this->db->table('fish')
        ->join('fish_detail', 'fish.Id_Fish = fish_detail.Id_Fish', 'JOIN')
        ->get()->getResultArray();
        return $query;
    }

    public function getDataFishAndFishDetail($Id_Fish)
    {
        $query = $this->db->table('fish')
        ->join('fish_detail', 'fish.Id_Fish = fish_detail.Id_Fish', 'JOIN')
        ->where(['fish.Id_Fish' => $Id_Fish])
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

    public function getTableCart($email)
    {
        $query = $this->db->table('cart')
        ->join('users', 'users.id = cart.id', 'JOIN')
        ->join('fish', 'fish.Id_Fish = cart.Id_Fish', 'JOIN')
        ->where(['users.email' => $email])
        ->get()->getResultArray();
        return $query;
    }

    public function getTableWishlist($email)
    {
        $query = $this->db->table('wishlist')
        ->join('users', 'users.id = wishlist.id', 'JOIN')
        ->join('fish', 'fish.Id_Fish = wishlist.Id_Fish', 'JOIN')
        ->where(['users.email' => $email])
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

    public function getTableTransactionById($Id_Transaction)
    {
        $query = $this->db->table('transaction')
        ->join('users', 'users.id = transaction.id', 'JOIN')
        ->where(['transaction.Id_Transaction' => $Id_Transaction])
        ->get()->getResultArray();
        return $query;
    }

    public function getIdPostCode($Id_Transaction)
    {
        $query = $this->db->table('post_code')
        ->where(['Id_Post_Code' => $Id_Transaction])
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

    public function getTablePostCode($Id_Transaction)
    {
        $query = $this->db->table('post_code')
        ->where(['Id_Post_Code' == $Id_Transaction])
        ->get()->getResultArray();
        return $query;
    }

    public function getTableVoucher()
    {
        $query = $this->db->table('voucher')
        ->get()->getResultArray();
        return $query;
    }

    public function getDataVoucher($Id_Voucher)
    {
        $query = $this->db->table('voucher')
        ->where(['Id_Voucher' => $Id_Voucher])
        ->get()->getResultArray();
        return $query;
    }
}