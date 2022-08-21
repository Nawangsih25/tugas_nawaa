<?php
$id=$_GET['id'];

$database = new PDO("mysql:host=localhost;dbname=latihan",'root','');
$query =$database->query("DELETE FROM kelasrpl WHERE='$id'");

if($query){
    header("Location:index.php");
}