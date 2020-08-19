<?php
if(isset($_POST['tambah_nilai'])){
	include('db.php');
	    $nim  = $_POST['nim'];
		$show = mysql_query("SELECT * FROM mahasiswa WHERE nim='$nim'");
			if(mysql_num_rows($show) == 0){				
				echo 'nim atau kode mata kulaih tidak ada dalam database';	
				echo '<a href="tampil_nilai.php">Kembali</a>';	
			}else {
	$kode_mk    = $_POST['kode_mk'];
	$show = mysql_query("SELECT * FROM matkul WHERE kode_mk='$kode_mk'");
			 if(mysql_num_rows($show) == 0){
				echo 'nim atau kode mata kulaih tidak ada dalam database';	
				echo '<a href="tampil_nilai.php">Kembali</a>';	
			}
			else{	
	$nilai		= $_POST['nilai'];	
	$indeks		= $_POST['indeks'];
	$keterangan	= $_POST['keterangan'];
	$input = mysql_query("INSERT INTO nilai VALUES( NULL,'$nim','$kode_mk','$nilai','$indeks' ,'$keterangan')") or die(mysql_error());
	
	    echo 'Data berhasil di tambahkan! ';		
		echo '<a href="tampil_nilai.php">Kembali</a>';	
			}
			}
}else{	
	echo '<script>window.history.back()</script>';
 
}
?>