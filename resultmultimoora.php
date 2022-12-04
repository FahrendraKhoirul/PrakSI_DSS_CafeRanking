<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fahren</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.html">Fahren<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li class="dropdown"><a href="#"><span>Data List</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="dtalternatif.php">Data Alternatif</a></li>
                <li><a href="dtkriteria.php">Data Kriteria</a></li>
                <li><a href="dtbobot.php">Data Bobot</a></li>
                <li><a href="dtmatrix.php">Data Matrix</a></li>
                <li><a href="dtskala.php">Data Skala</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Insert Data</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="formalternatif.php">Form Data Alternatif</a></li>
                <li><a href="formkriteria.php">Form Data Kriteria</a></li>
                <li><a href="formbobot.php">Form Data Bobot</a></li>
                <li><a href="formmatrix.php">Form Data Matrix</a></li>
                <li><a href="formskala.php">Form Data Skala</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="resultsaw.php">Result SAW</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="resultwp.php">Result WP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="resulttopsis.php">Result TOPSIS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="resultmultimoora.php">Result MULTIMOORA</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <!-- .navbar -->
      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section>
      <div class="container card shadow p-5 mt-5">
        <h1 class="text-center pt-5">Result Metode MULTIMOORA</h1>

        <!-- MultiMoora Normalisasi-->
        <h3 class="text-center pt-5">MultiMoora Pra</h3>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr class="text-center">
                <td>ID Matrix</td>

                <td>Nama Alternatif</td>

                <td>Nama Kriteria</td>
                <td>Tipe</td>

                <td>Value Bobot</td>
                <td>Nilai</td>
                <td>Keterangan</td>
                <td>Pra</td>
              </tr>
            </thead>
            <?php
          include "config.php";
          $a = "SELECT * FROM multimoora_1";
          $b = $conn->query($a);
          while ($c = $b->fetch_array()) {
          ?>
            <tr>
              <td><?php echo $c['id_nilai']; ?></td>

              <td><?php echo $c['nm_alternatif']; ?></td>

              <td><?php echo $c['nm_kriteria']; ?></td>
              <td><?php echo $c['tipe']; ?></td>

              <td><?php echo $c['value']; ?></td>
              <td><?php echo $c['nilai']; ?></td>
              <td><?php echo $c['nama_skala']; ?></td>
              <td><?php echo $c['pra']; ?></td>
            </tr>
            <?php
          }
          ?>
          </table>
        </div>
        <!-- MultiMoora Normalisasi -->

        <!-- MultiMoora Normalisasi-->
        <h3 class="text-center pt-5">MultiMoora Normalisasi</h3>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr class="text-center">
                <td>ID Matrix</td>

                <td>Nama Alternatif</td>

                <td>Nama Kriteria</td>
                <td>Tipe</td>

                <td>Value Bobot</td>
                <td>Nilai</td>
                <td>Keterangan</td>
                <td>Pra</td>
                <td>Normalisasi</td>
              </tr>
            </thead>
            <?php
          include "config.php";
          $a = "SELECT * FROM multimoora_2";
          $b = $conn->query($a);
          while ($c = $b->fetch_array()) {
          ?>
            <tr>
              <td><?php echo $c['id_nilai']; ?></td>

              <td><?php echo $c['nm_alternatif']; ?></td>

              <td><?php echo $c['nm_kriteria']; ?></td>
              <td><?php echo $c['tipe']; ?></td>

              <td><?php echo $c['value']; ?></td>
              <td><?php echo $c['nilai']; ?></td>
              <td><?php echo $c['nama_skala']; ?></td>
              <td><?php echo $c['pra']; ?></td>
              <td><?php echo $c['normalisasi']; ?></td>
            </tr>
            <?php
          }
          ?>
          </table>
        </div>
        <!-- MultiMoora Normalisasi -->

        <!-- MultiMoora Normalisasi-->
        <h3 class="text-center pt-5">MultiMoora Normalisasi Bobot</h3>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr class="text-center">
                <td>ID Matrix</td>

                <td>Nama Alternatif</td>

                <td>Nama Kriteria</td>
                <td>Tipe</td>

                <td>Value Bobot</td>
                <td>Nilai</td>
                <td>Keterangan</td>
                <td>Pra</td>
                <td>Normalisasi</td>
                <td>Normalisasi Bobot</td>
              </tr>
            </thead>
            <?php
          include "config.php";
          $a = "SELECT * FROM multimoora_3";
          $b = $conn->query($a);
          while ($c = $b->fetch_array()) {
          ?>
            <tr>
              <td><?php echo $c['id_nilai']; ?></td>

              <td><?php echo $c['nm_alternatif']; ?></td>

              <td><?php echo $c['nm_kriteria']; ?></td>
              <td><?php echo $c['tipe']; ?></td>

              <td><?php echo $c['value']; ?></td>
              <td><?php echo $c['nilai']; ?></td>
              <td><?php echo $c['nama_skala']; ?></td>
              <td><?php echo $c['pra']; ?></td>
              <td><?php echo $c['normalisasi']; ?></td>
              <td><?php echo $c['normalisasibobot']; ?></td>
            </tr>
            <?php
          }
          ?>
          </table>
        </div>

        <!-- MultiMoora Normalisasi-->
        <h3 class="text-center pt-5">Hasil</h3>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr class="text-center">
                <td>ID Alternatif</td>
                <td>Hasil</td>
              </tr>
            </thead>
            <?php
          include "config.php";
          $a = "SELECT * FROM multimoora_4";
          $b = $conn->query($a);
          while ($c = $b->fetch_array()) {
          ?>
            <tr>
              <td><?php echo $c['id_alternatif']; ?></td>
              <td><?php echo $c['hasil']; ?></td>
            </tr>
            <?php
          }
          ?>
          </table>
        </div>




      </div>
    </section>
    <!-- End Hero -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

</html>
