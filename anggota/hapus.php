<?php  
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$query = mysqli_query($kon, "DELETE FROM anggota WHERE id_anggota = '$id_anggota'");

if($query > 0){
	echo "
    		<script>
    			alert('Data Berhasil Dihapus');
    			document.location.href='index.php';
    		</script>
    	";
}
?>