<?php

require_once("konek.php");



$id = $_GET["nim"];



$sql = "DELETE FROM mahasiswa WHERE nim=$id";



if (mysqli_query($koneksi, $sql)) {

    header("location: tampil.php");

}else {

    echo "error: " . $sql . "<br>" . mysqli_error($koneksi);

}