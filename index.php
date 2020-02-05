<?php $page = "Home" ?>
<?php include "functions/head.php" ?>

<body>
    <!-- Background UNW -->
    <?php include "functions/navbar.php" ?>
    <!-- Header -->
    <header class="cHeader">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6 text-white">
                    <h1>BAAK</h1>
                    <p><b>Biro yang menangani sesuatu yang berkaitan dengan administrasi akademik dan kemahasiswaan yang ada di Universitas Ngudi Waluyo.</b></p>
                </div>
                <div class="col-md-4 offset-md-2 m-auto">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search here ...." <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    </div>

    <!-- Slide Text -->
    <div class="cMarquee">
        <marquee class="mt-1 text-white">Lapor Ujian Bentrok UAS PTA 19/20 paling lambat JUMAT, 24 Januari 2020
        </marquee>
    </div>

    <!-- Content -->
    <section class="cContent my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <h6>Jadwal Akademik TA 2020</h6>
                        <hr>
                        <ul>
                            <?php for ($j = 0; $j < 5; $j++) : ?>
                                <li>
                                    <a href="#">Jadwal Ujian Utama</a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    <?php endfor; ?>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-center">Kalender Akademik TA 2020</h4>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < 10; $i++) : ?>
                                <tr>
                                    <td>Pengenalan program studi</td>
                                    <td>17 Agustus 2020</td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <h6>Kalender Akademik TA 2020</h6>
                        <hr>
                        <ul>
                            <?php for ($j = 0; $j < 5; $j++) : ?>
                                <li>
                                    <a href="#">Kalender akademik</a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <?php include "functions/footer.php" ?>
    <?php include "functions/script.php" ?>
</body>

</html>