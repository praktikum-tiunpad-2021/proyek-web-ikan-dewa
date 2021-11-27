<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - Update Transaction</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('bootstrap-grid.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('admin-style.css'); ?>">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col">
                    <h1 class="admin-text-1">Table Transaction</h1>
                    <h2 class="admin-text-2">Edit Data</h2>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top:10px; margin-bottom:30px">  
                <form action=" " method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td class="align-middle input-data-padding"><input class="input-data" type="hidden" id="Id_Transaction" name="Id_Transaction" value="<?= $Fish_Data['Id_Transaction']; ?>"></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Id_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Id_Fish" name="Id_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Id</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="int" id="input-id" name="id" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Buyer_First_Name</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Buyer_First_Name" name="Buyer_First_Name" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Buyer_Last_Name</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Buyer_Last_Name" name="Buyer_Last_Name" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Buyer_Number</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="int" id="input-Buyer_Number" name="Buyer_Number" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Buyer_Adress</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Buyer_Adress" name="Buyer_Adress" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Buyer_Post_Code</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="int" id="input-Buyer_Post_Code" name="Buyer_Post_Code" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Delivery_Service</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Delivery_Service" name="Delivery_Service" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Payment_Type</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Payment_Type" name="Payment_Type" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Total_Price</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="int" id="input-Total_Price" name="Total_Price" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Status_Transaction</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Status_Transaction" name="Status_Transaction" value=""></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="row justify-content-md-center">
                                        <button class="input-data-button" style="margin-left:30px;margin-top:20px; margin-right:10px" type="submit">Add Data</button>
                                        <a href="/admin/transaction" style="text-decoration:none"><button class="input-data-button" style="margin-top:20px" type="button">Back to View</button></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>