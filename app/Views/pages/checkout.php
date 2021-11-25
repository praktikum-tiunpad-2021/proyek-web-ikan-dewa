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
        <script>
            function kalkulasiHargaFinal(){
                var hTotal = document.getElementById("hargaTotal").innerHTML;
                var hDiskon = document.getElementById("diskon").innerHTML;
                var hFinal = null;

                hFinal = hTotal - hDiskon;

                document.getElementById("hargaFinal").innerHTML = hFinal;

                return false;
            }

            function date_now(){
                var today = new Date();
                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                document.getElementById("dateToday").innerHTML = date;

                return false;
            }
        </script>
    </head>
    <body onload="kalkulasiHargaFinal(); date_now();">
        <main>
            <div class="container">
                <div class="row" style="margin-top:40px">
                    <div class="col text-center">
                        <img class="checkout-logo-1" src="<?php echo base_url('assets/Logo/800ppi/logo1.png'); ?>" alt="logo AM">
                        <span class="checkout-text-1" style="margin-left:10px">AQUA<span style="font-size: 22px;letter-spacing: normal;color:black;"> fish Marketplace</span></span>
                    </div>                
                </div>
                <div class="row justify-content-md-center" style="margin-top:40px;">
                    <form class="form-checkout" action="checkout/save" method="post">
                        <div class="row">
                            <div>
                                <input class="checkout-input-2" id="Id_Fish" name="Id_Fish" type="hidden" value="<?= $fishData[0]['Id_Fish'] ?>">
                            </div>
                            <div>
                                <input class="checkout-input-2" id="Id_Fish" name="Id_Transaction" type="hidden" value="<?= $fishData[0]['Id_Fish'] . $users['id'] ?>">
                            </div>
                            <!-- <div>
                                <input class="checkout-input-2" id="dateToday" name="Date_Transaction" type="date" value="dateToday">
                            </div> -->
                            <div>
                                <input class="checkout-input-2" id="id" name="id" type="hidden" value="<?= $users['id'] ?>">
                            </div>
                            <div class="col-6">
                                <p class="checkout-text-2">Nama Depan</p>
                                <input class="checkout-input-2" id="nama_depan" name="Buyer_First_Name" type="text" required>
                            </div>
                            <div class="col-6">
                                <p class="checkout-text-2">Nama Belakang</p>
                                <input class="checkout-input-2" id="nama_belakang" name="Buyer_Last_Name" type="text" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <!-- <div>
                                <input class="checkout-input-2" id="email" name="email" type="hidden">
                            </div> -->
                            <div class="col-12">
                                <p class="checkout-text-2">No. Telp</p>
                                <input class="checkout-input-1" id="no_telp" name="Buyer_Number" type="number" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Alamat</p>
                                <input class="checkout-input-1" id="alamat" name="Buyer_Address" type="text" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Provinsi</p>
                                <input class="checkout-input-1" id="provinsi" name="Buyer_Province" type="text" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Kota</p>
                                <input class="checkout-input-1" id="kota" name="Buyer_City" type="text" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Kecamatan</p>
                                <input class="checkout-input-1" id="kecamatan" name="Buyer_District" type="text" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Kelurahan</p>
                                <input class="checkout-input-1" id="kelurahan" name="Buyer_Neighborhood" type="text" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Kode Pos</p>
                                <input class="checkout-input-1" id="kode_pos" name="Buyer_Post_Code" type="number" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col">
                                <p class="checkout-text-2">Opsi Pengiriman</p>
                                <select class="checkout-input-1" name="Delivery_Service" id="opsi_pengiriman" required>
                                    <option class="black" value="" disabled selected>Pilih Opsi Pengiriman</option>
                                    <option class="black" value="GoSend">GoSend</option>
                                    <option class="black" value="JNE Express">JNE Express</option>
                                    <option class="black" value="J&T">J&T</option>
                                    <option class="black" value="Pos Indonesia">Pos Indonesia</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px">
                            <div class="col">
                                <p class="checkout-text-2">Opsi Pembayaran</p>
                                <div style="text-align:left;">
                                    <input type="radio" id="VirtualAccount" name="Payment_Type" value="Virtual Account" required>
                                    <label class="checkout-text-2" for="VirtualAccount">Virtual Account (Ovo, Gopay)</label><br>
                                    <input type="radio" id="GeraiMinimarket" name="Payment_Type" value="Gerai Minimarket" required>
                                    <label class="checkout-text-2" for="GeraiMinimarket">Gerai Minimarket</label><br>
                                    <input type="radio" id="TransferBank" name="Payment_Type" value="Transfer Bank" required>
                                    <label class="checkout-text-2" for="TransferBank">Transfer Bank</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px">
                            <!-- <div>
                                <input class="checkout-data-box" id="hargaTotal" style="margin-top:-10px; padding-top:10px" type="hidden" value="20000">
                            </div>    
                            <div>
                                <input class="checkout-data-box" id="diskon" style="margin-top:-10px; padding-top:10px" type="hidden" value="20">
                            </div> -->
                            <div class="col">
                                <p class="checkout-text-2">Total Pembayaran</p>
                                <input class="checkout-data-box" id="hargaFinal" name="Total_Price" style="margin-top:-10px;" value="<?= $fishData[0]['Price_Fish']; ?>">
                            </div>
                            <div>
                                <input class="checkout-data-box" id="status_transaction" name="Status_Transaction" style="margin-top:-10px; padding-top:10px" type="hidden" value="Pending">
                            </div>
                        </div>
                        <div class="row text-center" style="margin-top:15px">
                            <div class="col">
                                <button id="checkout-input-submit-2" type="submit">Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row justify-content-md-center" style="margin-top:15px; margin-bottom:40px;">
                    <div class="row checkout-card" style="margin-top:35px">
                        <div class="col-2 my-auto">
                            <img class="checkout-img" src="<?= base_url('assets/Pics/'.$fishData[0]['Img_Fish']); ?>" alt="Ikan <?= base_url($fishData[0]['Name_Fish']); ?>">
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
                </div>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>