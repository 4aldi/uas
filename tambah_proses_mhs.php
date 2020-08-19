<?php
if(isset($_POST['tambah_mhs'])){
	include('db.php');
	
	$nim		= $_POST['nim'];																
	$nama		= $_POST['nama'];	
	$kelas		= $_POST['kelas'];	
	$input = mysql_query("INSERT INTO mahasiswa VALUES( '$nim', '$nama', '$kelas')") or die(mysql_error());
	
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="tampil_mhs.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tampil_mhs.php">Kembali</a>';	
		
	}
 
}else{	
	echo '<script>window.history.back()</script>';
 
}
?>