<?php
$id=$_GET['id'];
$nama=$_GET['nama'];

$database = new PDO("mysql:host=localhost;dbname=latihan",'root','');
$query =$database->query("insert into kelasrpl values('$id','$nama')");

if($query){
    header("Location:index.php");
}