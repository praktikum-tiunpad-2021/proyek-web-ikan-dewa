<?php

namespace App\Controllers;
use App\Models\AdminModel;


class Admin extends BaseController
{
    public function admin_home(){
        return view('admin/admin_home');
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_users(){
        $User_Data = $this->AdminModel->getTableUsers();
        $data = [
            'User_Data' => $User_Data,
        ];
        return view('admin/admin_users', $data);
    }  
    public function admin_users_add(){
        return view('admin/admin_users_add');
    }
    public function admin_users_edit($id){
        $User_Data = $this->AdminModel->getDataUser($id);
        $data = [
            'User_Data' => $User_Data,
        ];
        return view('admin/admin_users_edit', $data);
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_fish(){
        $Fish_Data = $this->AdminModel->getTableFishAndFishDetail();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_fish', $data);
    }
    public function admin_fish_detail($Id_Fish){
        $Fish_Data = $this->AdminModel->getDataFishAndFishDetail($Id_Fish);
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_fishDetail', $data);
    }
    public function admin_fish_add(){
        return view('admin/admin_fish_add');
    }
    public function admin_fish_edit($Id_Fish){
        $Fish_Data = $this->AdminModel->getDataFish($Id_Fish);
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_fish_edit', $data);
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_fishDetail(){
        $Fish_Data = $this->AdminModel->getTableFishDetail();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_fishDetail', $data);
    }
    public function admin_fishDetail_edit($Id_Fish){
        $Fish_Data = $this->AdminModel->getDataFishDetail($Id_Fish);
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_fishDetail_edit', $data);
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_cart(){
        $Fish_Data = $this->AdminModel->getTableCart();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_cart', $data);
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_wishlist(){
        $Fish_Data = $this->AdminModel->getTableWishlist();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_wishlist', $data);
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_paymentDb(){
        $Payment_Db = $this->AdminModel->getTablePayment();
        $data = [
            'Payment_Db' => $Payment_Db,
        ];
        return view('admin/admin_paymentDb', $data);
    }
    public function admin_paymentDb_add(){
        return view('admin/admin_paymentDb_add');
    }
    public function admin_paymentDb_edit($Id_Payment_Db){
        $Payment_Db = $this->AdminModel->getDataPayment($Id_Payment_Db);
        $data = [
            'Payment_Db' => $Payment_Db,
        ];
        return view('admin/admin_paymentDb_edit', $data);
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_select_user(){
        $Data_Email = $this->AdminModel->getDataEmail();
        $data = [
            'Data_Email' => $Data_Email,
        ];
        return view('admin/admin_select_user', $data);
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_user_data()
    {
        $model = new AdminModel();
        $data = array(
            'email' => $this->request->getPost('email'),
        );
        $Data_Transaction = $this->AdminModel->getTableTransaction($data);
        $Data_Cart = $this->AdminModel->getTableCart($data);
        $Data_Wishlist = $this->AdminModel->getTableWishlist($data);
        // $Id_Transaction = $this->AdminModel->getIdPostCode();
        $Data_Post_Code = $this->AdminModel->getTablePostCode($Data_Transaction);
        $data2 = [
            'Data_Transaction' => $Data_Transaction,
            'Data_Post_Code' => $Data_Post_Code,
            'Data_Cart' => $Data_Cart,
            'Data_Wishlist' => $Data_Wishlist,
        ];
        // dd($Id_Transaction);
        // dd($data2);
        return view('admin/admin_user_data', $data2);
    }

    public function admin_transaction_edit($Id_Transaction)
    {
        $Data_Transaction = $this->AdminModel->getTableTransactionById($Id_Transaction);
        $data = [
            'Data_Transaction' => $Data_Transaction,
        ];
        return view('admin/admin_transaction_edit', $data);
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_seller(){
        $Seller = $this->AdminModel->getTableSeller();
        $data = [
            'Seller' => $Seller,
        ];
        return view('admin/admin_seller', $data);
    }
    public function admin_seller_add(){
        return view('admin/admin_seller_add');
    }
    public function admin_seller_edit($Id_Seller){
        $Seller = $this->AdminModel->getDataSeller($Id_Seller);
        $data = [
            'Seller' => $Seller,
        ];
        return view('admin/admin_seller_edit', $data);
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_postCode(){
        $Fish_Data = $this->AdminModel->getTablePostCode();
        $data = [
            'Fish_Data' => $Fish_Data,
        ];
        return view('admin/admin_postCode', $data);
    }

    /* ------------------------ BATAS TABLE ------------------------ */
    public function admin_voucher(){
        $DataVoucher = $this->AdminModel->getTableVoucher();
        $data = [
            'DataVoucher' => $DataVoucher,
        ];
        return view('admin/admin_voucher', $data);
    }
    public function admin_voucher_add(){
        return view('admin/admin_voucher_add');
    }
    public function admin_voucher_edit($Id_Voucher){
        $DataVoucher = $this->AdminModel->getDataVoucher($Id_Voucher);
        $data = [
            'DataVoucher' => $DataVoucher,
        ];
        return view('admin/admin_voucher_edit', $data);
    }
}