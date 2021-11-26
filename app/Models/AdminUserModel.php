<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminUserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password', 'Name_User', 'Born_Date'];
    protected $setAutoIncrement = true;

  public function getUsers($id = false)
  {
    if($id === false){
      return $this->findAll();
    } else {
      return $this->getWhere(['id' => $id]);
    }
  }
  public function add()
  {
    echo view('users_add');
  }

  public function saveUsers($data)
  {
    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }
  public function updateUsers($data, $id)
  {
    $query = $this->db->table($this->table)->update($data, array('id' => $id));
    return $query;
  }
  public function deleteUsers($id)
  {
    $query = $this->db->table($this->table)->delete(array('id' => $id));
    return $query;
  }
}