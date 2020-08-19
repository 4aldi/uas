
<html>

<body>
<center>
<hr>
	<h2>Tambah Data Mahasiswa</h2>
		<hr>
	<p><a href="tampil_mhs.php">Beranda</a>  </p> 

	<h3>Tambah Data Mahasiswa</h3>
	
	<form action="tambah_proses_mhs.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pilih Kelas</option>
						<option value="if1">IF1</option>
						<option value="if2">IF2</option>
						<option value="if3">IF3</option>
						<option value="if4">IF4</option>
						<option value="if5">IF5</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah_mhs" value="tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>