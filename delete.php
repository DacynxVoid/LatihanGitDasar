<?php 
require_once "config.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$q = $koneksi-> query("DELETE FROM tb_user WHERE user_id ='$id'");

	if ($q) {

		echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>";
	}else{
		echo "<script>alert('Data gagal dihapus'); window.location.href='index.php'</script>";
	}
} else {
	header('Location: index.php');
}

 ?>