<?php
$nama=$_GET['nama'];
$kelas=$_GET['kelas'];

$database= new PDO("mysql:host=localhost;dbname=latihanlagi",'root','');
$query=$database->query("delete from siswa where id='$id'");

if($query){
    header("Location:index.php");
}