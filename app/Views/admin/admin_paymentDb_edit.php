<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - Update Payment</title>
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
                    <h1 class="admin-text-1">Table Payment</h1>
                    <h2 class="admin-text-2">Edit Data</h2>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top:10px; margin-bottom:30px">  
                <form action="/admin/paymentDb/update" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Id_Payment_Db</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="number" id="input-Id_Payment_Db" name="Id_Payment_Db" value="<?= $Payment_Db[0]['Id_Payment_Db']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Payment_Type</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Payment_Type" name="Payment_Type" value="<?= $Payment_Db[0]['Payment_Type']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Name_Payment</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Name_Payment" name="Name_Payment" value="<?= $Payment_Db[0]['Name_Payment']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Number_Payment</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="number" id="input-Number_Payment" name="Number_Payment" value="<?= $Payment_Db[0]['Number_Payment']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Owner_Payment</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Owner_Payment" name="Owner_Payment" value="<?= $Payment_Db[0]['Owner_Payment']; ?>" required></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="row justify-content-md-center">
                                        <button class="input-data-button" style="margin-left:30px;margin-top:20px; margin-right:10px" type="submit">Edit Data</button>
                                        <a href="/admin/paymentDb" style="text-decoration:none"><button class="input-data-button" style="margin-top:20px" type="button">Back to View</button></a>
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