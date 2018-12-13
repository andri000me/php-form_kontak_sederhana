<?php

class Database{
  private $db;
  private $host="localhost";
  private $user="root";
  private $password="";
  private $database="form_kontak";
  private $query;
  private $row;
  private $dataset;
  private $num_rows;

  public function connect(){
    $this ->db = mysql_connect($this->host, $this->user, $this->password);
    mysql_select_db($this->database, $this->db);
    }

    public function execute($query){  // execute berfungs untuk menampilkan
      $this ->query =$query;
      $this ->result =mysql_query($this ->query, $this ->db);
    }

    public function executeUpdate($query){
      $this ->query= $query;
      mysql_query($this ->query, $this ->db);
    }

    public function get_dataset(){
      $dataset = array();
      $i =0; // $i maksud i adalah index
      while ($r=mysql_fetch_array($this ->result)){
        $field=0;
        for ($field = 0; $field <mysql_num_fields($this->result); $field++) {
          $dataset[$i] [$field] = $r[$field];
        }
        $i++;
      }
      return $dataset;
    }

    public function get_num_row()
    {
      $this->num_row = mysql_num_rows($this->result);
      return $this->num_rows;
    }

    public function close_connection()
    {
      mysql_close($this->db);
    }

}

class kontak extends database{

  function selectAllKontak(){
    $this->execute("select * from tb_kontak");
  }

  function insertKontak($id_kontak,$nama,$kontak,$email){
    $this->executeUpdate("insert into tb_kontak (id_kontak,nama,kontak,email) values ('$id_kontak','$nama','$kontak','$email')");
  }

  function detailDataKontak($id_kontak){
    $this->execute("select * from tb_kontak where id_kontak='".$id_kontak."'");
  }

  function updateDataKontak($id_kontak,$nama,$kontak,$email){
    $this->executeUpdate("update tb_kontak set nama='".$nama."', kontak='".$kontak."', email='".$email."' where id_kontak='".$id_kontak."'");
  }

  function deleteDataKontak($id_kontak){
    $this->executeUpdate("delete from tb_kontak where id_kontak='".$id_kontak."'");
  }
}

//---------------------
// --BUKU_TAMU_KELAS---
//---------------------
 class Kelas extends database{

  function selectAllKelas(){
    $this -> execute("select * from kelas");
    }

  }
?>
