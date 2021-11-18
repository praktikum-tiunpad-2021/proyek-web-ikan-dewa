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

  public function getNameUser($Name_User,$id = true)
  {
    if($id === false){
      return $this->findAll();
    } else {
      return $this->where('Name_User', $Name_User)->first();
    }
  }
}
