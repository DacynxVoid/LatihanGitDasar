<?php
// mengaktifkan session php
session_start();
include 'config.php';
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data user dengan username dan password yang sesuai
 $result = mysql_query($koneksi,"SELECT * FROM tb_user where user_name='$username' and password='$password'");

 $cek = mysqli_num_rows($result);

 if($cek > 0) {
 	$data = mysqli_fetch_assoc($result);
 	//menyimpan session user, nama, status dan id login
 	$_SESSION['user_name'] = $user_name;
 	$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
 	$_SESSION['status'] = "sudah_login";
 	$_SESSION['user_id'] = $data['user_id'];
 	header("location:halaman_admin.php");
 

 } else {
 	header("location:login.php?pesan=gagal data tidak ditemukan.");
}
?>