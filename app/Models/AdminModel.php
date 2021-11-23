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
}