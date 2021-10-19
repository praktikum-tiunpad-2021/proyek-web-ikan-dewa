<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "Email";
    protected $returnType = "object";
    protected $allowedFields = ['Email', 'Password', 'Name_User', 'Tanggal_Lahir'];
}
?>