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
        <div class="login-box">
            <div class="container">
                <div class="row">
                    <div class="col login-banner">
                        <h1 class="login-text-1" style="margin-top:-5px">AQUA<span style="font-size: 18px;letter-spacing: normal;">fish</span></h1>
                        <h1 class="login-text-1" style="font-size: 18px;letter-spacing: normal; margin-top:-3px">Marketplace</h1>
                    </div>
                </div>
                <div class="row justify-content-md-center" style="margin-top:15px">
                    <form class="form-login">
                        <div>
                            <p class="login-input-text-1" style="padding-bottom:13px">Alamat Email*</p>
                            <input class="login-input" id="email" type="text">
                        </div>
                        <div style="margin-top:20px">
                            <p class="login-input-text-1" style="padding-bottom:13px">Kata Sandi*</p>
                            <input class="login-input" id="password" type="password">
                            <p class="login-input-text-2">Lupa kata sandi?</p>
                        </div>
                        <div style="text-align:center">
                            <p class="login-input-text-1" style="margin-top:15px">Atau masuk lewat</p>
                            <img class="login-input-logo" src="assets/Pics/google.png" style="margin-top:10px">
                        </div>
                        <div style="margin-top:20px">
                            <input type="submit" id="login-input-submit" value="Login">
                        </div>
                        <div>
                            <p class="login-input-text-2" style="text-align:center; margin-top:1px">Belum Punya Akun? Daftar Disini</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>