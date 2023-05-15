<?php
$obj_produk = new Produk();
$obj_jenis_produk = new Jenis_produk();

$data_produk = $obj_produk->dataProduk();
$data_jenis_produk = $obj_jenis_produk->dataJenisproduk();

// proses edit data
// tangkap request idedit di url (setelah user mengklik button edit atau gambar pencil)
$idedit = $_REQUEST['idedit'];

// ternary operator
// kita akan mengecek id yang ingin di edit menggunakan logic if else atau ternary operator
// jika ada id yang ingin di edit maka akses function atau fungsi getProduk untuk menampilkan data
// atau untuk mengambil data yang sesuai dengan id yang ingin di edit, 
// lalu simpan data tersebut ke dalam sebuah variabel
// jika tidak ada id yang ingin di edit maka kembalikan data dalam bentuk array kosong
$produk = !empty($idedit) ? $obj_produk->getProduk($idedit) : [];
?>

<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Edit Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<section class="content">
<div class="container">
<form action="produk_controller.php" method="POST">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" value="<?php echo $produk ['kode'] ?>" name="kode" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?= $produk ['nama'] ?>" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Harga Jual</label> 
    <div class="col-8">
      <input id="harga_jual" name="harga_jual" value="<?= $produk ['harga_jual'] ?>" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="stok" name="stok" value="<?= $produk ['stok'] ?>" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
        <option selected> Pilih Jenis Produk </option>
        <?php
        foreach ($data_jenis_produk as $jenis) {
          ?>
          <option value="<?= $jenis ['id'] ?>"> <?= $jenis ['nama_jenis'] ?></option>
          <?php
        }
        ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="ubah" type="submit" class="btn btn-primary">Ubah</button>
      <input type="hidden" name="idx" value="<?= $idedit ?>">
    </div>
  </div>
</form>
</div>
</section>
<!-- /.content -->
</div>