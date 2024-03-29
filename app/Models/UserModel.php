<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'email';
  protected $allowedFields = ['email', 'password',  'Name_User', 'Born_Date'];
  protected $beforeInsert = ['hashPassword'];
  protected $beforeUpdate = ['hashPassword'];

  protected function hashPassword(array $data)
  {
    if (isset($data['data']['password']))
      $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

    return $data;
  }

  public function getNameUser($id, $x = true)
  {
    if($x === false){
      return $this->findAll();
    } else {
      return $this->where('id', $id)->first();
    }
  }

  public function updateProfile($data, $id)
  {
    $query = $this->db->table('users')
    ->update($data, array('id' => $id));
    return $query;
  }
}
