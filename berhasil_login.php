<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
    include_once 'koneksi.php';
    ?>

<h3>Selamat Datang</h3><hr><p align="left">Halo <b><?php echo $_SESSION['nama']; ?></b> <br>Anda berhasil login<br>
<a href="logout.php" type="button" onclick="return confirm('ANDA YAKIN AKAN KELUAR ... ?')" >Logout</a>