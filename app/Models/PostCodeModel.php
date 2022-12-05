<?php
namespace App\Models;
use CodeIgniter\Model;

class PostCodeModel extends Model
{
    protected $table = 'post_code';
    protected $primaryKey = 'Id_Post_Code';
    protected $allowedFields = ['Post_Code', 'Neighborhood', 'District', 'City', 'Province'];
    protected $setAutoIncrement = false;
}