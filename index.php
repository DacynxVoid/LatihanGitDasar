<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD DENGAN PHP MySQLi</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<h1>CRUD DENGAN PHP MySQLi</h1>


	<form method="post" action="tambah.php">
		<input type="text" name="user_name" placeholder="Nama User">
		<input type="email" name="email" placeholder="Email">
		<input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
		<input type="password" name="password" placeholder="Password">
		<input type="number" name="level" placeholder="level">
		<input type="number" name="status" placeholder="Status">
		<input type="submit" name="submit" value ="Tambah Data">
	</form><br/>

	<table border="1">
		<tr style="	color : white; background-color: #3498db;">
			<th>No.</th>
			<th>Nama User</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>Password</th>
			<th>Level</th>
			<th>Status</th>
			<th colspan="2">Aksi</th>
		</tr>
		
		<?php
		$q = $koneksi->query("SELECT * FROM tb_user");
		$no = 1;
		   while ($dt = $q->fetch_assoc()):
		?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $dt['user_name']?></td>
				<td><?= $dt['nama_lengkap']?></td>
				<td><?= $dt['email']?></td>
				<td><?= $dt['password']?></td>
				<td><?= $dt['level']?></td>
				<td><?= $dt['status']?></td>
				<td><a href="update.php?id=<?= $dt['user_id']?>"onclick="return confirm('Anda yakin akan mengubah data ini')">Ubah</a></td>
				<td><a href="delete.php?id=<?= $dt['user_id']?>" onclick="return confirm('Anda yakin akan menghapus data ini')">Hapus</a></td>
			</tr>
		<?php
		   endwhile;
?>
	</table>
	

</body>
</html>