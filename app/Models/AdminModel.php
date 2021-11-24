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
}