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
            <div class="container" style="margin-top:30px; margin-bottom:30px;">
                <div class="row" style="height:530px">
                    <div class="col-1">
                        <img class="product-img-1" src="<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_1']); ?>" alt="Ikan <?= $fishData[0]['Name_Fish']; ?>" onclick='changeImage("<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_1']); ?>");'>
                        <img class="product-img-1" src="<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_2']); ?>" alt="Ikan <?= $fishData[0]['Name_Fish']; ?>" onclick='changeImage("<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_2']); ?>");'>
                        <img class="product-img-1" src="<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_3']); ?>" alt="Ikan <?= $fishData[0]['Name_Fish']; ?>" onclick='changeImage("<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_3']); ?>");'>
                        <img class="product-img-1" src="<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_4']); ?>" alt="Ikan <?= $fishData[0]['Name_Fish']; ?>"  onclick='changeImage("<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_4']); ?>");'>
                        <img class="product-img-1" src="<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_5']); ?>" alt="Ikan <?= $fishData[0]['Name_Fish']; ?>"  onclick='changeImage("<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_5']); ?>");'>
                    </div>
                    <div class="col-4">
                        <img id="prod-img-large" class="product-img-2" src="<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_1']); ?>" alt="Ikan <?= $fishData[0]['Name_Fish']; ?>" style="margin-left:-15px">
                    </div>
                    <div class="col-4">
                        <h1 class="product-text-1"><?= $fishData[0]['Name_Fish']; ?></h1>
                        <h2 class="product-text-2" style="margin-top:-2px">Rp. <?= $fishData[0]['Price_Fish']; ?>,-</h2>
                        <table style="margin-top:15px">
                            <tr>
                                <td><p class="product-text-3">Class</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $fishData[0]['Class_Fish']; ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Jenis</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $fishData[0]['Type_Fish']; ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Warna</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $fishData[0]['Color_Fish']; ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Region</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $fishData[0]['Region_Fish']; ?></p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Age</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $fishData[0]['Age_Fish']; ?> Month</p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Seller</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: <?= $fishData[0]['Name_Seller']; ?></p></td>
                            </tr>
                        </table>
                        <p class="product-text-3" style="margin-top:10px">Deskripsi :</p>
                        <ul class="product-desc-list">
                            <li style="color:black;"><p class="product-text-3"><?= $fishData[0]['Desc_Fish_1']; ?></li>
                            <li style="color:black;"><p class="product-text-3"><?= $fishData[0]['Desc_Fish_2']; ?></p></li>
                            <li style="color:black;"><p class="product-text-3"><?= $fishData[0]['Desc_Fish_3']; ?></p></li>
                            <li style="color:black;"><p class="product-text-3"><?= $fishData[0]['Desc_Fish_4']; ?></p></li>
                            <li style="color:black;"><p class="product-text-3"><?= $fishData[0]['Desc_Fish_5']; ?></p></li>
                        </ul>
                        <div class="product-star-rate" style="margin-top:30px">
                            <span class="product-text-3" style="vertical-align:middle">Rating</span>
                            <span style="margin-left:180px;">
                            <?php
                                for ($x = 0; $x < 5;$x++){
                                    if($x < $fishData[0]['Rating_Fish']){
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
                    <div class="col-3 text-center">
                        <div class="product-box-main">
                            <span>
                                <?php for($e = 0; $e < 4; $e++){
                                    ?>
                                    <a href="/product/<?= $bestSellerFish[$e]['Id_Fish'] ?>" class="pic-anchor"><img class="product-img-3" src="<?= base_url('assets/Pics/'.$bestSellerFish[$e]['Img_Fish']); ?>" alt="Ikan <?= base_url($bestSellerFish[$e]['Name_Fish']); ?>" style="margin-top:37px"></a>
                                <?php } ?>
                            </span>
                            <p class="product-text-5" style="margin-top:2px">Lihat koleksi lainnya</p>
                            <p class="product-text-4" style="color:red; margin-top:10px">Koleksi Terbatas!</p>
                            <p class="product-text-3" style="margin-top:50px"><?= $fishData[0]['Fish_Views']; ?> orang baru saja melihat koleksi ini</p>
                            <a href="/order/<?= $fishData[0]['Id_Fish'] ?>"><button type="button" class="product-box-2 product-text-6">Beli Sekarang</button></a>
                            <a href="/myOrder/<?= $fishData[0]['Id_Fish'] ?>"><button type="button" class="product-box-3 product-text-6" style="margin-top:10px">Tambahkan ke Keranjang</button></a>   
                            <a href="/wishlist/<?= $fishData[0]['Id_Fish'] ?>"><button type="button" class="product-box-3 product-text-6">Tambahkan ke Wishlist</button></a>
                            <div style="text-align:left; margin-left:10px">
                                <p class="product-text-3" style="text-align:left; margin-top:50px;margin-bottom:20px;font-weight:bold;">Share</p>
                                <img class="product-share-logo" src="<?= base_url('assets/Logo/facebook.png'); ?>" alt="Logo Facebook">
                                <img class="product-share-logo" src="<?= base_url('assets/Logo/twitter.png'); ?>" alt="Logo Twitter">
                                <img class="product-share-logo" src="<?= base_url('assets/Logo/google-plus.png'); ?>" alt="Logo Google+">
                                <img class="product-share-logo" src="<?= base_url('assets/Logo/email.png'); ?>" alt="Logo Email">
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="margin-top:40px; border-color:black">
                <div class="row"  style="margin-top:5px">
                    <h2 class="universal-text-2">Top Search</h2>
                </div>
                <div class="row" style="margin-bottom:40px">
                <?php
                        for ($i = 0; $i < 4; $i++){
                ?>
                <div class="col-3">
                    <a href="/product/<?= $topSearchFish[$i]['Id_Fish'] ?>" class="pic-anchor">
                        <div class="landing-card">
                            <div class="row">
                                <div class="col-4">
                                    <img class="landing-card-img" src="<?= base_url('assets/Pics/'.$topSearchFish[$i]['Img_Fish']); ?>" alt="Ikan <?= base_url($topSearchFish[$i]['Name_Fish']); ?>">
                                </div>
                                <div class="col-8" style="line-height:5px">
                                    <h3 class="landing-text-4"><?= $topSearchFish[$i]['Name_Fish']; ?></h3>
                                    <p class="landing-text-5"><?= $topSearchFish[$i]['Type_Fish']; ?></p>
                                    <p class="landing-text-5"><?= $topSearchFish[$i]['Color_Fish']; ?></p>
                                    <div style="margin-top:-4px;">
                                    <?php
                                        for ($x = 0; $x < 5;$x++){
                                            if($x < $topSearchFish[$i]['Rating_Fish']){
                                                ?>
                                                    <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                                <?php
                                            } else {
                                                ?>
                                                    <i class="material-icons landing-card-star-white" style="font-size:18px">star_rate</i>
                                                <?php
                                        } } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
                </div>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>