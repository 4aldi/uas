<?php
if(isset($_GET['id'])){
	include('db.php');

	$id = $_GET['id'];
	$cek = mysql_query("SELECT kode_mk FROM matkul WHERE kode_mk='$id'") or die(mysql_error());

	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';	
	}else{
		$del = mysql_query("DELETE FROM matkul WHERE kode_mk='$id'");
		if($del){
			
			echo 'Data Mata Kuliah berhasil di hapus! ';		
			echo '<a href="tampil_mk.php">Kembali</a>';	
		}else{
			echo 'Gagal menghapus data! ';		
			echo '<a href="tampil_mk.php">Kembali</a>';
		}	
	}
	
}else{
	echo '<script>window.history.back()</script>';
	
}
?>