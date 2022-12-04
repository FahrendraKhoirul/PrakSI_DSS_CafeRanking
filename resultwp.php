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
    <header id="header" class="fixed-top ">
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
              <a class="nav-link js-scroll-trigger" href="result.php">Result SAW</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="resultwp.php">Result WP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="resulttopsis.php">Result Topsis</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <!-- .navbar -->
      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section>
      <!-- WP Jumlah Bobot-->
      <div class="container mt-5">
        <div class="card mt-3">
          <h1 class="text-center pt-5">Jumlah WP</h1>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr class=" text-center">
                  <td>Jumlah</td>
                </tr>
              </thead>
              <?php
            include "config.php";
            $a = "SELECT * FROM wp_jumbobot";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <tr class="text-center">
                <td><?php echo $c['jumlah']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- WP Jumlah Bobot -->

      <!-- WP Nilai S -->
      <div class="container mt-5">
        <div class="card mt-3">
          <h1 class="text-center pt-5">WP Nilai S</h1>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr class=" text-center">
                  <td>Id Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>Nilai S</td>

                </tr>
              </thead>
              <?php
            include "config.php";
            // $idkrit = 1;
            $a = "SELECT * FROM wp_nilais";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <tr>
                <td><?php echo $c['id_alternatif']; ?></td>
                <td><?php echo $c['nm_alternatif']; ?></td>
                <td><?php echo $c['nilaiS']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- WP Nilai S -->

      <!-- WP Nilai V -->
      <div class="container mt-5">
        <div class="card mt-3">
          <h1 class="text-center pt-5">WP Nilai V</h1>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <td>Id Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>Nilai V</td>
                </tr>
              </thead>
              <?php
            include "config.php";
            // $idkrit = 1;
            $a = "SELECT * FROM wp_nilaiv";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <tr>

                <td><?php echo $c['id_alternatif']; ?></td>
                <td><?php echo $c['nm_alternatif']; ?></td>
                <td><?php echo $c['nilaiV']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- WP Nilai V -->

      <!-- WP Normalisasi -->
      <div class=" container mt-5">
        <div class="card mt-3">
          <h1 class="text-center pt-5">WP Normalisasi</h1>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <td>Id Bobot</td>
                  <td>Id Kriteria</td>
                  <td>Value</td>
                  <td>jumlah</td>
                  <td>Normalisasi_w</td>
                </tr>
              </thead>
              <?php
            include "config.php";
            // $idkrit = 1;
            $a = "SELECT * FROM wp_normalisasiterbobot";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <tr>
                <td><?php echo $c['id_bobot']; ?></td>
                <td><?php echo $c['id_kriteria']; ?></td>
                <td><?php echo $c['value']; ?></td>
                <td><?php echo $c['jumlah']; ?></td>
                <td><?php echo $c['normalisasi_w']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- WP Normalisasi -->

      <!-- WP Pangkat -->
      <div class=" container mt-5">
        <div class="card mt-3">
          <h1 class="text-center pt-5">WP Pangkat</h1>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <td>Id Matrix</td>
                  <td>Id Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>Id Kriteria</td>
                  <td>Nama Kriteria</td>
                  <td>Id Bobot</td>
                  <td>Value</td>
                  <td>Nilai</td>
                  <td>Keterangan</td>
                  <td>Normalisasi_W</td>
                  <td>Pangkat</td>
                </tr>
              </thead>
              <?php
            include "config.php";
            // $idkrit = 1;
            $a = "SELECT * FROM wp_pangkat";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <tr>
                <td><?php echo $c['id_nilai']; ?></td>
                <td><?php echo $c['id_alternatif']; ?></td>
                <td><?php echo $c['nm_alternatif']; ?></td>
                <td><?php echo $c['id_kriteria']; ?></td>
                <td><?php echo $c['nm_kriteria']; ?></td>
                <td><?php echo $c['id_bobot']; ?></td>
                <td><?php echo $c['value']; ?></td>
                <td><?php echo $c['nilai']; ?></td>
                <td><?php echo $c['nama_skala']; ?></td>
                <td><?php echo $c['normalisasi_w']; ?></td>
                <td><?php echo $c['pangkat']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- WP Pangkat -->

      <!-- WP SumS -->
      <div class=" container mt-5">
        <div class="card mt-3">
          <h1 class="text-center pt-5">WP Sum S</h1>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr class=" text-center">
                  <td>Jumlah Nilai S</td>
                </tr>
              </thead>
              <?php
            include "config.php";
            // $idkrit = 1;
            $a = "SELECT * FROM wp_sums";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <tr class="text-center">
                <td><?php echo $c['jum']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- WP SumS -->
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
