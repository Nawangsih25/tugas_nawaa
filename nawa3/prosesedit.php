<?php
$id=$_GET['id'];
$database= new PDO("mysql:host=localhost;dbname=latihan2",'root','');
$query=$database->query("select * from siswa where id='$id'");
$data=$query->fetch();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="get">
        <input type="hidden" name="id" value="<?= $id ?>">
    <div>
        <label>nama</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>">
     </div>
     <input type="submit" value="simpan">   
    </form>
    
</body>
</html>