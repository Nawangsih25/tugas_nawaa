<?php
$id=$_GET['id'];

$database = new PDO("mysql:hoat=localhost;dbname=Rpl",'root','');
$query =$database->query("DELETE FROM siswa WHERE id='$id'");

if(query){
    header("Location:index.php");
}