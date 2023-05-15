<?php
// buat object dari class jenis_produk dan produk
$obj_produk = new Produk();
$obj_pelanggan = new Pelanggan();
// panggil fungsi data produk dan jenis_produk yang ada di model
$data_pelanggan = $obj_pelanggan->dataPelanggan();
$data_produk = $obj_produk->dataProduk();
?>
<!-- Isi content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Pelanggan</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <form action="pelanggan_controller.php" method="post">
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                  <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
              <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label> 
                <div class="col-8">
                  <input id="jenis_kelamin" name="jenis_kelamin" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
              <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                <div class="col-8">
                  <input id="alamat" name="alamat" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
              <label for="no_telepon" class="col-4 col-form-label">No Telepon</label> 
                <div class="col-8">
                  <input id="no_telepon" name="no_telepon" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
              <label for="jumlah_beli" class="col-4 col-form-label">Jumlah Beli</label> 
                <div class="col-8">
                  <input id="jumlah_beli" name="jumlah_beli" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
    <label for="jenis_produk_id" class="col-4 col-form-label">Produk id</label> 
    <div class="col-8">
      <select id="produk_id" name="produk_id" class="custom-select">
        <option selected> Pilih Produk id </option>
        <?php
        foreach ($data_pelanggan as $jenis) {
          ?>
          <option value="<?= $jenis ['id'] ?>"> <?= $jenis ['produk'] ?></option>
          <?php
        }
        ?>
      </select>
    </div>
  </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /Isi content -->