<html>
<body>
<center>
<hr>
	<h2>Edit Data Nilai</h2>
	<hr>
	<p><a href="tampil_nilai.php">Beranda</a> </p> 	
	<h3>Edit Data Nilai</h3>
	<?php
		include('db.php');
		$id = $_GET['id'];
		$show = mysql_query("SELECT * FROM nilai WHERE kode_mk='$id'");
			if(mysql_num_rows($show) == 0){
				echo '<script>window.history.back()</script>';		
		   }
			else{
				$data = mysql_fetch_assoc($show);	
		}
	?>
	
	<form action="edit_proses_nilai.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">

		
		<tr>
				<td>Kode Mata Kuliah</td>
				<td>:</td>
				<td><input type="text" name="kode_mk" value="<?php echo $data['kode_mk']; ?>" required></td>	
			</tr>
			<tr>
				<td>Nilai</td>
				<td>:</td>
				<td><input type="text" name="nilai" value="<?php echo $data['nilai']; ?>" required></td>	
			</tr>
			<tr>
				<td>Indeks</td>
				<td>:</td>
				<td><input type="text" name="indeks" size="30" value="<?php echo $data['indeks']; ?>" required></td> 
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" name="keterangan" size="30" value="<?php echo $data['keterangan']; ?>" required></td> 
			</tr>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>