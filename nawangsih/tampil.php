
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>  

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 </head>
 <ul><a href="form.php">kembali</a></ul>
<body><br>

<table border="1" cellpadding="10" cellspacing="0" class="table-success">
<tr>
    <th>nis</th>
    <th>Nama </th>
    <th>kelas</th>
    <th>update</th>
    <th>delete</th>
</tr>
</body>
</html>
<?php
    include 'session.php'; 
    $query = $koneksi->query("SELECT * from siswa");
?>
<?php


while ($data = $query->fetch() ) :?>   
    <tr  style="text-align:center;" >
    <td><?= $data['nis']?></td>
    <td><?= $data['nama']?></td>
    <td><?= $data['kelas']?></td>

  
  
    <td><a href="formupdate.php?nis=<?=$data['nis']; ?>" class="table table-success table-striped">Update</a></td>
    <td><a href="delete.php?nis=<?=$data['nis']; ?>" class="table-danger">Hapus</a></td>
    </tr>

 
      
<?php endwhile ?>
