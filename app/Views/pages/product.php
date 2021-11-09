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
        <script type="text/javascript">
            function changeImage(a) {
                document.getElementById("prod-img-large").src=a;
            }
        </script>
    </head>
    <body>
        <main>
            <div class="container" style="margin-top:30px; margin-bottom:30px;">
                <div class="row">
                    <div class="col-1">
                        <img class="product-img-1" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy" onclick='changeImage("https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg");'>
                        <img class="product-img-1" src="https://asset.kompas.com/crops/ndM9-S72se_BVNExfI_Jex9m9UY=/99x55:1000x656/750x500/data/photo/2020/11/12/5fac84d72fd73.jpg" alt="Ikan Guppy" onclick='changeImage("https://asset.kompas.com/crops/ndM9-S72se_BVNExfI_Jex9m9UY=/99x55:1000x656/750x500/data/photo/2020/11/12/5fac84d72fd73.jpg");'>
                        <img class="product-img-1" src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2021/01/28/2957222270.jpg" alt="Ikan Guppy" onclick='changeImage("https://asset-a.grid.id/crop/0x0:0x0/x/photo/2021/01/28/2957222270.jpg");'>
                        <img class="product-img-1" src="https://gerava.com/wp-content/uploads/2019/07/Ikan-Manfish.jpg" alt="Ikan Guppy"  onclick='changeImage("https://gerava.com/wp-content/uploads/2019/07/Ikan-Manfish.jpg");'>
                    </div>
                    <div class="col-4">
                        <img id="prod-img-large" class="product-img-2" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy" style="margin-left:-15px">
                    </div>
                    <div class="col-4">
                        <h1 class="product-text-1">Lele Empang Cikanpundung</h1>
                        <h2 class="product-text-2" style="margin-top:-2px">Rp. 350.000,-</h2>
                        <table style="margin-top:15px">
                            <tr>
                                <td><p class="product-text-3">Species  </p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: Species</p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Class</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: Class</p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Region</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: Region</p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Age</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: Age</p></td>
                            </tr>
                            <tr>
                                <td><p class="product-text-3">Seller</p></td>
                                <td><p class="product-text-3" style="margin-left:5px">: Seller</p></td>
                            </tr>
                        </table>
                        <p class="product-text-3" style="margin-top:10px">Deskripsi :</p>
                        <ul class="product-desc-list">
                            <li style="color:black;"><p class="product-text-3">a</li>
                            <li style="color:black;"><p class="product-text-3">a</p></li>
                            <li style="color:black;"><p class="product-text-3">a</p></li>
                            <li style="color:black;"><p class="product-text-3">a</p></li>
                            <li style="color:black;"><p class="product-text-3">a</p></li>
                        </ul>
                        <div class="product-star-rate" style="margin-top:30px">
                            <span class="product-text-3" style="vertical-align:middle">Rating</span>
                            <span style="margin-left:180px;">
                                <i class="material-icons landing-card-star-yellow" style="font-size:18px; vertical-align:middle;">star_rate</i>
                                <i class="material-icons landing-card-star-yellow" style="font-size:18px; vertical-align:middle;">star_rate</i>
                                <i class="material-icons landing-card-star-yellow" style="font-size:18px; vertical-align:middle;">star_rate</i>
                                <i class="material-icons landing-card-star-yellow" style="font-size:18px; vertical-align:middle;">star_rate</i>
                                <i class="material-icons landing-card-star-white" style="font-size:18px; vertical-align:middle;">star_rate</i>
                            </span>
                        </div>
                        <p class="product-text-4" style="margin-top:10px">Kupon Diskon</p>
                        <div class="product-ticket" style="margin-top:-10px">
                            <p class="product-text-3">Potongan 50%</p>
                            <p class="product-text-5" style="font-weight:bold;">Kode voucher : brbseptember</p>
                            <span>
                                <span class="product-text-5">Oxygen Packing Free</span>
                                <button type="button" class="product-box-4 product-text-5" style="margin-left:100px; font-weight:bold;">Klaim Voucher</button>
                            </span>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="product-box-main">
                            <span>
                                <img class="product-img-3" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy" style="margin-top:37px">
                                <img class="product-img-3" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy" style="margin-top:37px">
                                <img class="product-img-3" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy" style="margin-top:37px">
                                <img class="product-img-3" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy" style="margin-top:37px">
                            </span>
                            <p class="product-text-5" style="margin-top:2px">Lihat koleksi lainnya</p>
                            <table style="width:100%; margin-top:15px">
                                <tr>
                                    <td class="product-text-4">Jenis</td>
                                    <td class="product-text-4">Warna</td>
                                </tr>
                                <tr>
                                    <td><p class="product-box-1"></p></td>
                                    <td><p class="product-box-1"></p></td>
                                </tr>
                            </table>
                            <p class="product-text-4" style="color:red; margin-top:-10px">Koleksi Terbatas!</p>
                            <p class="product-text-3" style="margin-top:50px">500 orang baru saja melihat koleksi ini</p>
                            <a href="/order"><button type="button" class="product-box-2 product-text-6">Beli Sekarang</button></a>
                            <table>
                                <tr>
                                    <td style="text-align:left"><a href="/myOrder"><button type="button" class="product-box-3 product-text-6" style="margin-top:10px">Tambahkan ke Keranjang</button></a></td>
                                    <td style="text-align:right"><a href="/wishlist"><button type="button" class="product-box-3 product-text-6">Tambahkan ke Wishlist</button></a></td>
                                </tr>
                            </table>
                            
                            
                            <p class="product-text-3" style="text-align:left; margin-top:50px; margin-bottom:38px; font-weight:bold;">Share</p>
                        </div>
                    </div>
                </div>
                <div class="row"  style="margin-top:5px">
                    <h2 class="universal-text-2">Similar Search</h2>
                </div>
                <div class="row" style="margin-bottom:40px">
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <div class="product-card">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="product-card-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                                    </div>
                                    <div class="col-8" style="line-height:5px">
                                        <h3 class="product-text-7">lele</h3>
                                        <p class="product-text-8">lele</p>
                                        <p class="product-text-8">lele</p>
                                        <div>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-white" style="font-size:18px">star_rate</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <div class="product-card">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="product-card-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                                    </div>
                                    <div class="col-8" style="line-height:5px">
                                        <h3 class="product-text-7">lele</h3>
                                        <p class="product-text-8">lele</p>
                                        <p class="product-text-8">lele</p>
                                        <div>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-white" style="font-size:18px">star_rate</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <div class="product-card">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="product-card-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                                    </div>
                                    <div class="col-8" style="line-height:5px">
                                        <h3 class="product-text-7">lele</h3>
                                        <p class="product-text-8">lele</p>
                                        <p class="product-text-8">lele</p>
                                        <div>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-white" style="font-size:18px">star_rate</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/product" class="pic-anchor">
                            <div class="product-card">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="product-card-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                                    </div>
                                    <div class="col-8" style="line-height:5px">
                                        <h3 class="product-text-7">lele</h3>
                                        <p class="product-text-8">lele</p>
                                        <p class="product-text-8">lele</p>
                                        <div>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-yellow" style="font-size:18px">star_rate</i>
                                            <i class="material-icons product-card-star-white" style="font-size:18px">star_rate</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>