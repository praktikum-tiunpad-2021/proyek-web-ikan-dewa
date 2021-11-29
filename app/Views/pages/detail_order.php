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
        <link rel="stylesheet" href="<?php echo base_url('style.css'); ?>">
        <link rel="stylesheet" href="bootstrap-grid.css">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <script type="text/javascript">
            function changeImage(a) {
                document.getElementById("prod-img-large").src=a;
            }
        </script>
    </head>
    <body>
        <main>
            <div class="container" style="margin-top:5px; margin-bottom:50px;">
                <div class="row">
                    <h1 class="universal-text-2">Your Order Details</h1>
                </div>
                <div class="row" style="height:530px">
                    <div class="col-1">
                        <img class="product-img-1" src="<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_1']); ?>" alt="Ikan <?= $Data_Transaction['Name_Fish']; ?>" onclick='changeImage("<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_1']); ?>");'>
                        <img class="product-img-1" src="<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_2']); ?>" alt="Ikan <?= $Data_Transaction['Name_Fish']; ?>" onclick='changeImage("<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_2']); ?>");'>
                        <img class="product-img-1" src="<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_3']); ?>" alt="Ikan <?= $Data_Transaction['Name_Fish']; ?>" onclick='changeImage("<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_3']); ?>");'>
                        <img class="product-img-1" src="<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_4']); ?>" alt="Ikan <?= $Data_Transaction['Name_Fish']; ?>"  onclick='changeImage("<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_4']); ?>");'>
                        <img class="product-img-1" src="<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_5']); ?>" alt="Ikan <?= $Data_Transaction['Name_Fish']; ?>"  onclick='changeImage("<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_5']); ?>");'>
                    </div>
                    <div class="col-4">
                        <img id="prod-img-large" class="product-img-2" src="<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish_1']); ?>" alt="Ikan <?= $Data_Transaction['Name_Fish']; ?>" style="margin-left:-15px">
                    </div>
                    <div class="col-4">
                        <h1 class="product-text-1"><?= $Data_Transaction['Name_Fish']; ?></h1>
                        <h2 class="product-text-2" style="margin-top:-2px">Rp. <?= $Data_Transaction['Price_Fish']; ?>,-</h2>
                        <table style="margin-top:15px">
                            <tr>
                                <td><p class="product-text-3">Class</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $Data_Transaction['Class_Fish']; ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Jenis</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $Data_Transaction['Type_Fish']; ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Warna</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $Data_Transaction['Color_Fish']; ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Region</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $Data_Transaction['Region_Fish']; ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Age</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $Data_Transaction['Age_Fish']; ?> Month</p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Seller</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $Data_Transaction['Name_Seller']; ?></p></td>
                            </tr>
                        </table>
                        <p class="product-text-3" style="margin-top:10px">Deskripsi :</p>
                        <ul class="product-desc-list">
                            <li style="color:black;"><p class="product-text-3"><?= $Data_Transaction['Desc_Fish_1']; ?></li>
                            <li style="color:black;"><p class="product-text-3"><?= $Data_Transaction['Desc_Fish_2']; ?></p></li>
                            <li style="color:black;"><p class="product-text-3"><?= $Data_Transaction['Desc_Fish_3']; ?></p></li>
                            <li style="color:black;"><p class="product-text-3"><?= $Data_Transaction['Desc_Fish_4']; ?></p></li>
                            <li style="color:black;"><p class="product-text-3"><?= $Data_Transaction['Desc_Fish_5']; ?></p></li>
                        </ul>
                        <div class="product-star-rate" style="margin-top:30px">
                            <span class="product-text-3" style="vertical-align:middle">Rating</span>
                            <span style="margin-left:180px;">
                            <?php
                                for ($x = 0; $x < 5;$x++){
                                    if($x < $Data_Transaction['Rating_Fish']){
                                        ?>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                        <?php
                                    } else {
                                        ?>
                                            <i class="material-icons landing-card-star-white" style="font-size:18px">star_rate</i>
                                        <?php
                                } } ?>
                            </span>
                        </div>
                        <p class="product-text-3" style="text-align:left; margin-top:30px;font-weight:bold;">Estimasi Pengiriman</p>
                        <p class="product-text-9">Kota Bandung dan sekitarnya 1-2 hari, luar<br>
                        kota Bandung 3-5 hari<br><br>
                        Pengiriman hanya saat hari kerja
                        </p>
                    </div>
                    <div class="col-3">
                        <div class="product-box-main">
                            <p class="product-text-3" style="text-align:center;font-size:18px; margin-top:20px;margin-bottom:30px;font-weight:bold;">Detail Transaction</p>
                            <table style="margin-top:15px; width:220px;">
                                <tr>
                                    <td><p class="product-text-10">Id Transaksi</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction['Id_Transaction']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Nama Depan</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction['Buyer_First_Name']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Nama Belakang</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction['Buyer_Last_Name']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Nomor Telepon</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction['Buyer_Number']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Alamat</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction['Buyer_Address']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Provinsi</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction_Post_Code['Province']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Kota</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction_Post_Code['City']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Kecamatan</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction_Post_Code['District']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Kelurahan</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction_Post_Code['Neighborhood']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Kode Pos</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction['Buyer_Post_Code']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Jenis Pengiriman</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction['Delivery_Service']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Tipe Pembayaran</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction['Payment_Type']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="product-text-10">Status Transaksi</p></td>
                                    <td><p class="product-text-10" style="margin-left:5px">: <?= $Data_Transaction['Status_Transaction']; ?></p></td>
                                </tr>
                            </table>
                            <a href="/product/<?= $Data_Transaction['Id_Fish'] ?>"><button type="button" class="product-box-3 product-text-6" style="margin-top:10px">Kunjungi Halaman Produk</button></a>   
                            <a href="/myOrder"><button type="button" class="product-box-3 product-text-6">Kembali ke Halaman Order</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>