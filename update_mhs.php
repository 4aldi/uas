<html>
<body>
<center>
<hr>
	<h2>Edit Data Mahasiswa</h2>
	<hr>
	<p><a href="tampil_mhs.php">Beranda</a> </p> 
	
	<h3>Edit Data Mahasiswa</h3>
	
	<?php
	include('db.php');
	
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM mahasiswa WHERE nim='$id'");
	
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
		
	}else{
		$data = mysql_fetch_assoc($show);	
	}
	?>
	
	<form action="edit_proses_mhs.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $data['nim']; ?>" required></td>	
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required></td> 
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pilih Kelas</option>
						<option value="if1" <?php if($data['kelas'] == 'IF1'){ echo 'selected'; } ?>>IF1</option>	
						<option value="if2" <?php if($data['kelas'] == 'IF2'){ echo 'selected'; } ?>>IF2</option>	
						<option value="if3" <?php if($data['kelas'] == 'IF3'){ echo 'selected'; } ?>>IF3</option>	
					    <option value="if4" <?php if($data['kelas'] == 'IF4'){ echo 'selected'; } ?>>IF4</option>	
						<option value="if5" <?php if($data['kelas'] == 'IF5'){ echo 'selected'; } ?>>IF5</option>	
					</select>
				</td>
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