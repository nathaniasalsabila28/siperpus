<?php 
include '../koneksi.php';
if (isset($_POST['simpan'])){

	$nama 				= $_POST['nama'];
	$kelas  	 		= $_POST['kelas'];
	$telp        		= $_POST['telp'];
	$username     		= $_POST['username'];
	$password			= $_POST['password'];
	$id_level		    = 3;

	

	$query = mysqli_query( $kon,"INSERT INTO buku (nama,kelas, telp,username, password,id_level)
			VALUES ('$nama','$kelas','$telp','$username','$password','$id_level')");

	if($query>0){
echo "<script>alert('data berhasil ditambahkan.');window.location='index.php';</script>";

	
	}
}
 ?>