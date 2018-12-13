<?php
  $id_kontak = $_GET["idKontak"];
  $nama = $_POST["nama"];
  $kontak = $_POST["kontak"];
  $email = $_POST["email"];

  require_once "connection.php";
  $edit_kontak = new kontak();
  $edit_kontak->connect();

  $edit_kontak->updateDataKontak($id_kontak,$nama,$kontak,$email);
  $edit_kontak->close_connection();

  header ('location: index.php');
?>
