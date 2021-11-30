<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - Add Fish</title>
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
                    <h2 class="admin-text-2">Add Data</h2>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top:10px; margin-bottom:30px">  
                <form action="/adminFish/save" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Id_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Id_Fish" name="Id_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Id_Seller</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-password" name="Id_Seller" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Name_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Name_Fish" name="Name_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Type_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Type_Fish" name="Type_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Class_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Class_Fish" name="Class_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Region_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Region_Fish" name="Region_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Color_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Color_Fish" name="Color_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Age_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="number" id="input-Age_Fish" name="Age_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Price_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="number" id="input-Price_Fish" name="Price_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Rating_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="number" id="input-Rating_Fish" name="Rating_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="img" id="input-Img_Fish" name="Img_Fish" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Fish_Views</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="number" id="input-Fish_Views" name="Fish_Views" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Desc_Fish_1</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Desc_Fish_1" name="Desc_Fish_1" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Desc_Fish_2</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Desc_Fish_2" name="Desc_Fish_2" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Desc_Fish_3</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Desc_Fish_3" name="Desc_Fish_3" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Desc_Fish_4</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Desc_Fish_4" name="Desc_Fish_4" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Desc_Fish_5</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Desc_Fish_5" name="Desc_Fish_5" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish_1</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="file" id="input-Img_Fish_1" name="Img_Fish_1" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish_2</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="file" id="input-Img_Fish_2" name="Img_Fish_2" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish_3</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="file" id="input-Img_Fish_3" name="Img_Fish_3" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish_4</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="file" id="input-Img_Fish_4" name="Img_Fish_4" value=""></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish_5</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="file" id="input-Img_Fish_5" name="Img_Fish_5" value=""></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="row justify-content-md-center">
                <button class="input-data-button" style="margin-left:30px;margin-top:20px; margin-right:10px" type="submit">Add Data</button>
                <a href="/admin/fish" style="text-decoration:none"><button class="input-data-button" style="margin-top:20px" type="button">Back to View</button></a>
            </div>
        </div>
    </body>
</html>