<?php
if($_GET){
	switch ($_GET['page']) {
		case '':
			if(!file_exists("main.php")) die ("Empty Main Page!");
			include "Main.php";
			break;
		case 'HalamanUtama':
			if(!file_exists("main.php")) die ("Sorry Empty Page!");
			include "Main.php";
			break;
		case 'home':
			if(!file_exists("home.php")) die ("Sorry Empty Page!");
			include "home.php";
			break;
		case 'Logout':
			if(!file_exists("logout.php")) die ("Sorry Empty Page!");
			include "logout.php";
			break;
		case 'masakan':
			if(!file_exists("masakan.php")) die ("Sorry Empty Page!");
			include "masakan.php";
			break;
		case 'pesanan':
			if(!file_exists("pesanan.php")) die ("Sorry Empty Page!");
			include "pesanan.php";
			break;
		case 'pesanan_tambah':
			if(!file_exists("pesanan_tambah.php")) die ("Sorry Empty Page!");
			include "pesanan_tambah.php";
			break;
		case 'pesanan_hapus':
			if(!file_exists("pesanan_hapus.php")) die ("Sorry Empty Page!");
			include "pesanan_hapus.php";
			break;
		case 'masakan_tambah':
			if(!file_exists("masakan_tambah.php")) die ("Sorry Empty Page!");
			include "masakan_tambah.php";
			break;
		case 'transaksi_hapus':
			if(!file_exists("transaksi_hapus.php")) die ("Sorry Empty Page!");
			include "transaksi_hapus.php";
			break;	
		case 'transaksi_tambah':
			if(!file_exists("transaksi_tambah.php")) die ("Sorry Empty Page!");
			include "transaksi_tambah.php";
			break;	
		case 'masakan_hapus':
			if(!file_exists("masakan_hapus.php")) die ("Sorry Empty Page!");
			include "masakan_hapus.php";
			break;
		case 'pengguna':
			if(!file_exists("pengguna.php")) die ("Sorry Empty Page!");
			include "pengguna.php";
			break;
		case 'pengguna_tambah':
			if(!file_exists("pengguna_tambah.php")) die ("Sorry Empty Page!");
			include "pengguna_tambah.php";
			break;
		case 'pengguna_hapus':
			if(!file_exists("pengguna_hapus.php")) die ("Sorry Empty Page!");
			include "pengguna_hapus.php";
			break;
		case 'transaksi':
			if(!file_exists("transaksi.php")) die ("Sorry Empty Page!");
			include "transaksi.php";
			break;
		case 'transaksi_edit':
			if(!file_exists("transaksi_edit.php")) die ("Sorry Empty Page!");
			include "transaksi_edit.php";
			break;
		case 'pesanan_edit':
			if(!file_exists("pesanan_edit.php")) die ("Sorry Empty Page!");
			include "pesanan_edit.php";
			break;
		case 'masakan_edit':
			if(!file_exists("masakan_edit.php")) die ("Sorry Empty Page!");
			include "masakan_edit.php";		
			break;
		case 'pengguna_edit':
			if(!file_exists("pengguna_edit.php")) die ("Sorry Empty Page!");
			include "pengguna_edit.php";
			break;
			
		default:
			if(!file_exists("main.php")) die ("Empty Page!");
			include "main.php";
			break;
	}
}
?>