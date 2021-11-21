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
        <style>
            .black {
                color:black;
            }
        </style>
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row" style="margin-top:40px">
                    <div class="col text-center">
                        <img class="checkout-logo-1" src="<?php echo base_url('assets/Logo/800ppi/logo1.png'); ?>" alt="logo">
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
                        <div class="row text-center">
                            <div class="col-6 offset-3">
                                <p class="checkout-text-2" style="margin-left:40px">Opsi Pengiriman</p>
                                <select class="checkout-input-1" name="opsi_pengiriman" id="opsi_pengiriman">
                                    <option class="black" value="" disabled selected>Pilih Opsi Pengiriman</option>
                                    <option class="black" value="GoSend">GoSend</option>
                                    <option class="black" value="JNE Express">JNE Express</option>
                                    <option class="black" value="J&T">J&T</option>
                                    <option class="black" value="Pos Indonesia">Pos Indonesia</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-6 offset-3" style="margin-top:15px">
                                <p class="checkout-text-2" style="margin-left:40px">Opsi Pembayaran</p>
                                <div style="text-align:left; margin-left:40px;">
                                    <input type="radio" id="gopay" name="opsi_pembayaran" value="Gopay">
                                    <label class="checkout-text-2" for="gopay">Gopay</label><br>
                                    <input type="radio" id="ovo" name="opsi_pembayaran" value="OVO">
                                    <label class="checkout-text-2" for="ovo">Ovo</label><br>
                                    <input type="radio" id="gerai" name="opsi_pembayaran" value="Gerai Minimarket">
                                    <label class="checkout-text-2" for="gerai">Gerai Minimarket</label><br>
                                    <input type="radio" id="transfer" name="opsi_pembayaran" value="Transfer Bank">
                                    <label class="checkout-text-2" for="transfer">Transfer Bank</label>
                                </div>
                            </div>
                        </div>
                        <div class="row checkout-card" style="margin-top:35px">
                            <div class="col-2 my-auto">
                                <img class="checkout-img" src="<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish']); ?>" alt="<?= base_url($fishData[0]['Alt_Img_Fish']); ?>">
                            </div>
                            <div class="col-5 my-auto">
                                <h3 class="checkout-text-3"><?= $fishData[0]['Name_Fish']; ?></h3>
                                <table style="width:200px;height:70px; margin-top:5px">
                                    <tr>
                                        <td class="checkout-text-4">Jenis</td>
                                        <td class="checkout-text-4">: <?= $fishData[0]['Type_Fish']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="checkout-text-4">Warna</td>
                                        <td class="checkout-text-4">: <?= $fishData[0]['Color_Fish']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-5 my-auto">
                                <p class="checkout-text-4" style="font-size:18px; margin-top:2px; text-align:right">Rp. <?= $fishData[0]['Price_Fish']; ?></p>
                                <p class="checkout-text-4" style="margin-top:30px; text-align:right">Kota Bandung dan sekitarnya 1-2 hari, luar kota Bandung 3-5 hari</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-6 offset-3" style="margin-top:35px">
                                <p class="checkout-text-2" style="margin-left:40px">Total Pembayaran</p>
                                <p class="checkout-data-box" style="margin-top:-10px; margin-left:40px"></p>
                            </div>
                        </div>
                        <div class="row text-center" style="margin-top:15px">
                            <div class="col">
                                <a href="/checkout2/<?= $fishData[0]['Id_Fish'] ?>"><button id="checkout-input-submit-2" type="button">Pesan</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>