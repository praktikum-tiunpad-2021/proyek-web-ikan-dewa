<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - transaction</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('bootstrap-grid.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('admin-style.css'); ?>">
    </head>
    <body>
        <div class="container">
            <?php if($Data_Transaction != null){?>
            <div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <h1 class="admin-text-1">Table Transaction</h1>
                    </div>
                </div>
                <div class="row center" style="margin-top:10px; margin-bottom:10px">  
                    <div class="col">
                        <table class="center" border="2" style="background-color:black;">
                            <thead style="background-color:silver;">
                                <tr>
                                    <th class="view-text-1 table-padding">Id Transaction</th>
                                    <th class="view-text-1 table-padding">Id_Fish</th>
                                    <th class="view-text-1 table-padding">Id</th>
                                    <th class="view-text-1 table-padding">First Name</th>
                                    <th class="view-text-1 table-padding">Last Name</th>
                                    <th class="view-text-1 table-padding">Phone Number</th>
                                    <th class="view-text-1 table-padding">Adress</th>
                                    <th class="view-text-1 table-padding">Post Code</th>
                                    <th class="view-text-1 table-padding">Delivery</th>
                                    <th class="view-text-1 table-padding">Payment</th>
                                    <th class="view-text-1 table-padding">Price</th>
                                    <th class="view-text-1 table-padding">Status</th>
                                    <th class="view-text-1 table-padding" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white;">
                                <?php foreach($Data_Transaction as $row) : ?>
                                <tr>
                                    <td class="view-text-2 table-padding"><?= $row['Id_Transaction']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Id_Fish']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['id']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Buyer_First_Name']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Buyer_Last_Name']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Buyer_Number']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Buyer_Address']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Buyer_Post_Code']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Delivery_Service']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Payment_Type']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Total_Price']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Status_Transaction']; ?></td>
                                    <td class="view-text-2 table-padding edit-square"><a class="view-button-1" href="/admin/transaction/edit/<?= $row['Id_Transaction']; ?>">Edit</a></td>
                                    <td class="view-text-2 table-padding delete-square"><a class="view-button-1" href="/AdminCRUD/Transaction_delete/<?= $row['Id_Transaction']; ?>">Delete</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <?php if($Data_Post_Code != null){
            if($Data_Transaction[0]['Buyer_Post_Code'] == $Data_Post_Code[0]['Post_Code']) { ?>
            <div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <h1 class="admin-text-1">Table Post Code</h1>
                    </div>
                </div>
                <div class="row center" style="margin-top:10px; margin-bottom:10px">  
                    <div class="col">
                        <table class="center" border="2" style="background-color:black;">
                            <thead style="background-color:silver;">
                                <tr>
                                    <th class="view-text-1 table-padding">Id Transaction</th>
                                    <th class="view-text-1 table-padding">Post Code</th>
                                    <th class="view-text-1 table-padding">Neighborhood</th>
                                    <th class="view-text-1 table-padding">District</th>
                                    <th class="view-text-1 table-padding">City</th>
                                    <th class="view-text-1 table-padding">Province</th>
                                    <th class="view-text-1 table-padding" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white;">
                                <?php foreach($Data_Post_Code as $row) : ?>
                                <tr>
                                    <td class="view-text-2 table-padding"><?= $row['Id_Post_Code']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Post_Code']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Neighborhood']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['District']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['City']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Province']; ?></td>
                                    <td class="view-text-2 table-padding edit-square"><a class="view-button-1" href="">Edit</a></td>
                                    <td class="view-text-2 table-padding delete-square"><a class="view-button-1" href="">Delete</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php } } ?> -->
            <?php if($Data_Cart != null){?>
            <div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <h1 class="admin-text-1">Table Cart</h1>
                    </div>
                </div>
                <div class="row center" style="margin-top:10px; margin-bottom:30px">  
                    <div class="col">
                        <table class="center" border="2" style="background-color:black;">
                            <thead style="background-color:silver;">
                                <tr>
                                    <th class="view-text-1 table-padding">Id Cart</th>
                                    <th class="view-text-1 table-padding">Id_Fish</th>
                                    <th class="view-text-1 table-padding">Name Fish</th>
                                    <th class="view-text-1 table-padding">Action</th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white;">
                                <?php foreach($Data_Cart as $row) : ?>
                                <tr>
                                    <td class="view-text-2 table-padding"><?= $row['Id_Cart']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Id_Fish']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Name_Fish']; ?></td>
                                    <td class="view-text-2 table-padding delete-square"><a class="view-button-1" href="/AdminCRUD/Cart_delete/<?= $row['Id_Cart']; ?>">Delete</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php } 
            if($Data_Wishlist != null){?>
            <div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <h1 class="admin-text-1">Table Wishlist</h1>
                    </div>
                </div>
                <div class="row center" style="margin-top:10px; margin-bottom:30px">  
                    <div class="col">
                        <table class="center" border="2" style="background-color:black;">
                            <thead style="background-color:silver;">
                                <tr>
                                    <th class="view-text-1 table-padding">Id Wishlist</th>
                                    <th class="view-text-1 table-padding">Id_Fish</th>
                                    <th class="view-text-1 table-padding">Name Fish</th>
                                    <th class="view-text-1 table-padding">Action</th>
                                </tr>
                            </thead>
                            <tbody style="background-color:white;">
                                <?php foreach($Data_Wishlist as $row) : ?>
                                <tr>
                                    <td class="view-text-2 table-padding"><?= $row['Id_Wishlist']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Id_Fish']; ?></td>
                                    <td class="view-text-2 table-padding"><?= $row['Name_Fish']; ?></td>
                                    <td class="view-text-2 table-padding delete-square"><a class="view-button-1" href="/AdminCRUD/Wishlist_delete/<?= $row['Id_Wishlist']; ?>">Delete</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row justify-content-md-center" style="margin-bottom:30px">
                <div class="col-xs-3">
                    <a href="/admin"><button class="view-button-2">Exit to Menu</button></a>
                    <a href="/admin/selectUser"><button class="view-button-2">Exit to Select User</button></a>
                </div>
            </div>
        </div>
    </body>
</html>