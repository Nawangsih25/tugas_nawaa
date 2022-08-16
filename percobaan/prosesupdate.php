<?php
$id=$_GET['id'];
$nama=$_GET['nama'];

 $database = new PDO("mysql:host=localhost;dbname=Rpl",'root','');
 $query =$database->("update siswa set id='$id' where nama='$nama' ");

 if(query){
    header("Location:index.php");
}