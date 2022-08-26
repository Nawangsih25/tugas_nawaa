<?php
$nama=$_GET['nama'];
$kelas=$_GET['kelas'];
$id=$_GET['id'];

$database= new PDO("mysql:host=localhost;dbname=latihan2",'root','');
$query=$database->query("insert into siswa values('$id','$nama','$kelas')");

if($query){
    header("Location:index.php");
}   