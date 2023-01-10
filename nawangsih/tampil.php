
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
<!-- </head>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="Halamanutama.php">Halaman Utama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hapussession.php">log Out</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="datakamaradmin.php">kembali</a>
      </li>
    </ul>
  </div> -->
  <!-- <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div> -->
<body><br>
<!-- <div class="logo"><a href=''><h3>Data siswa</h3></a></div>
<div>
  Urut Berdasarkan
  <form action="">
    <select name="urutkan" id="">
        <option value="namalengkap">Nama lengkap</option>
        <option value="checkin">check in</option>
    </select>
    <button type="submit">Urutkan</button>
    </form><br>
    <div class='container-sm'><form class="">
      <input type="text" name="search">
      <button>cari</button>
    </form></div>
    <br><br>
</div> -->
<table border="1" cellpadding="10" cellspacing="0" class="table-success">
<tr>
    <th>id</th>
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

    // if (isset($_GET['search'])){
    //   $search = $_GET['search'];
    //   // echo $search;
    //   $query = $koneksi->query("SELECT * from siswa where nama like '%$search%'");
    // }?>
<?php
// session_start();
// if(!isset($_SESSION["namalengkap"])){
//     header("Location:login.php");
// }

// $koneksi = new PDO("mysql:host=localhost;dbname=hoteldeluna",'root','');
// // $query = $koneksi->query('select * from pesanan');
// if (isset($_GET['urutkan'])){
//     $urut = $_GET['urutkan'];
//     $query = $koneksi->query("select * from pesanan order by $urut ASC");
// }

while ($data = $query->fetch() ) :?>   
    <tr  style="text-align:center;" >
    <td><?= $data['id']?></td>
    <td><?= $data['nama']?></td>
    <td><?= $data['kelas']?></td>

  
  
    <td><a href="formupdate.php?id=<?=$data['id']; ?>" class="table table-success table-striped">Update</a></td>
    <td><a href="delete.php?id=<?=$data['id']; ?>" class="table-danger">Hapus</a></td>
    </tr>
      
<?php endwhile ?>
<!-- </table><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<br><br>
<body><div class="card">
  <div class="card-body">
    <h5 class="card-title"> <div class="hotel">
            &copy; 2022. <b>HotelDeluna.com</b>
        </div></h5>
  </div>
</div>
    
</body>
</html> -->
