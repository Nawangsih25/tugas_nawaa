<?php
$id=$_GET['id'];
$nama=$_GET['nama'];
$kelas=$_GET['kelas'];

$database= new PDO("mysql:host=localhost;dbname=latihan2",'root','');
$query=$database->query("update siswa set id='$id',nama='$nama',kelas='$kelas' where id='$id'");

if($query){
    header("Location:index.php");
}