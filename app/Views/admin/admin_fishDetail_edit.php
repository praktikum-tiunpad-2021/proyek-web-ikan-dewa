<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - Update Fish Detail</title>
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
                    <h1 class="admin-text-1">Table Fish Detail</h1>
                    <h2 class="admin-text-2">Edit Data</h2>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top:10px; margin-bottom:30px">  
                <form action="/admin/fishDetail/update" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Id_Fish</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Id_Fish" name="Id_Fish" value="<?= $Fish_Data[0]['Id_Fish']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Desc_Fish_1</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Desc_Fish_1" name="Desc_Fish_1" value="<?= $Fish_Data[0]['Desc_Fish_1']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Desc_Fish_2</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Desc_Fish_2" name="Desc_Fish_2" value="<?= $Fish_Data[0]['Desc_Fish_2']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Desc_Fish_3</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Desc_Fish_3" name="Desc_Fish_3" value="<?= $Fish_Data[0]['Desc_Fish_3']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Desc_Fish_4</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Desc_Fish_4" name="Desc_Fish_4" value="<?= $Fish_Data[0]['Desc_Fish_4']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Desc_Fish_5</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Desc_Fish_5" name="Desc_Fish_5" value="<?= $Fish_Data[0]['Desc_Fish_5']; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish_1</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Img_Fish_1" name="Img_Fish_1" value="<?= $Fish_Data[0]['Img_Fish_1']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish_2</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Img_Fish_2" name="Img_Fish_2" value="<?= $Fish_Data[0]['Img_Fish_2']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish_3</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Img_Fish_3" name="Img_Fish_3" value="<?= $Fish_Data[0]['Img_Fish_3']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish_4</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Img_Fish_4" name="Img_Fish_4" value="<?= $Fish_Data[0]['Img_Fish_4']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="align-middle input-data-padding"><p>Img_Fish_5</p></td>
                                <td class="align-middle input-data-padding"><input class="input-data" type="text" id="input-Img_Fish_5" name="Img_Fish_5" value="<?= $Fish_Data[0]['Img_Fish_5']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="row justify-content-md-center">
                                        <input class="input-data-button" style="margin-left:30px;margin-top:20px; margin-right:10px" type="submit" value="Edit Data">
                                        <a href="/admin/fishDetail" style="text-decoration:none"><button class="input-data-button" style="margin-top:20px" type="button">Back to View</button></a>
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