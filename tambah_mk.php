
<html>

<body>
<center>
<hr>
	<h2>Tambah Data Mata Kuliah</h2>
	<hr>
	<p><a href="tampil_mhs.php">Beranda</a>  </p> 
	
	<h3>Tambah Data Mata Kuliah</h3>
	
	<form action="tambah_proses_mk.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Kode Mata Kuliah</td>
				<td>:</td>
				<td><input type="text" name="kode_mk" required></td>
			</tr>
			<tr>
				<td>Nama Mata Kuliah</td>
				<td>:</td>
				<td><input type="text" name="nama_mk" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah_mk" value="tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>