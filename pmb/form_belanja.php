<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active">Week-2</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="content-wrapper">
  <h2 class="text-center">Belanja Online</h2>
  <hr>
<form method="POST">
  <div class="form-group row" style="margin-left:30px;">
    <label for="customer" class="col-2 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row" style="margin-left:30px;">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS" required="required"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI" required="required"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row" style="margin-left:30px;">
    <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Masukkan Jumlah" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row mt-5" style="margin-left:30px;">
    <div class="offset-4 col-5">
      <button name="submit" type="submit" class="btn btn-primary col-md-3">Simpan</button>
    </div>
  </div>
</form>
<hr>
        <div class="col-md-4" style="margin-left:30px;">
			<div class="card">
				<h7 class="card-header bg-primary text-light text-center">
					Daftar Harga
				</h7>
				<div class="card-body">
					<p class="card-text">
						TV : Rp. 4.200.000
					</p>
					<p class="card-text">
						Kulkas : Rp. 3.100.000
					</p>
					<p class="card-text">
						Mesin Cuci : Rp. 3.800.000
					</p>
				</div>
				<h8 class="card-header bg-primary text-light text-center">
					Harga Dapat Berubah Setiap Saat
        </h8>
			</div>
		</div>
    <hr>
<?php
error_reporting(E_ALL ^ E_WARNING||E_NOTICE);
$nama = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
    
if($produk == "TV") {
    $jumlah_harga = 4200000 * $jumlah;
} elseif($produk == "KULKAS") {
    $jumlah_harga = 3100000 * $jumlah;
} elseif($produk == "MESIN CUCI") {
    $jumlah_harga = 3800000 * $jumlah;
}else{
        
}
?>
  <div style="margin-left:20%;">
<?php
echo "<h4>Hasil : </h4>";
echo "<br>Customer : $nama ";
echo "<br/>Produk : $produk";
echo "<br/>Jumlah : $jumlah";
echo "<br/>Total Harga : " . number_format($jumlah_harga);
?>
   </div>
</div>
<?php
include_once('footer.php');
?>
</body>
</html>