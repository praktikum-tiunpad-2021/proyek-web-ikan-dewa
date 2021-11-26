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

    public function getTableFishDetail()
    {
        $query = $this->db->table('fish_detail')
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

    public function getTableTransaction()
    {
        $query = $this->db->table('transaction')
        ->get()->getResultArray();
        return $query;
    }

    public function getTableSeller()
    {
        $query = $this->db->table('seller')
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