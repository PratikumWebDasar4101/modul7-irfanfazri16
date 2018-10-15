<?php
require_once("konek.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<input type="hidden" name="aksi">
	<input type="text" name="data">
	<input type="submit" name="cari">
	<tr align="left">
		<th>nama</th>
		<th>nim</th>
		<th>jenis kelamin</th>
		<th>program studi</th>
		<th>fakultas</th>
		<th>asal</th>
		<th>motto hidup</th>
	</tr>
<?php
if(isset($_GET['aksi'])&&$_GET['aksi']=='search'&& isset($_GET['data']) ){
	$datamahasiswa    =$_GET['data'];
	$query  ="SELECT `nim` ,`nama` FROM `mahasiswa` WHERE `nim` LIKE `%datamahasiswa` OR `nama` LIKE `%data`";
}else{
$query="SELECT*from `mahasiswa`";
}
?>


	<?php
	$sql="SELECT * FROM mahasiswa";

	 $result = mysqli_query($koneksi, $sql);

     $row = mysqli_num_rows($result);

     if ($row>0) {
     	while ($row=mysqli_fetch_array($result)) {
     		$id=$row['nim'];
     		echo "<tr>";
     		echo "<td>".$row['nama']."</td>";
     		echo "<td>".$row['nim']."</td>";
     		echo "<td>".$row['jeniskelamin']."</td>";
     		echo "<td>".$row['programstudi']."</td>";
     		echo "<td>".$row['fakultas']."</td>";
     		echo "<td>".$row['asal']."</td>";
     		echo "<td>".$row['motto']."</td>";
     		echo "</tr>";
     		# code...
     	}
     	echo "<a href='indelete.php?nim=$id'>delete</a>||<a href='input.php?nim=$id'>kembali</a>" ;
     }else{
     	 echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";
     }
     ?>




</table>
</body>
</html>