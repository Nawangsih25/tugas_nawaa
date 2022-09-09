<?php

    $username = $_POST['username'];
    $id = $_POST['id'];

    $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
    $query = $database->query("update user set username='$username' where password='$id'");

    
    if($query){
        header("Location:beranda.php");
    }