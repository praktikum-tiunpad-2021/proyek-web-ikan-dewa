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

<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $tanggal_lahir = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);


    // menyiapkan query
    $sql = "INSERT INTO users (Email, Password, Name_User, Tanggal_lahir) 
            VALUES (:email, :password, :name, :date)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":email" => $email,
        ":password" => $password,
        ":name" => $name,
        ":date" => $tanggal_lahir
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>
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
    <div class="register-box">
        <div class="container">
            <div class="row">
                <div class="col register-banner">
                    <h1 class="register-text-1">AQUA<span style="font-size: 18px;letter-spacing: normal; font-style:italic">fish</span></h1>
                    <h1 class="register-text-1" style="font-size: 18px;letter-spacing: normal; font-style:italic; margin-top:-10px">Marketplace</h1>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top:15px">
                <form action="<?php echo base_url(' ')?>" method="POST" class="form-register">
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