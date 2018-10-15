<?php
require_once("konek.php");

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jk=$_POST['jk'];
$prodi=$_POST['prodi'];
$fakultas=$_POST['fakultas'];
$asal=$_POST['asal'];
$motto=$_POST['motto'];

$sql="INSERT INTO mahasiswa(nama,nim,jeniskelamin,programstudi,fakultas,asal,motto) values('$nama','$nim','$jk','$prodi','$fakultas','$asal','$motto')";
if(mysqli_query($koneksi,$sql)){
       echo "data baru berhasil<br>";
}else{
	echo "error".$sql.mysqli_error($koneksi);
}

mysqli_close($koneksi);

echo "menuju <a href='tampil.php'>link ini</a> untuk melanjutkan";