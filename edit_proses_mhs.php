<?php

if(isset($_POST['simpan'])){
	
	
	include('db.php');
	
	$nim		= $_POST['nim'];	
	$nama		= $_POST['nama'];	
	$kelas		= $_POST['kelas'];	
	
	$update = mysql_query("UPDATE mahasiswa SET nim='$nim', nama='$nama', kelas='$kelas' WHERE nim='$nim'") or die(mysql_error());

	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="tampil_mhs.php?nim='.$nim.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="tampil_mhs.php?nim='.$nim.'">Kembali</a>';	
	}
 
}else{	
	echo '<script>window.history.back()</script>';
 
}
?>