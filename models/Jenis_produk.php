<?php
class jenis_produk{

    public $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataJenis_produk(){
        $sql = "SELECT * FROM jenis_produk";

        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }


}
?>