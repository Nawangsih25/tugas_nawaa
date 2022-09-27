<?php
$id=$_GET['id'];

$koneksi = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
$query = $koneksi->query("select * from user where id='$id'");

$data=$query->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Update Data</h1>
    <form action="edit.php" method="post">
    <div>
            <label>Nis</label>
            <input type="text" name="nis" value='<?php echo $data['nis']?>'>
        </div>
        <br>
        <div>
            <label>Nama</label>
            <input type="text" name="nama" value='<?php echo $data['nama']?>'>
        </div>
        <br>
        <div>
            <label>Password</label>
            <input type="text" name="password" value='<?php echo $data['password'] ?>'>
        </div>
        <br>
        
        <div>
            <label>Kelas</label>
            <input type="text" name="kelas" value='<?php echo $data['kelas'] ?>'>
           
        </div>
        <div>
            <input type="hidden" name="id" value='<?php echo $data['id'] ?>'>
        </div>
        <input type="submit" value="simpan">
    </form>
    </body>
</html>

<?php

session_start();

// if(!isset($_SESSION["username"])){
//     header("Location:edit.php");
// }
?>