<?php
namespace App\Models;
use CodeIgniter\Model;

class VoucherModel extends Model
{
    protected $table = 'voucher';
    protected $primaryKey = 'Id_Voucher';
    protected $allowedFields = ['Code_Voucher', 'Price_Discount'];
    protected $useAutoIncrement = true;
}