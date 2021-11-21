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
                    <h1 class="universal-text-1" style="margin-top:25px">Profile</h1>
                </div>
                <div class="row justify-content-md-center" style="margin-top:15px">
                    <form>
                        <div>
                            <p class="edit-account-text-1">Alamat Email</p>
                            <p class="edit-account-data-box" style="margin-top:-15px"><?= $users['email']; ?></p>
                        </div>
                        <div style="margin-top:-15px">
                            <p class="edit-account-text-1">Nama Lengkap</p>
                            <p class="edit-account-data-box" style="margin-top:-15px"><?= $users['Name_User']; ?></p>
                        </div>
                        <div style="margin-top:-15px">
                            <p class="edit-account-text-1">Tanggal Lahir</p>
                            <p class="edit-account-data-box" style="margin-top:-15px"><?= $users['Born_Date']; ?></p>
                        </div>
                    </form>
                </div>
                <div class="row justify-content-md-center" style="margin-top:15px;">
                    <form class="form-edit-account" action="editAccount/update" method="post">
                        <div style="margin-top:10px">
                            <p class="edit-account-text-1">Kata Sandi*</p>
                            <input class="edit-account-input" id="password" type="password" value="">
                        </div>
                        <div style="margin-top:10px">
                            <p class="edit-account-text-1">Nama Lengkap*</p>
                            <input class="edit-account-input" id="nama-lengkap" type="text" value="">
                        </div>
                        <div style="margin-top:10px">
                            <p class="edit-account-text-1">Tanggal Lahir*</p>
                            <input class="edit-account-input" id="tanggal-lahir" type="date" value="">
                        </div>
                        <!-- <div style="margin-top:10px">
                            <input type="hidden" id="id" value="<?= $users['id']; ?>">
                        </div> -->
                        <div style="margin-top:15px">
                            <input type="submit" id="edit-account-input-submit" value="Edit Data">
                        </div>
                    </form>
                </div>
                <div class="row justify-content-md-center"  style="margin-top:15px; margin-bottom:40px;">
                    <a href="/logout"><button id="edit-account-logout" >Logout</button></a>
                </div>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>