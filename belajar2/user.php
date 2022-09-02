<html lang="en">
<head>
   <style>
    h1{
        color :purple;
    }
   </style>
    <title>Semangat belajar nawa</title>
</head>
<body>
    
</body>
</html>
<?php
session_start();
 if(isset($_SESSION['username'])){ // jika session username ada
    echo "<h1>Ini Halaman User kami </h1>";
    echo $_SESSION["username"];
 }