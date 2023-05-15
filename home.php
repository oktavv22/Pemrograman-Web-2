<?php
$model = new Produk();
$data_produk = $model->dataProduk();
?>
<section class="py-5">
<div class="col-10 p-5" id="main">
            <div class="row">
                <?php foreach ($data_produk as $row) {
            ?>
                <div class="col-md-3">
                    <div class="card shadow-sm border-light mb-3">
                        <a href="#" class="position-relative">
                            <img src="https://i.pinimg.com/originals/40/54/b2/4054b22c83519895ecf09df6f51f55e1.jpg" class="card-img-top" alt="image"> </a>
                        <div class="card-body">
                            <div class="d-flex align-content-center align-items-center justify-content-between">
                                <span class="font-weight-small"><?= $row ['nama'] ?></span>
                                <div class="d-flex align-items-center align-content-center">
                                <span class="rate"><?= $row ['kode'] ?></span>
                                </div>
                            </div>
                            <div class="post-meta">
                                <span class="small lh-120">
                                    <?= 'Rp'. number_format($row['harga_jual'], 0, ',', '.'); ?>
                                </span>
                            </div>
                            <div class="kelola-button pt-3 pb-3 d-flex justify-content-center">
                            <form action="produk_controller.php" method="POST">
                            <a href="index.php?hal=produk_detail&id=<?= $row['id']?>">
                            <button type="button" class="btn btn-info btn-sm" title="Detail Produk">
                            <i class="fa-regular fa-eye fa-beat"></i>
                            </button>
                          </a>
                          <a href="index.php?hal=produk_edit&idedit=<?= $row['id']?>">
                            <button type="button" class="btn btn-warning btn-sm" title="Edit Produk">
                            <i class="fa-regular fa-pen-to-square fa-flip"></i>
                            </button>
                          </a>
                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus"
                            onclick="return confirm('hapus data produk yang bernama <?= $row['nama']?>')" title="Hapus Produk">
                            <i class="fa-regular fa-trash-can fa-shake"></i>
                            </button>       
                            <input type="hidden" name="idx" value="<?= $row['id']?>">              
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup foreach -->
                <?php
                } ?>
            </div>
        </div>
        </section>