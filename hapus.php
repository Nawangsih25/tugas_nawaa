<?php
$id = $_GET['id'];

$database = new PDO("mysql:host=localhost;dbname=ppdb",'root','');
$query =$database->query("delete from calon_siswa where id='$id'");

if($query){
    header("Location:select.php");
}