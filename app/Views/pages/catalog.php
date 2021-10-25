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
                <div class="row" style="margin-top:30px">
                    <div class="col-3">
                        <img class="catalog-img" src="https://asset.kompas.com/crops/MrIH0upKVV6eAB7Ce8CCVDr76Qs=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a168c96d61.jpg">
                        <h6 class="catalog-text-1">Guppy</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 6.000</p>
                    </div>
                    <div class="col-3">
                        <img class="catalog-img" src="https://asset.kompas.com/crops/ndM9-S72se_BVNExfI_Jex9m9UY=/99x55:1000x656/750x500/data/photo/2020/11/12/5fac84d72fd73.jpg">
                        <h6 class="catalog-text-1">Molly</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 3.000</p>
                    </div>
                    <div class="col-3">
                        <img class="catalog-img" src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2021/01/28/2957222270.jpg">
                        <h6 class="catalog-text-1">Cupang</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 2.000</p>
                    </div>
                    <div class="col-3">
                        <img class="catalog-img" src="https://gerava.com/wp-content/uploads/2019/07/Ikan-Manfish.jpg">
                        <h6 class="catalog-text-1">Manfish</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 2.500</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img class="catalog-img" src="https://1.bp.blogspot.com/-8MxiRyds7do/XnHjRdEVLII/AAAAAAAAA6A/APPVW8Oer2UyHPmCAUI14R1iKeoEd9XMQCNcBGAsYHQ/s1600/Lemon-Cichlid-Si-Ikan-Kuning-Berkilau-yang-Suka-Jahil-1.png">
                        <h6 class="catalog-text-1">Lemon</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 2.000</p>
                    </div>
                    <div class="col-3">
                        <img class="catalog-img" src="https://cdn.idntimes.com/content-images/community/2020/02/lg-38626-black-ghost-knife-fish-new-1-7x7-b2a13902ed03084497712ac283fd6b83.jpg">
                        <h6 class="catalog-text-1">Black Ghost</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 5.000</p>
                    </div>
                    <div class="col-3">
                        <img class="catalog-img" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/11/12/3942552277.jpg">
                        <h6 class="catalog-text-1">Discus</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 5.000</p>
                    </div>
                    <div class="col-3">
                        <img class="catalog-img" src="https://1.bp.blogspot.com/-VqxmWOdy4q0/Xy7AW35u_1I/AAAAAAAALE4/GPPmf6qvzJw6KcoWx81K6SYqfVXjEtE4wCLcBGAsYHQ/s1600/ikan-platy-simpson.jpg">
                        <h6 class="catalog-text-1">Platy</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 2.000</p>
                    </div>
                </div>
                <div class="row"  style="margin-bottom:30px">
                    <div class="col-3">
                        <img class="catalog-img" src="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2019/11/Blog_Jenis-Ikan-Mas-Koki-Lucu-Cantik-Paling-Populer-768x397.jpg">
                        <h6 class="catalog-text-1">Mas Koki</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 30.000</p>
                    </div>
                    <div class="col-3">
                        <img class="catalog-img" src="https://www.ruparupa.com/blog/wp-content/uploads/2021/04/Screen-Shot-2021-04-01-at-23.23.32.png">
                        <h6 class="catalog-text-1">Arwana</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 30.000</p>
                    </div>
                    <div class="col-3">
                        <img class="catalog-img" src="https://d1bpj0tv6vfxyp.cloudfront.net/articles/181803_1-6-2021_0-13-51.jpeg">
                        <h6 class="catalog-text-1">Koi</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 40.000</p>
                    </div>
                    <div class="col-3">
                        <img class="catalog-img" src="https://assets.petpintar.com/cache/760/450/article/127/1609311268-jenis-ikan-louhan-banner.jpg">
                        <h6 class="catalog-text-1">Louhan</h6>
                        <p class="catalog-text-2">Mulai dari Rp. 200.000</p>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer1">
            <p class="logo">AQUA<span style="font-size: 20px;letter-spacing: normal;">fish</span></p>
            <p class="logo" style="font-size: 20px;letter-spacing: normal; margin-top:-25px">Marketplace</p>
        </footer>
    </body>
    <?= $this->endSection('content'); ?>
</html>