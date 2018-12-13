<?php 
	$idKontak = "";
	$nama = $_POST['nama'];
	$kontak = $_POST['kontak'];
	$email = $_POST['email'];

	require_once 'connection.php';
	$insert_kontak = new kontak();
	$insert_kontak->connect(); 
	$insert_kontak->insertKontak($idKontak, $nama, $kontak, $email);
	$insert_kontak->close_connection();

	echo "Berhasil Menambahkan Kontak";
	header('location: index.php');
 ?>
 <br>
 	<a href="/form_kontak/">-KEMBALI-</a>