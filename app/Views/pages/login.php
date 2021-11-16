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
<html>
    <head>
        <title>Aquafish Marketplace</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <div class="col login-banner">
                        <h1 class="login-register-text-1" style="margin-top:-5px">AQUA<span style="font-size: 18px;letter-spacing: normal;">fish</span></h1>
                        <h1 class="login-register-text-1" style="font-size: 18px;letter-spacing: normal; margin-top:-3px">Marketplace</h1>
                    </div>
                </div>
                <div class="row justify-content-md-center" style="margin-top:15px">
                    <form class="form-login-register" action="/login" method="post">
                        <?php if (session()->get('success')) : ?>
                            <div class="login-register-alert" role="alert">
                                <?= session()->get('success') ?>
                            </div>
                        <?php endif; ?>
                        <div>
                            <p class="login-register-input-text-1" style="padding-bottom:13px">Alamat Email*</p>
                            <input class="login-register-input" id="email" type="text" name="email" value="<?= @get_cookie('login_email') ?>" placeholder=" example@gmail.com">
                        </div>
                        <div style="margin-top:20px">
                            <p class="login-register-input-text-1" style="padding-bottom:13px">Kata Sandi*</p>
                            <input class="login-register-input" id="password" type="password" name="password" value="<?= @get_cookie('login_password') ?>" placeholder=" your password">
                            <p class="login-register-input-text-2" style="margin-top:3px">Lupa kata sandi?</p>
                        </div>
                        <?php if (isset($validation)) : ?>
                            <div class="col">
                                <div class="login-register-alert" role="alert">
                                <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-12 text-right">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="remember"<?= get_cookie('login_email') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="flexCheckDefault">
                                Remember Me
                                </label>
                            </div>
                        <div style="text-align:center">
                            <p class="login-register-input-text-1" style="margin-top:15px">Atau masuk lewat</p>
                            <img class="login-register-input-logo" src="assets/Pics/google.png" style="margin-top:10px">
                        </div>
                        <div style="margin-top:20px">
                            <button class="login-register-input-submit" type="submit" onclick="output()">Masuk</button>
                        </div>
                        <div>
                            <p class="login-register-input-text-2" style="text-align:center; margin-top:5px"><a class="login-register-bottom-text" href="/register">Belum Punya Akun? Daftar Disini</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>