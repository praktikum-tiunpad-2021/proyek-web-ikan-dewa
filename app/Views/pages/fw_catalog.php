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
                <h1 class="universal-text-1" style="margin-top:30px">Freshwater Fish Catalog</h1>
                <div class="row" style="margin-top:10px; margin-bottom:30px">
                    <?php foreach ($fishData as $row) : ?>
                    <div class="col-3">
                        <a href="/product/<?= $row['Id_Fish'] ?>" class="pic-anchor">
                            <img class="catalog-img" src="assets/Pics/<?= $row['Img_Fish']; ?>" alt="Ikan <?= $row['Name_Fish']; ?>">
                            <h2 class="catalog-text-1"><?= $row['Name_Fish']; ?></h2>
                            <p class="catalog-text-2">Rp. <?= $row['Price_Fish']; ?></p>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </body>
    <?= $this->endSection('content'); ?>
</html>