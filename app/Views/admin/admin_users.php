<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - users</title>
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
                    <h1 class="admin-text-1">Table Users</h1>
                </div>
            </div>
            <div class="row center" style="margin-top:10px; margin-bottom:30px">  
                <div class="col">
                    <table class="center" border="2" style="background-color:black;">
                        <thead style="background-color:silver;">
                            <tr>
                                <th class="view-text-1 table-padding">id</th>
                                <th class="view-text-1 table-padding">email</th>
                                <th class="view-text-1 table-padding">password</th>
                                <th class="view-text-1 table-padding">Name_User</th>
                                <th class="view-text-1 table-padding">Born_Date</th>
                                <th class="view-text-1 table-padding" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:white;">
                            <?php foreach($User_Data as $row) : ?>
                            <tr>
                                <td class="view-text-2 table-padding"><?= $row['id']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['email']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['password']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Name_User']; ?></td>
                                <td class="view-text-2 table-padding"><?= $row['Born_Date']; ?></td>
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