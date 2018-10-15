<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>
<body>
<form method="post" action="simpan.php" enctype="multipart/form data">
	nama<input type="text" name="nama">
	nim<input type="text" name="nim">
	jenis kelamin<input type="radio" name="jk" value="laki-laki">laki-laki
	<input type="radio" name="jk" value="perempuan">perempuan
	program studi
	<select name="prodi" id="dropdown">
		<option value="MI">MI</option>
		<option value="TK">TK</option>
		<option value="MULTIMEDIA">MULTIMEDIA</option>
	</select>

	fakultas
	<select name="fakultas" id="dropdown">
		<option value="ilmu terapan">ilmu terapan</option>
		<option value="bisnis">bisnis</option>
		<option value="dokter">kedokteran</option>
	</select>

	asal
	<input type="text" name="asal">

	Motto hidup
	<textarea name="motto"></textarea>
	<input type="submit" name="simpan">
</form>
</body>
</html>