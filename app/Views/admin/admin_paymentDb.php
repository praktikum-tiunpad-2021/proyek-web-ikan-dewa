<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - Payment</title>
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
                </div>
            </div>
            <div class="row center" style="margin-top:10px; margin-bottom:30px">  
                <div class="col">
                    <table class="center" border="2" style="background-color:black;">
                        <thead style="background-color:silver;">
                            <tr>
                                <th class="view-text-1 table-padding">Id Payment Db</th>
                                <th class="view-text-1 table-padding">Payment Type</th>
                                <th class="view-text-1 table-padding">Name Payment</th>
                                <th class="view-text-1 table-padding">Number Payment</th>
                                <th class="view-text-1 table-padding">Owner Payment</th>
                                <th class="view-text-1 table-padding" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:white;">
                            <?php foreach($Payment_Db as $row) : ?>
                            <tr>
                                <td class="view-text-2 table-padding"><?= $row['Id_Payment_Db']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Payment_Type']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Name_Payment']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Number_Payment']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Owner_Payment']; ?></td>
                                <td class="view-text-2 table-padding edit-square"><a class="view-button-1" href="/admin/paymentDb/edit/<?= $row['Id_Payment_Db']; ?>">Edit</a></td>
                                <td class="view-text-2 table-padding delete-square"><a class="view-button-1" href="/admin/paymentDb/delete/<?= $row['Id_Payment_Db']; ?>">Delete</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-bottom:30px">
                <div class="col-xs-3">
                    <a href="/admin/paymentDb/add" style="margin-right:10px"><button class="view-button-2">Add New Data</button></a>
                    <a href="/admin"><button class="view-button-2">Exit to Menu</button></a>
                </div>
            </div>
        </div>
    </body>
</html>