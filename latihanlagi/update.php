<?php
$id=$_GET['id'];
$nama=$_GET['nama'];
$kelas=$_GET['kelas'];

$database = new PDO("mysql:host=localhost;dbname=latihanlagi",'root','');
$query=$database->query("update latihanlagi set nama='$nama',kelas='$kelas' where id='$id'");

if($query){
    header("Location:index.php");
}