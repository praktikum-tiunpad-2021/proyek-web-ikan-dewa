<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - Add Seller</title>
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
                    <h1 class="admin-text-1">Table Seller</h1>
                    <h2 class="admin-text-2">Add Data</h2>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top:10px; margin-bottom:30px">  
                <form action="/admin/seller/update" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Id_Seller</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="Id_Seller" name="Id_Seller" value="<?= $Seller[0]['Id_Seller']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Name_Seller</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Name_Seller" name="Name_Seller" value="<?= $Seller[0]['Name_Seller']; ?>" required></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="row justify-content-md-center">
                                        <button class="input-data-button" style="margin-left:30px;margin-top:20px; margin-right:10px" type="submit">Edit Data</button>
                                        <a href="/admin/seller" style="text-decoration:none"><button class="input-data-button" style="margin-top:20px" type="button">Back to View</button></a>
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