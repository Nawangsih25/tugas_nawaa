<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1{
            color:purple;
        }
        a{
            color:red;
        }
    </style>
    <title>Semangat Belajar nawa</title>
</head>
<body>
       
</body>
</html>
<?php

session_start();
if(!isset($_SESSION["username"])) { // jika ada session username
   header("Location:form.php");
}

?>
<h1>Halaman Beranda</h1>
<a href="user.php">Beralih ke halaman User</a>
<br>
<a href="hapus_session.php"> Klik Log out</a>