<html>
<body>
<center>
<hr>
	<h2>Tampil Data Mata Kuliah</h2>
	<hr>
	<p><a href="menu.php">Menu Utama</a> / <a href="tambah_mk.php">Tambah Data</a></p>
	
	<h3>Data Mata Kuliah</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Opsi</th>
		</tr>
		
		<?php
		include('db.php');
		$query = mysql_query("SELECT * FROM matkul ORDER BY kode_mk ASC") or die(mysql_error());
		

		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['kode_mk'].'</td>';	
					echo '<td>'.$data['nama_mk'].'</td>';	
					echo '<td><a href="update_mk.php?id='.$data['kode_mk'].'">Edit</a> / <a href="hapus_mk.php?id='.$data['kode_mk'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
	</table>
</body>
</html>