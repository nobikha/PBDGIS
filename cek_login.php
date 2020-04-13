<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user inner join level on user.id_level = level.id_level where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
$username = mysqli_real_escape_string($_GET['username']);
$password = mysqli_real_escape_string($_GET['password']);
// cek apakah username dan password di temukan pada database



if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['nama_level']=="admin"){
	
		// buat nama user
		$_SESSION['nama'] = $data['nama_user'];
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:home_map.php");

	// cek jika user login sebagai pengguna
	}else if($data['nama_level']=="pengguna"){
			// buat nama user
		$_SESSION['nama'] = $data['nama_user'];
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengguna";
		// alihkan ke halaman dashboard pengguna
		header("location:home_map.php");

	// cek jika user login sebagai editor
	}else if($data['nama_level']=="editor"){
			// buat nama user
		$_SESSION['nama'] = $data['nama_user'];
		// buat session login dan editor
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "editor";
		// alihkan ke halaman dashboard editor
		header("location:home_map.php.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>