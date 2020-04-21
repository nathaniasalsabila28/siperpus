<?php  
$kon = mysqli_connect("localhost","root","", "perpus_db");

if(mysqli_connect_error()){
	echo "Koneksi database gagal : ". mysqli_connect_error();
}
?>