<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - users</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('bootstrap-grid.css'); ?>">
        <style>
            .center {
                margin-left: auto;
                margin-right: auto;
            }
            .border-black {
                border: 1px solid black;
            }
            h1 {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-size: 36px;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
            .edit-square {
                background-color: green;
            }
            .delete-square {
                background-color: red;
            }
            .action-button {
                color: white;
            }
            .action-button:hover {
                color: white;
            }
            .second-action-button {
                background-color: white;
                color: black;
                padding: 5px;
                border: 1px solid black;
                transition: 0.4s;
            }
            .second-action-button:hover {
                background-color: lightblue;
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="container center">
            <div class="row center">
                <div class="center">
                    <h1>Table Users</h1>
                </div>
                <table class="border-black">
                    <thead class="border-black">
                        <tr>
                            <td class="border-black">id</td>
                            <td class="border-black">email</td>
                            <td class="border-black">password</td>
                            <td class="border-black">Name_User</td>
                            <td class="border-black">Born_Date</td>
                            <th class="border-black" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($User_Data as $row) : ?>
                        <tr>
                            <td class="border-black"><?= $row['id']; ?></td>
                            <td class="border-black"><?= $row['email']; ?></td>
                            <td class="border-black"><?= $row['password']; ?></td>
                            <td class="border-black"><?= $row['Name_User']; ?></td>
                            <td class="border-black"><?= $row['Born_Date']; ?></td>
                            <td class="border-black edit-square"><a class="action-button" href="">Edit</a></td>
                            <td class="border-black delete-square"><a class="action-button" href="">Delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="" style="margin-right:10px"><button class="second-action-button">Add Cargo</button></a>
                <a href="/admin"><button class="second-action-button">Exit to Menu</button></a>
            </div>
        </div>
    </body>
</html>