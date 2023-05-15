<?php
$id = $_REQUEST['id'];
    $model = new Pelanggan();
    $pelanggan = $model->getPelanggan($id);
    ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Jenis Produk</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

                
                    <br>Nama : <?=$pelanggan['nama']?>
                    <br>Jenis Kelamin : <?=$pelanggan['jenis_kelamin']?>
                    <br>Alamat : <?=$pelanggan['alamat']?>
                    <br>No Telepon : <?=$pelanggan['no_telepon']?>
                    <br>Jumlah Beli : <?=$pelanggan['jumlah_beli']?>
                    <br>Produk : <?=$pelanggan['produk_id']?>
</div>