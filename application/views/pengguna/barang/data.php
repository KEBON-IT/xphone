<div class="row">
    <?php foreach ($barang->result_array() as $n => $k) : ?>
        <div class="col-6">
            <div class="card">
                <img src="<?= base_url(); ?>assets_2/images/<?= $k['gambar_ut'] ?>" class="img-fluid" alt="">
                <div class="card-body">
                    <div class="media-body text-center">
                        <h4 class="mb-0 text-muted"><?= $k['nama_barang'] ?></h4>
                        <div class="text-muted mb-0" style="font-size: 10px;"><?= $k['nama_merk'] ?></div>
                        <h6 class="mb-0 font-weight-semibold"><?= rupiah($k['harga_barang']) ?></h6>
                        <button type="button" class="btn btn-block btn-sm bg-primary"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- /list -->