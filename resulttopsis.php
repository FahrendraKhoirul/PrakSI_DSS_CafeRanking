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
              <a class="nav-link js-scroll-trigger" href="resulttopsis.php">Result TOPSIS</a>
            </li>
          </ul>\ <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <!-- .navbar -->
      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section>
      <div class="container card shadow p-5 mt-5">
        <h1 class="text-center pt-5">Result Metode TOPSIS</h1>

        <!-- Topsis Pembagi-->
        <h3 class="text-center pt-5">Topsis Pembagi</h3>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr class="text-center">
                <td>ID Kriteria</td>
                <td>Nama Kriteria</td>
                <td>Pembagi</td>
              </tr>
            </thead>
            <?php
          include "config.php";
          $a = "SELECT * FROM topsis_pembagi";
          $b = $conn->query($a);
          while ($c = $b->fetch_array()) {
          ?>
            <tr>
              <td><?php echo $c['id_kriteria']; ?></td>
              <td><?php echo $c['nm_kriteria']; ?></td>
              <td><?php echo $c['bagi']; ?></td>
            </tr>
            <?php
          }
          ?>
          </table>
        </div>
      </div>
      </div>
      <!-- Topsis Pembagi-->


      <!-- Topsis Normalisasi-->
      <div class="container mt-5">
        <div class="card mt-3">
          <h3 class="text-center pt-5">Topsis Normalisasi</h3>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <td>ID Matrix</td>
                  <td>ID Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>ID Kriteria</td>
                  <td>Nama Kriteria</td>
                  <td>ID Bobot</td>
                  <td>Value Bobot</td>
                  <td>Nilai</td>
                  <td>Keterangan</td>
                  <td>Normalisasi</td>
                </tr>
              </thead>
              <?php
            include "config.php";
            $a = "SELECT * FROM topsis_normalisasi";
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
                <td><?php echo $c['normalisasi']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- Topsis Normalisasi-->


      <!-- Topsis Terbobot-->
      <div class="container mt-5">
        <div class="card mt-3">
          <h3 class="text-center pt-5">Topsis Terbobot</h3>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <td>ID Matrix</td>
                  <td>ID Alternatif</td>
                  <td>Nama Alternatif</td>
                  <td>ID Kriteria</td>
                  <td>Nama Kriteria</td>
                  <td>ID Bobot</td>
                  <td>Value Bobot</td>
                  <td>Nilai</td>
                  <td>Keterangan</td>
                  <td>Normalisasi</td>
                  <td>Terbobot</td>
                </tr>
              </thead>
              <?php
            include "config.php";
            $a = "SELECT * FROM topsis_terbobot";
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
                <td><?php echo $c['normalisasi']; ?></td>
                <td><?php echo $c['terbobot']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- Topsis Terbobot-->


      <!-- Topsis Nilai Maksimum dan Minimum-->
      <div class="container mt-5">
        <div class="card mt-3">
          <h3 class="text-center pt-5">Topsis Nilai Maksimum dan Minimum</h3>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <td>ID Matrix</td>
                  <td>ID Kriteria</td>
                  <td>Nama Kriteria</td>
                  <td>Maksimum</td>
                  <td>Minimum</td>
                </tr>
              </thead>
              <?php
            include "config.php";
            $a = "SELECT * FROM topsis_maxmin";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <tr>
                <td><?php echo $c['id_nilai']; ?></td>
                <td><?php echo $c['id_kriteria']; ?></td>
                <td><?php echo $c['nm_kriteria']; ?></td>
                <td><?php echo $c['maximum']; ?></td>
                <td><?php echo $c['minimum']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- Topsis Nilai Maksimum dan Minimum-->

      <!-- Topsis Nilai SIP dan SIN-->
      <div class="container mt-5">
        <div class="card mt-3">
          <h4 class="text-center pt-5">Topsis Nilai SIP dan SIN</h4>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <td>ID Alternatif</td>
                  <td>Nilai Positif</td>
                  <td>Nilai Negatif</td>
                </tr>
              </thead>
              <?php
            include "config.php";
            $a = "SELECT * FROM topsis_sipsin";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <tr>
                <td><?php echo $c['id_alternatif']; ?></td>
                <td><?php echo $c['dplus']; ?></td>
                <td><?php echo $c['dmin']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- Topsis Niali SIP dan SIN-->

      <!-- Topsis Nilai V-->
      <div class="container mt-5">
        <div class="card mt-3">
          <h4 class="text-center pt-5">Topsis Nilai V</h4>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <td>ID Alternatif</td>
                  <td>Nilai Positif</td>
                  <td>Nilai Negatif</td>
                  <td>Nilai V</td>
                </tr>
              </thead>
              <?php
            include "config.php";
            $a = "SELECT * FROM topsis_nilaiv";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <tr>
                <td><?php echo $c['id_alternatif']; ?></td>
                <td><?php echo $c['dplus']; ?></td>
                <td><?php echo $c['dmin']; ?></td>
                <td><?php echo $c['nilaiv']; ?></td>
              </tr>
              <?php
            }
            ?>
            </table>
          </div>
        </div>
      </div>
      <!-- Topsis Nilai V -->

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
