<?php
$database = new PDO("mysql:host=localhost;dbname=latihan",'root','');
$query =$database->query("select * from siswa");
while($data=$query->fetch()):?>

<p>
    <a href="update.php?id=<? =$data['nama'];?>"
        style="color:black;background:white;padding:2px;border-radius 3px">
        <?= $data['nama'] ?>

    </a>
    <a href="delete.php?id=<? =$data['id'];?>"
    style="color:white;background:red;padding:2px;border-radius 3px">Hapus</a>

</p>
<?php endwhile ?>