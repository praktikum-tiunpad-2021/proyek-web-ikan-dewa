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
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row">
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
                            <p class="order-text-3">Dapatkan diskon untuk setiap penukaran voucher!</p>
                        </div>
                        <div class="row order-card-2" style="margin-top:20px">
                            <div class="col-2 my-auto">
                                <img class="order-img-2" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                            </div>
                            <div class="col-5 my-auto">
                                <h3 class="order-text-4">Lele Empang Cikanpundung</h3>
                                <table>
                                    <tr>
                                        <td><p class="order-text-5">Jumlah</p></td>
                                        <td><p class="order-text-5">1</p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="order-text-5">Jenis</p></td>
                                        <td><p class="order-text-5">Lorem Ipsum</p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="order-text-5">Warna</p></td>
                                        <td><p class="order-text-5">Lorem Ipsum</p></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-5 my-auto">
                                <p class="order-text-5" style="font-size:18px">Rp. 50000</p>
                                <p class="order-text-5">Kota Bandung dan sekitarnya 1-2 hari, luar<br>kota Bandung 3-5 hari</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="order-card-1">
                            <h3 class="order-text-6">Masukkan Kode Voucher</h3>
                            <form>
                                <input type="text" class="order-input">
                                <input type="submit" id="order-input-submit" value="Cek">
                            </form>
                        </div>
                        <div class="order-card-1" style="margin-top:20px">
                            <table>
                                <tr>
                                    <td><p class="order-text-5">Jumlah</p></td>
                                    <td><p class="order-text-5">Rp. 100000</p></td>
                                </tr>
                                <tr>
                                    <td><p class="order-text-5">Potongan Harga</p></td>
                                    <td><p class="order-text-5">Rp. 20000</p></td>
                                </tr>
                                <tr>
                                    <td><p class="order-text-5">Jumlah Total</p></td>
                                    <td><p class="order-text-5">Rp. 80000</p></td>
                                </tr>
                            </table>
                            <button type="button" class="order-box-1 order-text-7">CHECKOUT</button>
                            <h3 class="order-text-8" style="margin-top:100px">Metode Pembayaran</h3>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer1">
            <p class="logo">AQUA<span style="font-size: 20px;letter-spacing: normal;">fish</span></p>
            <p class="logo" style="font-size: 20px;letter-spacing: normal; margin-top:-25px">Marketplace</p>
        </footer>
    </body>
    <?= $this->endSection('content'); ?>
</html>