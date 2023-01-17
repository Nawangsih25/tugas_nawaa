<?php
 $nis= $_POST['nis'];
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];

 
    $database = new PDO("mysql:host=localhost;dbname=tbdatasiswa",'root','');
$query = $database->query("UPDATE siswa SET nama='$nama',kelas='$kelas' WHERE nis='$nis' ");

if($query){
header("Location:tampil.php");
}
