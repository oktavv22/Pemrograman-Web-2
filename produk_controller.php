<?php
include_once 'dbkoneksi.php';
include_once 'models/Produk.php';

$nama = $_POST['nama'];
$harga = $_POST['harga_jual'];
$stok = $_POST['stok'];
$jenis = $_POST['jenis_produk_id'];
$kode = $_POST['kode'];

$data = [
    $nama,
    $harga,
    $stok,
    $jenis,
    $kode
];
$model = new Produk();
$tombol = $_REQUEST['proses'];
switch($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;
    case 'hapus':
        unset($data);
        $model->hapus($_POST['idx']);
        break;
    default:
        header('Location:index.php?hal=home');
        break;
}
header('Location:index.php?hal=home');
?>