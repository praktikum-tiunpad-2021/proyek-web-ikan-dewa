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
        <script>
            function kalkulasiHargaFinal(){
                var hTotal = document.getElementById("hargaTotal").innerHTML;
                var hDiskon = document.getElementById("diskon").innerHTML;
                var hFinal = null;

                hFinal = hTotal - hDiskon;

                document.getElementById("hargaFinal").innerHTML = hFinal;

                return false;
            }
        </script>
    </head>
    <body onload="kalkulasiHargaFinal();">
        <main>
            <div class="container" style="margin-top:30px; margin-bottom:60px">
                <h1 class="universal-text-1">Your Order</h1>
                <div class="row" style="margin-top:20px">
                    <div class="col-9">
                        <div class="row order-card-2">
                            <div class="col-2 my-auto">
                                <img class="order-img-1" src="assets/Pics/delivery.png" alt="delivery">
                            </div>
                            <div class="col-8 my-auto">
                                <h2 class="order-text-1">Nikmati pengiriman secara ekslusif untuk ikan hias anda</h2>
                            </div>
                            <div class="col-2 my-auto">
                                <p class="order-text-2">Selengkapnya</p>
                            </div>
                        </div>
                        <div class="row order-card-3">
                            <div class="col-12">
                                <p class="order-text-3">Dapatkan diskon untuk setiap penukaran voucher!</p>
                            </div>
                        </div>
                        <div class="row order-card-2" style="margin-top:20px">
                            <div class="col-2 my-auto">
                                <img class="order-img-2" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                            </div>
                            <div class="col-5 my-auto">
                                <h3 class="order-text-4">Lele Empang Cikanpundung</h3>
                                <table style="width:200px; height:70px">
                                    <tr>
                                        <td><p class="order-text-5">Jumlah</p></td>
                                        <td><p class="order-text-5">: 1</p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="order-text-5">Jenis</p></td>
                                        <td><p class="order-text-5">: Lorem Ipsum</p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="order-text-5">Warna</p></td>
                                        <td><p class="order-text-5">: Lorem Ipsum</p></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-5 my-auto">
                                <p class="order-text-5" style="font-size:18px; margin-top:2px; text-align:right">Rp. 50000</p>
                                <p class="order-text-5" style="margin-top:30px; text-align:right">Kota Bandung dan sekitarnya 1-2 hari, luar<br>kota Bandung 3-5 hari</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="order-card-1" style="padding-top:20px; padding-bottom:20px">
                            <h3 class="order-text-6">Masukkan Kode Voucher</h3>
                            <form style="margin-top:15px">
                                <input type="text" class="order-input" style="margin-left:3px">
                                <input type="submit" id="order-input-submit" value="Cek">
                            </form>
                        </div>
                        <div class="order-card-1" style="margin-top:20px">
                            <table style="width:210px;height:110px; margin-left:auto; margin-right:auto">
                                <tr>
                                    <td><p class="order-text-5">Jumlah</p></td>
                                    <td><p id="hargaTotal" class="order-text-5" style="text-align:right" value="100000">100000</p></td>
                                </tr>
                                <tr>
                                    <td><p class="order-text-5">Potongan Harga</p></td>
                                    <td><p id="diskon" class="order-text-5" style="text-align:right" value="20000">20000</p></td>
                                </tr>
                                <tr>
                                    <td><p class="order-text-5">Jumlah Total</p></td>
                                    <td><p id="hargaFinal" class="order-text-5" style="text-align:right"></p></td>
                                </tr>
                            </table>
                            <a href="/checkout"><button type="button" class="order-box-1 order-text-7" style="margin-top:10px;">CHECKOUT</button></a>
                            <h3 class="order-text-8" style="margin-top:100px; margin-bottom:60px">Metode Pembayaran</h3>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    
    <?= $this->endSection('content'); ?>
</html>