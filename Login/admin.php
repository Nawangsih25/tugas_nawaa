
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
    
</body>
</html>
<?php
session_start();
 if(isset($_SESSION['username'])){ // jika session username ada
    echo "<h1>Ini halaman admin kami </h1>";
    echo $_SESSION["username"];

 }
 
if(!isset($_SESSION["username"])){
    header("Location:form.php");
}
echo "<br>";
echo "<a href='beranda.php'>kembali</a>"; 
echo "<br>";
echo "<a href='hapus_session.php'>Klik Log out</a>";
?>

