<?php 
require_once 'config.php';
if (isset($_POST['submit'])) {
	# code...
	$username = $_POST['user_name'];
	$namalengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$level = $_POST['level'];
	$status = $_POST['status'];
	$q = $koneksi-> query("INSERT INTO tb_user VALUES('','$username','$email','$namalengkap','$pass','$level','$status')");
	if ($q) {
			echo "<script>alert('Data User berhasil ditambahkan'); window.location.href='index.php'</script>";
		}
		else {
			echo "<script>alert('Data User gagal ditambahkan'); window.location.href='index.php'</script>";
		}
	}

	else {
			header('Location: index.php');
		}

 ?>