<?php
    $dbh = new PDO('mysql:host=localhost;dbname=ppdb','root','');

    $query = $dbh->query("select * from siswa");
    
    
    while ($data = $query->fetch() ) :?>
        <p>
            <a href="edit.php?id=<?= $data['id']; ?>">
                <?= $data['nama'] ?>
            </a>
            
            <a href="hapus.php?id=<?= $data['id']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
                Hapus
            </a>
        </p>
    <?php endwhile ?>

