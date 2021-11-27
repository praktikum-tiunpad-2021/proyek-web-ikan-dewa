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
        <h1 class="admin-text-1">Table Fish Detail</h1>
        <table class="" border="2" style="background-color:black; margin-top:30px">
            <thead style="background-color:silver;">
                <tr>
                    <th class="view-text-1 table-padding">Id_Fish</th>
                    <th class="view-text-1 table-padding">Desc_Fish_1</th>
                    <th class="view-text-1 table-padding">Desc_Fish_2</th>
                    <th class="view-text-1 table-padding">Desc_Fish_3</th>
                    <th class="view-text-1 table-padding">Desc_Fish_4</th>
                    <th class="view-text-1 table-padding">Desc_Fish_5</th>
                    <th class="view-text-1 table-padding">Img_Fish_1</th>
                    <th class="view-text-1 table-padding">Img_Fish_2</th>
                    <th class="view-text-1 table-padding">Img_Fish_3</th>
                    <th class="view-text-1 table-padding">Img_Fish_4</th>
                    <th class="view-text-1 table-padding">Img_Fish_5</th>
                    <th class="view-text-1 table-padding" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody style="background-color:white;">
                <?php foreach($Fish_Data as $row) : ?>
                <tr>
                    <td class="view-text-2 table-padding"><?= $row['Id_Fish']; ?></td>
                    <td class="view-text-2 table-padding"><?= $row['Desc_Fish_1']; ?></td>
                    <td class="view-text-2 table-padding"><?= $row['Desc_Fish_2']; ?></td>
                    <td class="view-text-2 table-padding"><?= $row['Desc_Fish_3']; ?></td>
                    <td class="view-text-2 table-padding"><?= $row['Desc_Fish_4']; ?></td>
                    <td class="view-text-2 table-padding"><?= $row['Desc_Fish_5']; ?></td>
                    <td class="view-text-2 table-padding"><?= $row['Img_Fish_1']; ?></td>
                    <td class="view-text-2 table-padding"><?= $row['Img_Fish_2']; ?></td>
                    <td class="view-text-2 table-padding"><?= $row['Img_Fish_3']; ?></td>
                    <td class="view-text-2 table-padding"><?= $row['Img_Fish_4']; ?></td>
                    <td class="view-text-2 table-padding"><?= $row['Img_Fish_5']; ?></td>
                    <td class="view-text-2 table-padding edit-square"><a class="view-button-1" href="/admin/fishDetail/edit/<?= $row['Id_Fish']; ?>">Edit</a></td>
                    <td class="view-text-2 table-padding delete-square"><a class="view-button-1" href="/admin/fishDetail/delete/<?= $row['Id_Fish']; ?>">Delete</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
            <a href="" style="margin-right:10px"><button class="view-button-2">Add New Data (BELOM BISA)</button></a>
            <a href="/admin"><button class="view-button-2">Exit to Menu</button></a>
        </div>
    </body>
</html>