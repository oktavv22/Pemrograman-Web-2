<?php
$obj_pelanggan = new Pelanggan();
$obj_produk = new Produk();

$data_pelanggan = $obj_pelanggan->dataPelanggan();
$data_produk = $obj_produk->dataProduk();

// proses edit data
// tangkap request idedit di url (setelah user mengklik button edit atau gambar pencil)
$idedit = $_REQUEST['idedit'];

// ternary operator
// kita akan mengecek id yang ingin di edit menggunakan logic if else atau ternary operator
// jika ada id yang ingin di edit maka akses function atau fungsi getProduk untuk menampilkan data
// atau untuk mengambil data yang sesuai dengan id yang ingin di edit, 
// lalu simpan data tersebut ke dalam sebuah variabel
// jika tidak ada id yang ingin di edit maka kembalikan data dalam bentuk array kosong
$pelanggan = !empty($idedit) ? $obj_pelanggan->getPelanggan($idedit) : [];
?>

<!-- Main content -->   
<section class="content">
<div class="container">
<form action="pelanggan_controller.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" value="<?php echo $pelanggan ['nama'] ?>" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <input id="jenis_kelamin" name="jenis_kelamin" value="<?= $pelanggan ['jenis_kelamin'] ?>" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" value="<?= $pelanggan ['alamat'] ?>" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="no_telepon" class="col-4 col-form-label">No Telepon</label> 
    <div class="col-8">
      <input id="no_telepon" name="no_telepon" value="<?= $pelanggan ['no_telepon'] ?>" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_beli" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah_beli" value="<?= $pelanggan ['jumlah_beli'] ?>" name="jumlah_beli" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
      <select id="produk_id" name="produk_id" class="custom-select">
        <option selected> Pilih produk </option>
        <?php
        foreach ($data_produk as $jenis) {
          ?>
          <option value="<?= $jenis ['id'] ?>"><?= $jenis ['nama'] ?></option>
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