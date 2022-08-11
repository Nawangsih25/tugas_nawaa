<?php
$id = $_GET['id'];
$nama = $_GET['nama'];
$asal = $_GET['asal'];

$database = new PDO("mysql:host=localhost;dbname=ppdb",'root','');
$query =$database->query("insert into siswa values('$id','$nama','$asal');");

if($query){
    header("Location:select.php");
}