<?php
class datasiswa {
    
  
   public $nama = "Nawaa" ;
   public $kelas = " 12 RPL" ;
   
   public function __construct(){
     echo "menampilkan nama ";
   }
  
   public function tampil_nama(){
     return "tampilkan nama : $this->nama dari kelas $this->kelas";
  
   }
   public function __destruct(){
     echo "menampilkan";
   }
}
  
// buat objek dari class laptop (instansiasi)
$data_nama= new datasiswa();
  
echo "<br />";
echo $data_nama->tampil_nama();
echo "<br />";
  
// hapus objek $laptop_andi
unset($data_nama);
  
echo "<br />";
echo "data siswa terdeteksi";
?>