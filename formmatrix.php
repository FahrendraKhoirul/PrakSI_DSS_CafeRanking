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
            <a class="nav-link js-scroll-trigger" href="result.php">Result</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container card shadow p-5 mt-5">
      <form action="insertmatrix.php" method="POST">
        <div class="form-group">
          <label for="id_matrix">ID Matrix</label>
          <input type="text" name="id_matrix" class="form-control" required="" placeholder="Masukkan ID Matrix" id="id_matrix">
        </div>
        <div class="form-group">
          <label for="idalt">ID Alternatif</label>
          <select class="form-control" name="idalt">
            <?php
            include "config.php";
            $a = "select * from alternatif";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <option value="<?php echo $c['id_alternatif']; ?>"><?php echo $c['nm_alternatif']; ?></option>
            <?php }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="idbobot">ID Bobot</label>
          <select class="form-control" name="idbobot">
            <?php
            include "config.php";
            $a = "select * from bobot";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <option value="<?php echo $c['id_bobot']; ?>"><?php echo $c['value']; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="idskala">ID Skala</label>
          <select class="form-control" name="idskala">
            <?php
            include "config.php";
            $a = "select * from skala";
            $b = $conn->query($a);
            while ($c = $b->fetch_array()) {
            ?>
              <option value="<?php echo $c['id_skala']; ?>"><?php echo $c['nama_skala']; ?></option>
            <?php } ?>
          </select>
        </div>
        <br></br>
        <button type="submit" class="btn btn-primary">SAVE</button>
        <button type="reset" class="btn btn-danger">RESET</button>
      </form>
    </div>

  </section><!-- End Hero -->

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
