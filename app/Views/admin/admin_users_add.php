<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - Add users</title>
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
                    <h2 class="admin-text-2">Add Data</h2>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top:10px; margin-bottom:30px">  
                <form action="" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Nama Email</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="email" id="email" name="email"></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Password</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="password" id="password" name="password"></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Nama Pengguna</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="number" id="Name_User" name="Name_User"></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Tanggal Lahir</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="date" id="Born_Date" name="Born_Date"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="row justify-content-md-center">
                                        <button class="input-data-button" style="margin-left:30px;margin-top:20px; margin-right:10px" type="submit">Add Data</button>
                                        <a href="/admin/users" style="text-decoration:none"><button class="input-data-button" style="margin-top:20px" type="button">Back to View</button></a>
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