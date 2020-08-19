<html>
<body>
<center>
<hr>
	<h2>Edit Data Mata Kuliah</h2>
	<hr>
	<p><a href="tampil_mk.php">Beranda</a> </p> 
	<h3>Edit Data  Mata Kuliah</h3>
	
	<?php
	include('db.php');
	
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM matkul WHERE kode_mk='$id'");
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysql_fetch_assoc($show);		
	}
	?>
	
	<form action="edit_proses_mk.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Kode Mata Kuliah</td>
				<td>:</td>
				<td><input type="text" name="kode_mk" value="<?php echo $data['kode_mk']; ?>" required></td>	
			</tr>
			<tr>
				<td>Nama Mata Kuliah</td>
				<td>:</td>
				<td><input type="text" name="nama_mk" size="30" value="<?php echo $data['nama_mk']; ?>" required></td> 
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