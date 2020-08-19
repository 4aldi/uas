
<html>

<body>
<center>
<hr>
	<h2>Tambah Data Nilai</h2>
	<hr>
	<p><a href="tampil_nilai.php">Beranda</a>  </p> 
	
	<h3>Tambah Data Nilai</h3>
	
	<form action="tambah_proses_nilai.php" method="post">
		<table cellpadding="3" cellspacing="0">
		    <tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" required></td>
				
		     </tr>
			 
			<tr>
				<td>Kode Mata Kuliah</td>
				<td>:</td>
				<td><input type="text" name="kode_mk" required></td>
			</tr>
			<tr>
				<td>Nilai</td>
				<td>:</td>
				<td><input type="text" name="nilai" size="30" required></td>
			</tr>
			<tr>
				<td>Indeks</td>
				<td>:</td>
				<td><input type="text" name="indeks" size="30" required></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" name="keterangan" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah_nilai" value="tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>
