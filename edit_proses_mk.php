<?php
if(isset($_POST['simpan'])){
	include('db.php');

	$kode_mk		= $_POST['kode_mk'];	
	$nama_mk		= $_POST['nama_mk'];
	$update = mysql_query("UPDATE matkul SET kode_mk='$kode_mk', nama_mk='$nama_mk' WHERE kode_mk='$kode_mk'") or die(mysql_error());
	
	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="tampil_mk.php?kode_mk='.$kode_mk.'">Kembali</a>';	
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="tampil_mk.php?kode_mk='.$kode_mk.'">Kembali</a>';	
	}
 
}else{	
	echo '<script>window.history.back()</script>';
 
}
?>