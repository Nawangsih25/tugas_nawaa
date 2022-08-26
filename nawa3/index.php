<?php
require "koneksi.php";
$latihan2 =new latihan2();
$database=$latihan2->getkoneksi();
$query =$database->query("select * from siswa");
while($data = $query->fetch()) :?>

<p>
    <a href="prosesedit.php?id=<?= $data['nama']?>"
    style="color:black;background:white;padding:2px;border-radius :3px">
    <?= $data['nama'] ?>
    </a>
    <a href="delete.php?id=<?= $data['id']?>"
    style="color:white;background:red;padding:2px;border-radius :3px">Hapus</a>
</p>

<?php endwhile?>