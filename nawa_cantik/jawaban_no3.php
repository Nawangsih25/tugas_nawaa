<?php

class sistem_minimarket {
  
   private $namabarang;
   private $hargabarang;
   private $totalbelanja;
  
   public function __construct($namabarang, $hargabarang,$totalbelanja) {
     $this->namabarang = $namabarang;
     $this->hargabarang = $hargabarang;
     $this->totalbelanja = $totalbelanja;
   }
  
   public function datapengeluaran() {
     return " <h1>SELAMAT BERBELANJA</h1>belanja $this->namabarang <br> harga $this->hargabarang <br> total $this->totalbelanja";
   }
}

$sistem_minimarket_1= new sistem_minimarket("shampo", "21000","21000");
  
echo $sistem_minimarket_1->datapengeluaran();
echo "<br />";
$sistem_minimarket_1= new sistem_minimarket("sikat gigi", "15000","15000");
  
echo $sistem_minimarket_1->datapengeluaran();
?>