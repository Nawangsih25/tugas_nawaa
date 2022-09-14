<?php
    class siswa{
    public string $host ;
    public string $user ;
    public string $password ;
    public string $nama_db;
  

    function getkoneksi(){
        $this->host= "localhost";
        $this->user= "root";
        $this->password= "";
        $this->nama_db= "sekolah";

        return $koneksi  = new PDO("mysql:host=$this->host;$this->nama_db","$this->user","$this->password");
        // return $koneksi = new PDO("mysql:host=$this->host,$this->nama_db,$this->user,$this->password");
    }
}


    $siswa1 = new siswa();
    $siswa1->getkoneksi();
    echo $siswa1->host;
    echo "<br>";
    echo $siswa1->user;
    echo "<br>";
    echo $siswa1->password;
    echo $siswa1->nama_db;
    // echo $siswa1->getkoneksi();
   

?>
