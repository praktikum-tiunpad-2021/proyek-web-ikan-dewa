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
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row">  
                    <div class="landing-banner">
                        <div class="row justify-content-between" style="margin-top:60px">
                            <div class="col-1">
                                <span class="landing-banner-arrow-box align-self-center">
                                    <i class="material-icons landing-banner-arrow-left" style="margin-left:6px">arrow_back_ios</i>
                                </span>
                            </div>
                            <div class="col-1">
                                <span class="landing-banner-arrow-box align-self-center" style="margin-left:27px;">
                                    <i class="material-icons landing-banner-arrow-right" style="margin-left:3px">arrow_forward_ios</i>
                                </span>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <h1 class="universal-text-2">Best Seller</h1>
                </div>
                <div class="row" style="margin-top:-20px">
                <?php
                        for ($i = 0; $i < 4; $i++){
                ?>
                    <div class="col-3">
                        <a href="/product/<?= $bestSellerFish[$i]['Id_Fish'] ?>" class="pic-anchor">
                            <img class="landing-img" src="assets/Pics/<?= $bestSellerFish[$i]['Img_Fish']; ?>" alt="Ikan <?= $bestSellerFish[$i]['Name_Fish']; ?>">
                            <h2 class="landing-text-1"><?= $bestSellerFish[$i]['Name_Fish']; ?></h2>
                        </a>
                    </div>
                <?php } ?>
                </div>
                <div class="row"  style="margin-top:-20px">
                    <h2 class="universal-text-2">Top Search</h2>
                </div>
                <div class="row">
                    <?php
                            for ($i = 0; $i < 4; $i++){
                    ?>
                    <div class="col-3">
                        <a href="/product/<?= $topSearchFish[$i]['Id_Fish'] ?>" class="pic-anchor">
                            <div class="landing-card">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="landing-card-img" src="assets/Pics/<?= $topSearchFish[$i]['Img_Fish']; ?>" alt="Ikan <?= $topSearchFish[$i]['Name_Fish']; ?>">
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
                <div class="row" style="margin-top:30px">
                    <h2 class="landing-text-2">AQUA<span style="font-size: 18px;letter-spacing: normal; font-style:italic; color:black;">fish Marketplace</span></h2>
                </div>
                <div class="row" style="margin-top:10px; margin-bottom:20px; width:101.5%">
                    <p class="landing-text-3">Aquafish Marketplace adalah sebuah pasar online (marketplace) yang bergerak di bidang jual beli ikan hias. Aquafish Marketplace berfungsi sebagai platform serbaguna untuk kegiatan jual beli ikan hias dengan mudah dan simple. Aquafish Marketplace juga berfungsi sebagai media informasi dalam bidang ikan hias. Aquafish Marketplace bertujuan mengakomodir sebuah platform yang mempermudah masyarakat untuk kegiatan jual beli ikan hias dan yang sedang mencari tahu informasi tentang ikan hias. Harapannya, dengan adanya Aquafish Marketplace ini, masyarakat yang berkaitan dapat terbantu dengan adanya website ini dalam kegiatan jual beli ikan hias baik bagi penjual maupun pembeli.</p>
                </div>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>