
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INPUT DATA</h1>
    <form action="tambah.php" method="post">
    <div>
            <label>nis</label>
            <input type="text" name="nis">
        </div>
        <br>
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <br>
        <div>
            <label>Password</label>
            <input type="text" name="password">
        </div>
        <br>
        
        <div>
            <label>Kelas</label>
            <input type="text" name="kelas">
           
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>

<?php

session_start();

if(!isset($_SESSION["nama"])){
    header("Location:login.php");
}
?>