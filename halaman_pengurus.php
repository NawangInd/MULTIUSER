<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pengurus</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<center>
	<h1>Halaman Pengurus</h1>
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
	<center>
 
	<br/>
	<br/>

</body>
</html>