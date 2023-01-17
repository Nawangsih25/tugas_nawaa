<?php

$nis = $_GET['nis'];
$database =new PDO("mysql:host=localhost;dbname=tbdatasiswa",'root','');
$query = $database->query("select * from siswa where nis=$nis ");
$data = $query->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATASISWA</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
</head>
<body>
<div class="container">  
<h1>Update Data</h1>
    <form action="update.php?nis=<?=$data['nis']?>" method="post">
        <div>
    <input type="hidden"  id="nis" name ="nis" value="<?= $data['nis'] ?>" required></div>
  
        <div>
            <label>Nama :</label>
            <input value="<?= $data['nama'] ?>" type="text" id="nama" name="nama" required >
        <div><br>
        <div>
            <label>kelas :</label>
            <input value="<?= $data['kelas'] ?>" type="text"  name="kelas" required >
    </div>
        <button type="submit">update</button> 
    </form>
    </body>
</html>
