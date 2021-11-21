<!-- 
Nama Website : Aquafish Marketplace
Nama Kelompok : Ikan Dewa
Nama & NPM : 
    1. Affan Rifqy Kurniadi         - 140810200003
    2. Rheza Pandya Andhikaputra    - 140810200023
    3. Andyka Baswara Putra         - 140810200061
Kelas : A
Tugas : Project Website Praktikum Pemrograman Web
-->
<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Aquafish Marketplace</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap-grid.css">
        <style>
            .margin-center {
                margin-left:auto;
                margin-right:auto;
            }
        </style>
    </head>
    <body>
        <main>
            <div class="container">
                <h1 class="universal-text-1" style="margin-top:30px">My Wishlist</h1>
                <?php 
                    foreach ($fishDataWishlist as $row) : 
                ?>
                <a href="/product/<?= $row['Id_Fish'] ?>" style="text-decoration:none;">
                    <div class="row checkout-card margin-center keranjang-box-3" style="margin-top:35px; width:1000px;">
                        <div class="col-2 my-auto">
                            <img class="checkout-img" src="<?= base_url('assets/Pics/'.$row['Img_Fish']); ?>" alt="<?= base_url($row['Alt_Img_Fish']); ?>">
                        </div>
                        <div class="col-5 my-auto">
                            <h3 class="checkout-text-3"><?= $row['Name_Fish']; ?></h3>
                            <table style="width:200px;height:70px; margin-top:5px">
                                <tr>
                                    <td class="checkout-text-4">Jenis</td>
                                    <td class="checkout-text-4">: <?= $row['Type_Fish']; ?></td>
                                </tr>
                                <tr>
                                    <td class="checkout-text-4">Warna</td>
                                    <td class="checkout-text-4">: <?= $row['Color_Fish']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-5 my-auto">
                            <p class="checkout-text-4" style="font-size:18px; margin-top:2px; text-align:right">Rp. <?= $row['Price_Fish']; ?></p>
                            <p class="checkout-text-4" style="margin-top:30px; text-align:right">Kota Bandung dan sekitarnya 1-2 hari, luar kota Bandung 3-5 hari</p>
                        </div>
                    </div>
                </a>
                <div class="row checkout-card margin-center" style="margin-bottom:30px; width:1000px; border-top:0">
                    <div class="col-6 offset-6 text-right">
                        <a href="/order/<?= $row['Id_Fish'] ?>"><button type="button" class="keranjang-box-1 keranjang-text-1">Beli Sekarang</button></a>
                        <a href="/wishlist/delete/<?= $row['Id_Wishlist'] ?>"><button type="button" class="keranjang-box-1 keranjang-text-1">Keluarkan dari Wishlist</button></a>
                    </div>
                </div>
                <?php 
                    endforeach; 
                ?>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>