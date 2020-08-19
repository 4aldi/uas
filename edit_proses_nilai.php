<?php
if(isset($_POST['simpan'])){
	include('db.php');

	$kode_mk	= $_POST['kode_mk'];
	$nilai		= $_POST['nilai'];	
	$indeks		= $_POST['indeks'];
	$keterangan	= $_POST['keterangan'];
	$update = mysql_query("UPDATE nilai SET  nilai='$nilai', indeks='$indeks' , keterangan='$keterangan' WHERE kode_mk='$kode_mk'") or die(mysql_error());

	if($update){
		echo 'Data berhasil di simpan! ';		
		echo '<a href="tampil_nilai.php?kode_mk='.$kode_mk.'">Kembali</a>';	
	}else{	
		echo 'Gagal menyimpan data! ';		
		echo '<a href="tampil_nilai.php?kode_mk='.$kode_mk.'">Kembali</a>';	
		
	}
 
}else{	
	echo '<script>window.history.back()</script>';
}
?>