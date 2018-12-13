<?php
  require_once "connection.php";
  $id_kontak = $_GET["idKontak"];

  $delete_kontak = new kontak();
  $delete_kontak->connect();
  $delete_kontak->deleteDataKontak($id_kontak);

  header('location: index.php');

 ?>
