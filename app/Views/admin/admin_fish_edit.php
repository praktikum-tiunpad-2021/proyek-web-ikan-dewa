<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - Update Fish</title>
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
                    <h1 class="admin-text-1">Table Update</h1>
                    <h2 class="admin-text-2">Edit Data</h2>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top:10px; margin-bottom:30px">  
                <form action="/admin/fish/update" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Id_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Id_Fish" name="Id_Fish" value="<?= $Fish_Data[0]['Id_Fish']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Id_Seller</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Id_Seller" name="Id_Seller" value="<?= $Fish_Data[0]['Id_Seller']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Name_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Name_Fish" name="Name_Fish" value="<?= $Fish_Data[0]['Name_Fish']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Type_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Type_Fish" name="Type_Fish" value="<?= $Fish_Data[0]['Type_Fish']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Class_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Class_Fish" name="Class_Fish" value="<?= $Fish_Data[0]['Class_Fish']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Region_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Region_Fish" name="Region_Fish" value="<?= $Fish_Data[0]['Region_Fish']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Color_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Color_Fish" name="Color_Fish" value="<?= $Fish_Data[0]['Color_Fish']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Age_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="number" id="input-Age_Fish" name="Age_Fish" value="<?= $Fish_Data[0]['Age_Fish']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Price_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="number" id="input-Price_Fish" name="Price_Fish" value="<?= $Fish_Data[0]['Price_Fish']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Rating_Fish (1-5)</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="range" id="input-Rating_Fish" name="Rating_Fish" min="0" max="5" value="<?= $Fish_Data[0]['Rating_Fish']; ?>" required></td>
                            </tr>
                            <!-- <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish</p></td> -->
                                <td class="align-middle input-data-padding"><input class="input-data" type="hidden" id="input-Img_Fish" name="Img_Fish" value="<?= $Fish_Data[0]['Img_Fish']; ?>"></td>
                            <!-- </tr> -->
                            <tr>
                                <td class="align-middle input-data-padding"><p>Fish_Views</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="number" id="input-Fish_Views" name="Fish_Views" value="<?= $Fish_Data[0]['Fish_Views']; ?>" required></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="row justify-content-md-center">
                                        <input class="input-data-button" style="margin-left:30px;margin-top:20px; margin-right:10px" type="submit" value="Edit Data">
                                        <a href="/admin/fish" style="text-decoration:none"><button class="input-data-button" style="margin-top:20px" type="button">Back to View</button></a>
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