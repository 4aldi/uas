<html>
<body>
<center>
<hr>
	<h2>Tampil Data Mahasiswa</h2>

	<hr>
	<p><a href="menu.php">Menu Utama</a> / <a href="tambah_mhs.php">Tambah Data</a></p>

	<h3>Data Mahasiswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>Kelas</th>
			<th>Opsi</th>
		</tr>
		
		<?php
		include('db.php');
		
		$query = mysql_query("SELECT * FROM mahasiswa ORDER BY nim ASC") or die(mysql_error());
		
		if(mysql_num_rows($query) == 0){	
			
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nim'].'</td>';	
					echo '<td>'.$data['nama'].'</td>';	
					echo '<td>'.$data['kelas'].'</td>';
					echo '<td><a href="update_mhs.php?id='.$data['nim'].'">Edit</a> /<a href="hapus_mhs.php?id='.$data['nim'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
	</table>
</body>
</html>