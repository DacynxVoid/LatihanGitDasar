<?php 
require_once 'config.php';
if (isset($_POST['submit'])) {
	# code...
	$id = $_POST ['user_id'];
	$username = $_POST['user_name'];
	$namalengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$level = $_POST['level'];
	$status = $_POST['status'];
	$q = $koneksi-> query("UPDATE tb_user SET user_name = '$username' , nama_lengkap = '$namalengkap', email = '$email', password = '$pass', level = ' $level', status = '$status' WHERE user_id = '$id'");
	if ($q) {
			echo "<script>alert('Data User berhasil diubah'); window.location.href='index.php'</script>";
		}
		else {
			echo "<script>alert('Data User gagal diubah'); window.location.href='index.php'</script>";
		}
	}

	else {
			header('Location: index.php');
		}

 ?>