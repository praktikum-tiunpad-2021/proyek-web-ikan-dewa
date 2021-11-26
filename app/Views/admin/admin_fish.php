<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - fish</title>
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
                    <h1 class="admin-text-1">Table Fish</h1>
                </div>
            </div>
            <div class="row center" style="margin-top:10px; margin-bottom:30px">  
                <div class="col">
                    <table class="center" border="2" style="background-color:black;">
                        <thead style="background-color:silver;">
                            <tr>
                                <th class="view-text-1 table-padding">Id_Fish</th>
                                <th class="view-text-1 table-padding">Id_Seller</th>
                                <th class="view-text-1 table-padding">Name_Fish</th>
                                <th class="view-text-1 table-padding">Type_Fish</th>
                                <th class="view-text-1 table-padding">Class_Fish</th>
                                <th class="view-text-1 table-padding">Region_Fish</th>
                                <th class="view-text-1 table-padding">Color_Fish</th>
                                <th class="view-text-1 table-padding">Age_Fish</th>
                                <th class="view-text-1 table-padding">Price_Fish</th>
                                <th class="view-text-1 table-padding">Rating_Fish</th>
                                <th class="view-text-1 table-padding">Img_Fish</th>
                                <th class="view-text-1 table-padding">Alt_Img_Fish</th>
                                <th class="view-text-1 table-padding" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:white;">
                            <?php foreach($Fish_Data as $row) : ?>
                            <tr>
                                <td class="view-text-2 table-padding"><?= $row['Id_Fish']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Id_Seller']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Name_Fish']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Type_Fish']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Class_Fish']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Region_Fish']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Color_Fish']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Age_Fish']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Price_Fish']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Rating_Fish']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Img_Fish']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Fish_Views']; ?></td>
                                <td class="view-text-2 table-padding edit-square"><a class="view-button-1" href="">Edit</a></td>
                                <td class="view-text-2 table-padding delete-square"><a class="view-button-1" href="">Delete</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-bottom:30px">
                <div class="col-xs-3">
                    <a href="/admin/fish/add" style="margin-right:10px"><button class="view-button-2">Add New Data</button></a>
                    <a href="/admin"><button class="view-button-2">Exit to Menu</button></a>
                </div>
            </div>
        </div>
    </body>
</html>