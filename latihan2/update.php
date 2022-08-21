<?php
$id=$_GET['id'];
$nama=$_GET['nama'];

$database = new PDO("mysql:host=localhost;dbname=latihan",'root','');
$query =$database->query("update set kelasrpl id='$id' where nama='$nama'");

if($query){
    header("Location:index.php");
}