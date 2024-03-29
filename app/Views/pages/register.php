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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-grid.css">
        <style>
            body {
                background-image: url("assets/Pics/great-blue-hole.jpg");
                background-position: 50% 10%;
                background-size: cover;
            }
    </style>
</head>
<body>
    <div class="login-register-box">
        <div class="container">
            <div class="row">
                <div class="col register-banner">
                    <h1 class="login-register-text-1">AQUA<span style="font-size: 18px;letter-spacing: normal; font-style:italic">fish</span></h1>
                    <h1 class="login-register-text-1" style="font-size: 18px;letter-spacing: normal; font-style:italic; margin-top:-3px">Marketplace</h1>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top:15px">
                <form action="/register" method="post" class="form-login-register">
                    <div>
                        <p class="login-register-input-text-1" style="padding-bottom:13px">Alamat Email</p>
                        <input class="login-register-input" id="email" type="text" name="email" value="<?= set_value('email') ?>" placeholder=" example@gmail.com">
                    </div>
                    <div style="margin-top:20px">
                        <p class="login-register-input-text-1" style="padding-bottom:13px">Kata Sandi</p>
                        <input class="login-register-input" id="password" type="password" name="password" values="" placeholder=" your password">
                    </div>
                    <div style="margin-top:20px">
                        <p class="login-register-input-text-1" style="padding-bottom:13px">Nama Lengkap</p>
                        <input class="login-register-input" id="Name_User" type="text" name="Name_User" values="" placeholder=" John Doe">
                    </div>
                    <div style="margin-top:20px">
                        <p class="login-register-input-text-1" style="padding-bottom:13px">Tanggal Lahir</p>
                        <input class="login-register-input" id="Born_Date" type="date" name="Born_Date" values="">
                    </div>
                    <?php if(isset($validation)) : ?>
                        <div class="row" style="margin-left:15px">  
                            <div class="login-register-alert" role="alert">
                            <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div style="text-align:center">
                        <p class="login-register-input-text-1" style="margin-top:15px">Atau daftar lewat</p>
                        <img class="login-register-input-logo" src="assets/Pics/google.png" style="margin-top: 10px">
                    </div>
                    <div style="margin-top:20px">
                        <button class="login-register-input-submit" type="submit">Register</button>
                    </div>
                    <div>
                        <p class="login-register-input-text-2" style="text-align:center; margin-top:5px"><a class="login-register-bottom-text" href="/login">Sudah Punya Akun? Login Disini</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>