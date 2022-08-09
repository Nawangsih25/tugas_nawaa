<?php
$nis =$_GET['nis'];
$nama = $_GET['nama'];
$kelas = $_GET['kelas'];


$database = new PDO ('mysql:host=localhost;dbname=dtnawa', 'root','');
$query = $database->query("insert into chybynawa values($nis,'$nama','$kelas')");
// $query = $database->query("update chybynawa set nama='nala' where nis='5555'");
//  $query = $database->query("delete from chybynawa where nis='2'"); 