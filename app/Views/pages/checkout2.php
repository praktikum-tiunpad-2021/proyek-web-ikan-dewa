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
            .margin-center {
                margin-left:auto;
                margin-right:auto;
            }
        </style>
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row" style="margin-top:30px; margin-bottom:30px">
                    <div class="col checkout-box-1">
                        <h1 class="text-center checkout-text-5" style="">Informasi Pesanan</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table>
                            <tr>
                                <td class="checkout-text-6">Nomor Pesanan</td>
                                <td class="checkout-text-6">: <?= $Data_Transaction['Id_Transaction']; ?></td>
                            </tr>
                            <tr>
                                <td class="checkout-text-6">Total Pembayaran</td>
                                <td class="checkout-text-6">: Rp. <?= $Data_Transaction['Total_Price']; ?></td>
                            </tr>
                            <tr>
                                <td class="checkout-text-6">Opsi Pembayaran</td>
                                <td class="checkout-text-6">: <?= $Data_Transaction['Payment_Type']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row" style="margin-top:30px; margin-bottom:30px">
                    <div class="col">
                        <p class="checkout-box-2">Pesanan akan DIBATALKAN secara otomatis apabila belum melakukan pembayaran setelah 1 x 24 Jam batas pembayaran yang ditentukan, halaman ini akan otomatis hilang ketika anda sudah melakukan pembayaran</p>
                    </div>
                </div>
                <div class="row" style="margin-top:30px; margin-bottom:30px">
                    <div class="col checkout-box-1">
                        <h1 class="text-center checkout-text-5" style="">Pembayaran</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="checkout-text-6">Lakukan pembayaran  sesuai dengan jumlah pembayaran di atas melalui metode pembayaran di bawah ini: </p>
                    </div>
                </div>
                <?php
                    if ($Data_Transaction['Payment_Type'] === 'Virtual Account'){
                        foreach ($PaymentDataVA as $row) :
                        ?>
                            <div class="row justify-content-md-center" style="margin-top:5px;">
                                <div class="col col-lg-2 checkout-box-3">
                                    <p class="checkout-text-7 text-center"><?= $row['Name_Payment']; ?></p>
                                </div>
                                <div class="col col-lg-6 checkout-box-3" style="border-left:5px solid white; border-right:5px solid white;">
                                    <p class="checkout-text-7 text-center"><?= $row['Number_Payment']; ?> a.n. <?= $row['Owner_Payment']; ?></p>
                                </div>
                            </div>
                        <?php
                    endforeach; } 
                ?>
                <?php
                    if ($Data_Transaction['Payment_Type'] === 'Gerai Minimarket'){
                        foreach ($PaymentDataGM as $row) :
                        ?>
                            <div class="row justify-content-md-center" style="margin-top:5px;">
                                <div class="col col-lg-2 checkout-box-3">
                                    <p class="checkout-text-7 text-center"><?= $row['Name_Payment']; ?></p>
                                </div>
                                <div class="col col-lg-6 checkout-box-3" style="border-left:5px solid white; border-right:5px solid white;">
                                    <p class="checkout-text-7 text-center"><?= $row['Number_Payment']; ?> a.n. <?= $row['Owner_Payment']; ?></p>
                                </div>
                            </div>
                        <?php
                    endforeach; } 
                ?>
                <?php
                    if ($Data_Transaction['Payment_Type'] === 'Transfer Bank'){
                        foreach ($PaymentDataTF as $row) :
                        ?>
                            <div class="row justify-content-md-center" style="margin-top:5px;">
                                <div class="col col-lg-2 checkout-box-3">
                                    <p class="checkout-text-7 text-center"><?= $row['Name_Payment']; ?></p>
                                </div>
                                <div class="col col-lg-6 checkout-box-3" style="border-left:5px solid white; border-right:5px solid white;">
                                    <p class="checkout-text-7 text-center"><?= $row['Number_Payment']; ?> a.n. <?= $row['Owner_Payment']; ?></p>
                                </div>
                            </div>
                        <?php
                    endforeach; } 
                ?>
                <div class="row" style="margin-top:60px; margin-bottom:30px">
                    <div class="col checkout-box-1">
                        <h1 class="text-center checkout-text-5" style="">Konfirmasi Pesanan</h1>
                    </div>
                </div>
                <div class="row checkout-card margin-center" style="margin-top:35px; margin-bottom:30px; width:1000px;">
                    <div class="col-2 my-auto">
                        <img class="checkout-img" src="<?= base_url('assets/Pics/'.$Data_Transaction['Img_Fish']); ?>" alt="Ikan <?= base_url($Data_Transaction['Name_Fish']); ?>">
                    </div>
                    <div class="col-5 my-auto">
                        <h3 class="checkout-text-3"><?= $Data_Transaction['Name_Fish']; ?></h3>
                        <table style="width:200px;height:70px; margin-top:5px">
                            <tr>
                                <td class="checkout-text-4">Jenis</td>
                                <td class="checkout-text-4">: <?= $Data_Transaction['Type_Fish']; ?></td>
                            </tr>
                            <tr>
                                <td class="checkout-text-4">Warna</td>
                                <td class="checkout-text-4">: <?= $Data_Transaction['Color_Fish']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-5 my-auto">
                        <p class="checkout-text-4" style="font-size:18px; margin-top:2px; text-align:right">Rp. <?= $Data_Transaction['Total_Price']; ?></p>
                        <p class="checkout-text-4" style="margin-top:30px; text-align:right">Kota Bandung dan sekitarnya 1-2 hari, luar kota Bandung 3-5 hari</p>
                    </div>
                </div>
                <div class="row" style="margin-top:15px; margin-bottom:100px; text-align:center;">
                    <div class="col">
                        <form action="/checkout/update" method="post">
                            <input type="hidden" id="Id_Transaction" name="Id_Transaction" value="<?= $Data_Transaction['Id_Transaction']; ?>">
                            <input type="hidden" id="Status_Transaction" name="Status_Transaction" value="Success">
                            <button id="checkout-input-submit-1" type="submit">Konfirmasi Pesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>