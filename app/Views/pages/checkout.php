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
            .center {
                text-align:center;
            }
            .black {
                color:black;
            }
        </style>
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row" style="margin-top:40px">
                    <div class="col center">
                        <img class="checkout-logo" src="assets/Logo/800ppi/logo1.png" alt="logo">
                        <span class="checkout-text-1" style="margin-left:10px">AQUA<span style="font-size: 22px;letter-spacing: normal;color:black;"> fish Marketplace</span></span>
                    </div>                
                </div>
                <div class="row justify-content-md-center" style="margin-top:40px;">
                    <form class="form-checkout">
                        <div class="row">
                            <div class="col-6">
                                <p class="checkout-text-2">Nama Depan</p>
                                <input class="checkout-input-2" id="nama_depan" type="text">
                            </div>
                            <div class="col-6">
                                <p class="checkout-text-2">Nama Belakang</p>
                                <input class="checkout-input-2" id="nama_belakang" type="text">
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col-6">
                                <p class="checkout-text-2">Email</p>
                                <input class="checkout-input-2" id="email" type="text">
                            </div>
                            <div class="col-6">
                                <p class="checkout-text-2">No. Telp</p>
                                <input class="checkout-input-2" id="no_telp" type="number">
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Alamat</p>
                                <input class="checkout-input-1" id="alamat" type="text">
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Provinsi</p>
                                <input class="checkout-input-1" id="provinsi" type="text">
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Kota</p>
                                <input class="checkout-input-1" id="kota" type="text">
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Kecamatan</p>
                                <input class="checkout-input-1" id="kecamatan" type="text">
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Kelurahan</p>
                                <input class="checkout-input-1" id="kelurahan" type="text">
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Kode Pos</p>
                                <input class="checkout-input-1" id="kode_pos" type="text">
                            </div>
                        </div>
                        <div class="row" style="margin-top:15px">
                            <div class="col">
                                <button id="checkout-input-submit-1" type="submit">Simpan & Lanjutkan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row justify-content-md-center" style="margin-top:15px; margin-bottom:40px;">
                    <form class="form-checkout">
                        <div class="row center">
                            <div class="col-6 offset-3">
                                <p class="checkout-text-2" style="margin-left:40px">Opsi Pengiriman</p>
                                <select class="checkout-input-1" name="opsi_pengiriman" id="opsi_pengiriman">
                                    <option class="black" value="" disabled selected>Pilih Opsi Pengiriman</option>
                                    <option class="black" value="gosend">GoSend</option>
                                    <option class="black" value="jne">JNE Express</option>
                                    <option class="black" value="jnt">J&T</option>
                                    <option class="black" value="pos_indo">Pos Indonesia</option>
                                </select>
                            </div>
                        </div>
                        <div class="row center">
                            <div class="col-6 offset-3" style="margin-top:15px">
                                <p class="checkout-text-2" style="margin-left:40px">Opsi Pembayaran</p>
                                <div style="text-align:left; margin-left:40px;">
                                    <input type="radio" id="gopay" name="opsi_pembayaran" value="Gopay">
                                    <label class="checkout-text-2" for="gopay">Gopay</label><br>
                                    <input type="radio" id="ovo" name="opsi_pembayaran" value="ovo">
                                    <label class="checkout-text-2" for="ovo">Ovo</label><br>
                                    <input type="radio" id="gerai" name="opsi_pembayaran" value="gerai">
                                    <label class="checkout-text-2" for="gerai">Gerai Minimarket</label><br>
                                    <input type="radio" id="cod" name="opsi_pembayaran" value="cod">
                                    <label class="checkout-text-2" for="cod">Bayar di Tempat (COD)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row checkout-card" style="margin-top:35px">
                            <div class="col-2 my-auto">
                                <img class="checkout-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg" alt="Ikan Guppy">
                            </div>
                            <div class="col-5 my-auto">
                                <h3 class="checkout-text-3">Lele Empang Cikanpundung</h3>
                                <table style="width:200px;height:70px; margin-top:5px">
                                    <tr>
                                        <td class="checkout-text-4">Jumlah</td>
                                        <td class="checkout-text-4">: 1</td>
                                    </tr>
                                    <tr>
                                        <td class="checkout-text-4">Jenis</td>
                                        <td class="checkout-text-4">: Lorem Ipsum</td>
                                    </tr>
                                    <tr>
                                        <td class="checkout-text-4">Warna</td>
                                        <td class="checkout-text-4">: Lorem Ipsum</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-5 my-auto">
                                <p class="checkout-text-4" style="font-size:18px; margin-top:2px; text-align:right">Rp. 50000</p>
                                <p class="checkout-text-4" style="margin-top:30px; text-align:right">Kota Bandung dan sekitarnya 1-2 hari, luar kota Bandung 3-5 hari</p>
                            </div>
                        </div>
                        <div class="row center">
                            <div class="col-6 offset-3" style="margin-top:35px">
                                <p class="checkout-text-2" style="margin-left:40px">Total Pembayaran</p>
                                <p class="checkout-data-box" style="margin-top:-10px; margin-left:40px"></p>
                            </div>
                        </div>
                        <div class="row center" style="margin-top:15px">
                            <div class="col">
                                <button id="checkout-input-submit-2" type="submit">Pesan</button>
                            </div>
                        </div>
                    </form>
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