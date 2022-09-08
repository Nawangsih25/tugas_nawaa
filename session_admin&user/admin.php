<!DOCTYPE html>
<html lang="en">
<head>
<style>
    h1{
        color :purple;
    }
    a{
        color :pink;
        background : black;
    }
   </style>
    <title>Semangat belajar nawa</title>
</head>
<body>
<h1>Berada di Halaman Admin </h1>
<br>
</body>
</body>
</html>

<?php
 
 session_start();
 if(!isset($_SESSION["username"])){
    header("Location:Login.php");
 }

 echo "<a href='beranda.php'>beranda</a>";