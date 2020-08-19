<?php

if(isset($_GET['id'])){
	include('db.php');
	$id = $_GET['id'];
	
	$cek = mysql_query("SELECT nim FROM mahasiswa WHERE nim='$id'") or die(mysql_error());

	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		$del = mysql_query("DELETE FROM mahasiswa WHERE nim='$id'");
		
		if($del){
			
			echo 'Data siswa berhasil di hapus! ';		
			echo '<a href="tampil_mhs.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';	
			echo '<a href="tampil_mhs.php">Kembali</a>';	
		
		}
		
	}
	
}else{

	echo '<script>window.history.back()</script>';
	
}
?>