<?php $page = "Home" ?>
<?php include "functions/head.php" ?>

<body>
    <?php include "functions/navbar.php" ?>
    <?php include "functions/header.php" ?>
    <!-- Slide Text -->
    <div class="cMarquee">
        <marquee class="mt-1 text-white">Lapor Ujian Bentrok UAS PTA 19/20 paling lambat JUMAT, 24 Januari 2020
        </marquee>
    </div>

    <!-- Content -->
    <section class="cContent my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
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
                <div class="col-md-3">
                    <?php include "functions/sidebar.php" ?>
                </div>
            </div>
        </div>
    </section>

    <?php include "functions/footer.php" ?>
    <?php include "functions/script.php" ?>
</body>

</html>