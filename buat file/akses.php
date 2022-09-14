<?php
class siswa{
    public $nama;
    // public $kelas;
    // public $umur ; 


public function tampilkan_nama(){
    echo "<br>";
    return "";
}
}

$siswa1 = new siswa();

$siswa1->nama="Aan nawangsih";
echo $siswa1->nama;

echo $siswa1->tampilkan_nama();
?>