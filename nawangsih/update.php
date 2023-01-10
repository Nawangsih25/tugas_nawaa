<?php
 $id= $_POST['id'];
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];

 
    $database = new PDO("mysql:host=localhost;dbname=tbdatasiswa",'root','');
$query = $database->query("UPDATE siswa SET nama='$nama',kelas='$kelas' WHERE id='$id' ");

if($query){
header("Location:tampil.php");
}
