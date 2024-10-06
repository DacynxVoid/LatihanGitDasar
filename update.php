<?php
		require_once 'config.php';
		if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$q = $koneksi->query("SELECT * FROM tb_user WHERE user_id = '$id'");
		foreach ($q as $dt) :

?>
<link rel="stylesheet" href="style.css">
<h1>CRUD DENGAN PHP MySQL</h1>
<h1>Halaman Ubah Data</h1>
<form action="prosesupdate.php" method="post">
<input type="hidden" name="user_id" value="<?= $dt['user_id'] ?>">
<input type="text" name="user_name" value="<?= $dt['user_name'] ?>">
<input type="text" name="nama_lengkap" value="<?= $dt['nama_lengkap'] ?>">
<input type="text" name="email" value="<?= $dt['email'] ?>">
<input type="password" name="password" value="<?= $dt['password'] ?>">
<input type="number" name="level" value="<?= $dt['level'] ?>">
<input type="number" name="status" value="<?= $dt['status'] ?>">
<input type="submit" name="submit" value="Ubah Data">
</form>
<?php
endforeach;
}	