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
                                <img class="order-img-1" src="<?= base_url('assets/Pics/delivery.png') ?>" alt="delivery">
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
                                <img class="order-img-2" src="<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish_1']); ?>" alt="Ikan <?= base_url($fishData[0]['Name_Fish']); ?>">
                            </div>
                            <div class="col-5 my-auto">
                                <h3 class="order-text-4"><?= $fishData[0]['Name_Fish']; ?></h3>
                                <table style="width:200px;">
                                    <tr>
                                        <td><p class="order-text-5">Class</p></td>
                                        <td><p class="order-text-5">: <?= $fishData[0]['Class_Fish']; ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="order-text-5">Jenis</p></td>
                                        <td><p class="order-text-5">: <?= $fishData[0]['Type_Fish']; ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="order-text-5">Warna</p></td>
                                        <td><p class="order-text-5">: <?= $fishData[0]['Color_Fish']; ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="order-text-5">Region</p></td>
                                        <td><p class="order-text-5">: <?= $fishData[0]['Region_Fish']; ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="order-text-5">Age</p></td>
                                        <td><p class="order-text-5">: <?= $fishData[0]['Age_Fish']; ?></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="order-text-5">Seller</p></td>
                                        <td><p class="order-text-5">: <?= $fishData[0]['Name_Seller']; ?></p></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-5">
                                <p class="order-text-5" style="font-size:18px; margin-top:20px; text-align:right">Rp. <?= $fishData[0]['Price_Fish']; ?></p>
                                <p class="order-text-5" style="margin-top:30px; text-align:right">Kota Bandung dan sekitarnya 1-2 hari, luar<br>kota Bandung 3-5 hari</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="order-card-1" style="padding-top:20px; padding-bottom:15px">
                            <h3 class="order-text-6">Masukkan Kode Voucher</h3>
                            <form style="margin-top:15px">
                                <input type="text" class="order-input" style="margin-left:3px">
                                <input type="submit" id="order-input-submit" value="Cek">
                            </form>
                            <!-- <p class="order-text-5" style="margin-top:8px; margin-left:5px">Voucher berhasil diaplikasikan!</p> -->
                        </div>
                        <div class="order-card-1" style="margin-top:20px">
                            <table style="width:210px;height:110px; margin-left:auto; margin-right:auto">
                                <tr>
                                    <td><p class="order-text-5">Jumlah</p></td>
                                    <td><p id="hargaTotal" class="order-text-5" style="text-align:right"><?= $fishData[0]['Price_Fish']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><p class="order-text-5">Potongan Harga</p></td>
                                    <td><p id="diskon" class="order-text-5" style="text-align:right">0</p></td>
                                </tr>
                                <tr>
                                    <td><p class="order-text-5">Jumlah Total</p></td>
                                    <td><p id="hargaFinal" class="order-text-5" style="text-align:right"></p></td>
                                </tr>
                            </table>
                            <a href="/checkout/<?= $fishData[0]['Id_Fish'] ?>"><button type="button" class="order-box-1 order-text-7" style="margin-top:10px;">CHECKOUT</button></a>
                            <h3 class="order-text-6" style="margin-top:70px; margin-bottom:10px">Metode Pembayaran</h3>
                            <div class="text-center" style="margin-left:10px;">
                                <img class="order-payment-logo" src="<?= base_url('assets/Logo/Gopay.png'); ?>">
                                <img class="order-payment-logo" src="<?= base_url('assets/Logo/OVO.png'); ?>">
                                <img class="order-payment-logo" src="<?= base_url('assets/Logo/Indomaret.png'); ?>">
                                <img class="order-payment-logo" src="<?= base_url('assets/Logo/Alfamart.png'); ?>">
                                <img class="order-payment-logo" src="<?= base_url('assets/Logo/Bca.png'); ?>">
                                <img class="order-payment-logo" src="<?= base_url('assets/Logo/Mandiri.png'); ?>">
                                <img class="order-payment-logo" src="<?= base_url('assets/Logo/Bni.png'); ?>">
                                <img class="order-payment-logo" src="<?= base_url('assets/Logo/Bri.png'); ?>">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    
    <?= $this->endSection('content'); ?>
</html>