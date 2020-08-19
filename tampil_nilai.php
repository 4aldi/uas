<html>
<body>
<center>
<hr>
	<h2>Tampil Data Nilai</h2>
	<hr>
	<p><a href="menu.php">Menu Utama</a> / <a href="tambah_nilai.php">Tambah Data</a></p>
	
	<h3>Data Nilai</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
			<th>Kode Mata Kuliah</th>
			<th>Nilai</th>
			<th>Indeks</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
		
		<?php
		include('db.php');

		$query = mysql_query("SELECT * FROM nilai ORDER BY no ASC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	

			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			
			
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nim'].'</td>';	
					echo '<td>'.$data['kode_mk'].'</td>';	
					echo '<td>'.$data['nilai'].'</td>';
					echo '<td>'.$data['indeks'].'</td>';
					echo '<td>'.$data['keterangan'].'</td>';
					echo '<td><a href="update_nilai.php?id='.$data['kode_mk'].'">Edit</a> / <a href="hapus_nilai.php?id='.$data['kode_mk'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
	</table>
</body>
</html>