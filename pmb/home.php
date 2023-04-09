<!-- panggil file navbar -->
<!-- panggil file sidebar -->
<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- /tutup file navbar.php -->

<!-- isi content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- main content -->
<section class="content">
  <h2>Tugas</h2>
    <p> Ini adalah Dashboard, yang berisi Kumpulan Tugas-Tugas Praktikum</p>
</section>
  <!-- /.content -->
</div>
<!-- /isi content -->

<!-- panggil file footer.php -->
<?php
include_once('footer.php');
?>
<!-- /tutup file footer.php -->