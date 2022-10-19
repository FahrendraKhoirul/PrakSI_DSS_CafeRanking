<?php
include "config.php";
$idkrit = $_POST['id_kriteria'];
$nmkrit = $_POST['nm_kriteria'];
$tipe = $_POST['tipe'];

$sql = "INSERT INTO kriteria (id_kriteria,nm_kriteria, tipe) VALUES ('" . $idkrit . "','" . $nmkrit . "','" . $tipe . "')";
$a = $conn->query($sql);
if ($a === true) {
  header('location: dtkriteria.php');
} else {
  echo "Error";
}
