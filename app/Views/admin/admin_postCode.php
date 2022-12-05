<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - post code</title>
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
                    <h1 class="admin-text-1">Table Post Code</h1>
                </div>
            </div>
            <div class="row center" style="margin-top:10px; margin-bottom:30px">  
                <div class="col">
                    <table class="center" border="2" style="background-color:black;">
                        <thead style="background-color:silver;">
                            <tr>
                                <th class="view-text-1 table-padding">ID</th>
                                <th class="view-text-1 table-padding">Post Code</th>
                                <th class="view-text-1 table-padding">Neighborhood</th>
                                <th class="view-text-1 table-padding">Disctrict</th>
                                <th class="view-text-1 table-padding">City</th>
                                <th class="view-text-1 table-padding">Province</th>
                                <th class="view-text-1 table-padding" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:white;">
                            <?php foreach($Fish_Data as $row) : ?>
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
            <div class="row justify-content-md-center" style="margin-bottom:30px">
                <div class="col-xs-3">
                    <a href="/admin/users/add" style="margin-right:10px"><button class="view-button-2">Add New Data</button></a>
                    <a href="/admin"><button class="view-button-2">Exit to Menu</button></a>
                </div>
            </div>
        </div>
    </body>
</html>