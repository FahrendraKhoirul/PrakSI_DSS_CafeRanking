<?php
include "config.php";
$idbobot = $_POST['id_bobot'];
$idkrit = $_POST['id_kriteria'];
$value = $_POST['value'];

$sql="INSERT INTO bobot (id_bobot,id_kriteria,value) VALUES ('".$idbobot."','".$idkrit."','".$value."')";
$a=$conn->query($sql);
        if($a === true){
            header('location: dtbobot.php');
        }else{
            echo "Error";
        }
