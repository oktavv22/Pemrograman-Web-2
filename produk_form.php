<?php
// buat object dari class jenis_produk dan produk
new Jenis_produk();
$obj_jenis_produk = new Jenis_produk();
$obj_produk = new produk();
;
// panggil fungsi data produk dsn jenis _ yang ada di model
$data_produk = $obj_produk->dataProduk();
$data_jenis_produk = $obj_jenis_produk->dataJenis_produk();
?>
<!-- Main content -->
    <!-- main content -->
<section class="content">
  <div class="container">
  <!-- /.content -->
  <form action="produk_controller.php" method="POST">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <input id="harga_beli" name="harga_beli" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="stok" name="stok" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Min Stok</label> 
    <div class="col-8">
      <input id="min_stok" name="min_stok" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
        <option selected>Select Jenis Produk</option>
        <?php
        foreach ($data_jenis_produk as $jenis) {
            ?>
            <option value="<?= $jenis['id']?> "><?= $jenis['nama'] ?></option>
            <?php
        }
        ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="simpan"  type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</div>
</section>
