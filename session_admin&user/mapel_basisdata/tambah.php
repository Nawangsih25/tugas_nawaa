<?php
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $kelas = $_POST['kelas'];

    $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
    $query = $database->query("insert into user values(null,'$nis','$nama','$password','$kelas')");

    if($query){
        header("Location:beranda.php");
    }