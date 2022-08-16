<?php
$id=$_GET['id'];
$nama=$_GET['nama'];

$database =new PDO ("mysql:host=localhost;dbname=Rpl",'root','');
$query =$database->query("insert into siswa values('','$nama')");

if(query){
    header("Location:index.php");
}