<?php
$id =$_GET['id'];
$nama =$_GET['nama'];
$asal =$_GET['asal'];

$database = new PDO ('mysql:host=localhost;dbname=ppdb","root",""');
$query = $database->query("update calon_siswa set nama='Aan nawangsih' where id=1");

?>