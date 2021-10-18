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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body {
                background-image: url("assets/Pics/great-blue-hole.jpg");
                background-position: 50% 10%;
                background-size: cover;
            }
    </style>
</head>
<body>
    <div class="register-box">
        <div class="container">
            <div class="row">
                <div class="col register-banner">
                    <h4 class="register-text-1">AQUA<span style="font-size: 18px;letter-spacing: normal; font-style:italic">fish</span></h4>
                    <h4 class="register-text-1" style="font-size: 18px;letter-spacing: normal; font-style:italic; margin-top:-10px">Marketplace</h4>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top:15px">
                <form class="form-register">
                    <div>
                        <p class="register-input-text-1">Alamat Email*</p>
                        <input class="register-input" id="email" type="text">
                    </div>
                    <div style="margin-top:20px">
                        <p class="register-input-text-1">Kata Sandi*</p>
                        <input class="register-input" id="password" type="password">
                    </div>
                    <div style="margin-top:20px">
                        <p class="register-input-text-1">Nama Lengkap</p>
                        <input class="register-input" id="nama" type="text">
                    </div>
                    <div style="margin-top:20px">
                        <p class="register-input-text-1">Tanggal Lahir (YYYY-MM-DD)</p>
                        <input class="register-input" id="date" type="text">
                    </div>
                    <div style="text-align:center">
                        <div style="margin-top:20px">
                        <p class="register-input-text-1">Atau daftar lewat</p>
                        <img class="register-input-logo" src="assets/Pics/google.png" style="margin-top:-15px">
                    </div>
                    <div style="margin-top:10px">
                        <input type="submit" id="register-input-submit" value="Register">
                    </div>
                    <div>
                        <p class="register-input-text-2" style="text-align:center; margin-top:1px">Sudah Punya Akun? Login Disini</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>