<?php
class Pelanggan{
    private $koneksi;
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataPelanggan(){
        $sql = "SELECT p.*, j.nama AS produk
        FROM pelanggan p 
        INNER JOIN produk j ON j.id = p.produk_id
        ORDER BY p.id DESC";
// SELECT t1.id
// FROM tabel1 t1
// INNER JOIN tabel2 t2 ON t1.id = t2.id
// INNER JOIN tabel3 t3 ON t2.id = t3.id;
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getPelanggan($id){
        $sql = "SELECT p.*, j.nama AS produk
        FROM pelanggan p 
        INNER JOIN produk j ON j.id = p.produk_id
        WHERE p.id = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO pelanggan (nama,jenis_kelamin,alamat,no_telepon,jumlah_beli,produk_id) VALUES (?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data){
        $sql = "UPDATE pelanggan SET nama=?,jenis_kelamin=?,alamat=?,no_telepon=?,jumlah_beli=?,produk_id=? WHERE id=?"; 
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($id){
        $sql = "DELETE FROM pelanggan WHERE id=?";
        $ps= $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}