<?php
include "config.php";
$idmatrix = $_POST['id_nilai'];
$idalt = $_POST['id_alternatif'];
$idbobot = $_POST['id_bobot'];
$idskala = $_POST['id_skala'];

$sql="INSERT INTO nilai (id_nilai,id_alternatif, id_bobot, id_skala) VALUES ('".$idmatrix."',
                                    '".$idalt."','".$idbobot."','".$idskala."')";
$a=$conn->query($sql);
        if($a === true){
            header('location: dtmatrix.php');
        }else{
            echo "Error";
        }
