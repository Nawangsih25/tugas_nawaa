
<?php
     $id= $_POST['id'];
     $nama = $_POST['nama'];
     $kelas = $_POST['kelas'];
    
    $database = new PDO("mysql:host=localhost;dbname=tbdatasiswa",'root','');
    $query = $database->query("insert into siswa values('$id','$nama','$kelas')");
    
    if($query){
        header("Location:tampil.php");
        }