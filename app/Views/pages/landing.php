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
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <img class="landing-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                            <h2 class="landing-text-1">Guppy</h2>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <img class="landing-img" src="https://asset.kompas.com/crops/ndM9-S72se_BVNExfI_Jex9m9UY=/99x55:1000x656/750x500/data/photo/2020/11/12/5fac84d72fd73.jpg" alt="Ikan Molly">
                            <h2 class="landing-text-1">Molly</h2>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <img class="landing-img" src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2021/01/28/2957222270.jpg" alt="Ikan Cupang">
                            <h2 class="landing-text-1">Cupang</h2>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <img class="landing-img" src="https://gerava.com/wp-content/uploads/2019/07/Ikan-Manfish.jpg" alt="Ikan Manfish">
                            <h2 class="landing-text-1">Manfish</h2>
                        </a>
                    </div>
                </div>
                <div class="row"  style="margin-top:-20px">
                    <h2 class="universal-text-2">Top Search</h2>
                </div>
                <div class="row">
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <div class="landing-card">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="landing-card-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                                    </div>
                                    <div class="col-8" style="line-height:5px">
                                        <h3 class="landing-text-4">lele</h3>
                                        <p class="landing-text-5">lele</p>
                                        <p class="landing-text-5">lele</p>
                                        <div style="margin-top:-4px;">
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-white" style="font-size:18px">star_rate</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <div class="landing-card">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="landing-card-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                                    </div>
                                    <div class="col-8" style="line-height:5px">
                                        <h3 class="landing-text-4">lele</h3>
                                        <p  class="landing-text-5">lele</p>
                                        <p  class="landing-text-5">lele</p>
                                        <div>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-white" style="font-size:18px">star_rate</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <div class="landing-card">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="landing-card-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                                    </div>
                                    <div class="col-8" style="line-height:5px">
                                        <h3 class="landing-text-4">lele</h3>
                                        <p  class="landing-text-5">lele</p>
                                        <p  class="landing-text-5">lele</p>
                                        <div>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-white" style="font-size:18px">star_rate</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <div class="landing-card">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="landing-card-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                                    </div>
                                    <div class="col-8" style="line-height:5px">
                                        <h3 class="landing-text-4">lele</h3>
                                        <p  class="landing-text-5">lele</p>
                                        <p  class="landing-text-5">lele</p>
                                        <div>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons landing-card-star-white" style="font-size:18px">star_rate</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row" style="margin-top:30px">
                    <h2 class="landing-text-2">AQUA<span style="font-size: 18px;letter-spacing: normal; font-style:italic; color:black;">fish Marketplace</span></h2>
                </div>
                <div class="row" style="margin-top:10px; margin-bottom:20px; width:101.5%">
                    <p class="landing-text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales felis volutpat lectus tempor, eu auctor augue pharetra. Nullam at suscipit nisi. Sed scelerisque, orci at facilisis sollicitudin, velit urna feugiat arcu, non molestie lorem velit faucibus tellus. Sed sit amet varius nulla, a ornare velit. Phasellus varius leo vitae nulla fermentum iaculis. Nunc scelerisque vulputate libero eget aliquam. Nunc vel odio a est dignissim condimentum sed vel leo. In ut facilisis orci. Aenean nibh orci, hendrerit non fringilla a, mattis at nulla. Morbi nisl erat, fermentum dapibus rutrum vitae, volutpat vitae orci. Suspendisse potenti. Aliquam eget ipsum in augue eleifend venenatis. Quisque lectus lacus, mattis sed pellentesque et, tincidunt eget augue. Mauris ac urna at quam egestas pulvinar sit amet et risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut ut ipsum non metus pellentesque molestie. Vivamus libero ex, elementum nec blandit et, suscipit eget eros. Fusce eu metus diam. Vivamus pellentesque pharetra tempus. Quisque sit amet tincidunt lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam auctor fermentum ante, quis volutpat lectus mollis vel. Vestibulum mollis nisl vitae dui efficitur, vitae ullamcorper magna porttitor.</p>
                </div>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>