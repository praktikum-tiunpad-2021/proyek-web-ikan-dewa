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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar1">
              <ul>
                <li class="logo">AQUA<span style="font-size: 24px;letter-spacing: normal;">fish</span></li>
                <div class="items">
                  <li><a href="#">Saltwater Fish</a></li>
                  <li><a href="#">Freshwater Fish</a></li>
                </div>
                <li class="search-icon">
                  <input type="search" placeholder="Search">
                </li>
                <div class="account">
                  <li><a href="#"><img src="assets/Pics/keranjang.png" alt="keranjang" style="width: 25px; padding: 15px 3px;"></a></li>
                  <li><a href="#"><img src="assets/Pics/account.png" alt="acc" style="width: 27px; padding: 15px 3px;"></a></li>
                  <li><a href="#"><img src="assets/Pics/wishlist.png" alt="wishlist" style="width: 25px; padding: 15px 3px;"></a></li>
                </div>
              </ul>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <h3 class="edit-account-text-1" style="margin-top:25px">Profile</h3>
                </div>
                <div class="row justify-content-md-center" style="margin-top:15px">
                    
                </div>
                <div class="row justify-content-md-center" style="margin-top:15px; margin-bottom:30px;">
                    <form class="form-edit-account">
                        <div>
                            <p class="edit-account-input-text-2">Alamat Email*</p>
                            <input class="edit-account-input" id="email" type="text">
                        </div>
                        <div style="margin-top:10px">
                            <p class="edit-account-input-text-2">Kata Sandi*</p>
                            <input class="edit-account-input" id="password" type="password">
                        </div>
                        <div style="margin-top:10px">
                            <p class="edit-account-input-text-2">Nama Lengkap*</p>
                            <input class="edit-account-input" id="nama-lengkap" type="text">
                        </div>
                        <div style="margin-top:10px">
                            <p class="edit-account-input-text-2">Tanggal Lahir*</p>
                            <input class="edit-account-input" id="tanggal-lahir" type="date">
                        </div>
                        <div style="margin-top:10px">
                            <input type="submit" id="edit-account-input-submit" value="Edit Data">
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
</html>