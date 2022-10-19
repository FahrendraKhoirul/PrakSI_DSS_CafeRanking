<?php
include "config.php";
$idalt = $_POST['id_alternatif'];
$nmalt = $_POST['nm_alternatif'];

$sql = "INSERT INTO alternatif (id_alternatif,nm_alternatif) VALUES ('" . $idalt . "','" . $nmalt . "')";
$a = $conn->query($sql);
if ($a === true) {
  header('location: dtalternatif.php');
} else {
  echo "Error";
}
