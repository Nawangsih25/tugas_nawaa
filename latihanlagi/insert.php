<?php
$id=$_GET['id'];
$nama=$_GET['nama'];
$kelas=$_GET['kelas'];

$database = new PDO("mysql:host=localhost;dbname=latihanlagi",'root','');
$query=$database->query("insert into siswa values('$id','$nama','$kelas')");

if($query){
    header("Location:index.php");
}