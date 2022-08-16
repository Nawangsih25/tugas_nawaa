<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>

<a href="prosesdelete.php" class="btn btn-primary">tambah</a>


<?php
$database = new PDO("mysql:host=localhost;dbname=Rpl",'root','');
$query = $database->query("select * from siswa ");

while($data=$query->fetch()): ?>

<p>

    <a href="prosesupdate.php?id=<? =$data['nama'];?>"
    style="color:balck;background:white;padding:2px;border-radius:3px">
    <?= $data['nama'] ?>
    </a>

    <a href="prosesdelete.php?id=<?= $data['id']; ?>"
class="btn btn-danger">hapus</a>
</p>

<?php endwhile ?>