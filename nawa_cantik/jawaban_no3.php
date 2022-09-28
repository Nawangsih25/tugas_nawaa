<?php
// buat class laptop
class uangjajan {
  
   private $uangmasuk;
   private $uangkeluar;
  
   // constructor sebagai pembuat nilai awal
   public function __construct($uangkeluar, $uangmasuk) {
     $this->uangmasuk = $uangkeluar;
     $this->uangkeluar = $uangmasuk;
   }
  
   public function datapengeluaran() {
     return "pengeluaran  $this->uangkeluar <br> pemasukan $this->uangmasuk <br>";
   }
}
  
// buat objek dari class laptop (instansiasi)
$jajannawa= new uangjajan("100000", "20000");
  
echo $jajannawa->datapengeluaran();
echo "<br />";
  
$jajannawa= new uangjajan("50000", "15000");
  
echo $jajannawa->datapengeluaran();
?>