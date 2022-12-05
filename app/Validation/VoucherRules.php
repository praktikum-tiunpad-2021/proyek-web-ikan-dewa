<?php

namespace App\validation;

use App\Models\VoucherModel;

class VoucherRules
{
  public function validateVoucher(string $str, string $fields, array $data)
  {
    $model = new VoucherModel();
    $voucher = $model->where('Code_Voucher', $data['Code_Voucher'])->first();
    if (!$voucher)
      return false;
    return strcmp($data['Code_Voucher'], $voucher['Code_Voucher']);
  }
}
