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
            <h1 class="admin-text-1">Table Fish Detail</h1>
            <div class="row" style="margin-top:30px">
                <div class="col-4">
                    <table class="center" border="2" style="background-color:black;">
                        <tr style="background-color:silver">
                            <th class="view-text-1 table-padding">Column</th>
                            <th class="view-text-1 table-padding">Data</th>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Id_Fish</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Id_Fish']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Id_Seller</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Id_Seller']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Name_Fish</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Name_Fish']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Type_Fish</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Type_Fish']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Class_Fish</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Class_Fish']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Region_Fish</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Region_Fish']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Color_Fish</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Color_Fish']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Age_Fish</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Age_Fish']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Price_Fish</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Price_Fish']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Rating_Fish</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Rating_Fish']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Fish_Views</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Fish_Views']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Desc_Fish_1</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Desc_Fish_1']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Desc_Fish_2</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Desc_Fish_2']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Desc_Fish_3</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Desc_Fish_3']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Desc_Fish_4</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Desc_Fish_4']; ?></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Desc_Fish_5</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Desc_Fish_5']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-5">
                    <table class="" border="2" style="background-color:black;">
                        <tr style="background-color:silver">
                            <th class="view-text-1 table-padding">Column</th>
                            <th class="view-text-1 table-padding">Path</th>
                            <th class="view-text-1 table-padding">Photo</th>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Img_Fish_1</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Img_Fish_1']; ?></td>
                            <td class="view-text-2 table-padding"><img class="admin-fish-pic" src="<?= base_url('assets/Pics/'.$Fish_Data[0]['Img_Fish_1']); ?>" alt="Ikan <?= $Fish_Data[0]['Name_Fish']; ?>"></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Img_Fish_2</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Img_Fish_2']; ?></td>
                            <td class="view-text-2 table-padding"><img class="admin-fish-pic" src="<?= base_url('assets/Pics/'.$Fish_Data[0]['Img_Fish_2']); ?>" alt="Ikan <?= $Fish_Data[0]['Name_Fish']; ?>"></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Img_Fish_3</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Img_Fish_3']; ?></td>
                            <td class="view-text-2 table-padding"><img class="admin-fish-pic" src="<?= base_url('assets/Pics/'.$Fish_Data[0]['Img_Fish_3']); ?>" alt="Ikan <?= $Fish_Data[0]['Name_Fish']; ?>"></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Img_Fish_4</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Img_Fish_4']; ?></td>
                            <td class="view-text-2 table-padding"><img class="admin-fish-pic" src="<?= base_url('assets/Pics/'.$Fish_Data[0]['Img_Fish_4']); ?>" alt="Ikan <?= $Fish_Data[0]['Name_Fish']; ?>"></td>
                        </tr>
                        <tr style="background-color:white">
                            <th class="view-text-1 table-padding">Img_Fish_5</th>
                            <td class="view-text-2 table-padding"><?= $Fish_Data[0]['Img_Fish_5']; ?></td>
                            <td class="view-text-2 table-padding"><img class="admin-fish-pic" src="<?= base_url('assets/Pics/'.$Fish_Data[0]['Img_Fish_5']); ?>" alt="Ikan <?= $Fish_Data[0]['Name_Fish']; ?>"></td>
                        </tr>
                    </table>
                </div>
                <div class="col-2">
                    <div style="margin-bottom:10px">
                        <a href="/admin/fishDetail/edit/<?= $Fish_Data[0]['Id_Fish']; ?>"><button class="view-button-3 view-button-edit">Edit</button></a>
                    </div>
                    <div style="margin-bottom:10px">
                        <a href="/admin/fishDetail/delete/<?= $Fish_Data[0]['Id_Fish']; ?>"><button class="view-button-3 view-button-delete">Delete</button></a>
                    </div>
                    <div style="margin-bottom:10px">
                        <a href="/admin/fish" style="margin-right:10px"><button class="view-button-3">Back to Fish Data</button></a>  
                    </div>
                    <div>
                        <a href="/admin"><button class="view-button-3">Exit to Menu</button></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>