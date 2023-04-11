<?php
include_once 'dbkoneksi.php';
include_once 'models/Produk.php';
// step 1 tangkap request form
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_harga = $_POST['harga_beli'];
$_stok= $_POST['stok'];
$_minstok = $_POST['min_stok'];
$_jenis = $_POST['jenis_produk_id'];

//step 2 simpan data kedalam array
$data = [
    $_kode,
    $_nama, // 1
    $_harga,// 2
    $_jual = 1.2 * $_harga, 
    $_stok,// 3
    $_minstok,// 4
    $_jenis,// 5
];
//step 3 eksekusi data dengan menggunakan mekanisme PDO
$model = new Produk();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;

    case 'ubah':
        // tangkap hidden field idx untuk mencari id
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;

    case 'hapus':
        unset($data);
        $model->hapus($_POST['idx']);
        break;

    default:
        header('Location:index.php?hal=produk');
        break;
}
//step 4 arahkan ke halaman produk kembali jika prosesnya sudah selesai
header('Location:index.php?hal=produk');
?>