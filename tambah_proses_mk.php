<?php
if(isset($_POST['tambah_mk'])){
	include('db.php');
	$kode_mk		= $_POST['kode_mk'];	
	$nama_mk		= $_POST['nama_mk'];	
	$input = mysql_query("INSERT INTO matkul VALUES( '$kode_mk', '$nama_mk')") or die(mysql_error());
	
	if($input){
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="tampil_mk.php">Kembali</a>';	
	}else{	
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tampil_mk.php">Kembali</a>';	
	}
 
}else{	
	echo '<script>window.history.back()</script>';
 
}
?>