<?php
 $database = new PDO("mysql:host=localhost;
 dbname=tokokue","root","");
 $query = $database->query('delete from tokokue_nawa where nama="nawa"');


 while ($data = $query->fetch()) {
    echo "<p>".$data["nama"]. "</P>";
 }