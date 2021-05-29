<div class="col-md-12">
	<!-- Advanced legend -->
	<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Form Data Barang</h5>
			<div class="header-elements">
				<div class="list-icons">
					<a class="list-icons-item" data-action="collapse"></a>
					<a class="list-icons-item" data-action="reload"></a>
					<a class="list-icons-item" data-action="remove"></a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<form action="<?= isset($data) ? base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/update') : base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/tambah') ?>" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend class="font-weight-semibold text-uppercase font-size-sm">
						<i class="icon-file-text2 mr-2"></i>
						Masukkan Data Barang
						<a href="#" class="float-right text-default" data-toggle="collapse" data-target="#demo1">
							<i class="icon-circle-down2"></i>
						</a>
					</legend>
					<input type="hidden" name="id_barang" <?= isset($data) ? 'value="' . $data['id_barang'] . '"' : '' ?>>
					<div class="collapse show" id="demo1">
						<div class="form-group">
							<label>Merk Barang:</label>
							<select name="id_merk" id="id_merk" required class="form-control">
								<option value=""> -- Pilih salah satu --</option>
								<?php foreach ($merk->result_array() as $n => $k) : ?>
									<option value="<?= $k['id_merk'] ?>" <?php if (isset($data)) {
																				if ($data['id_merk'] == $k['id_merk']) {
																					echo 'selected';
																				}
																			} ?>><?= ++$n ?>. <?= $k['nama_merk'] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Nama Barang:</label>
							<input type="text" <?= isset($data) ? 'value="' . $data['nama_barang'] . '"' : '' ?> class="form-control" placeholder="Masukkan Nama Barang" name="nama_barang" required id="nama_barang">
						</div>

						<div class="form-group">
							<label>Harga Barang:</label>
							<input type="number" <?= isset($data) ? 'value="' . $data['harga_barang'] . '"' : '' ?> class="form-control" placeholder="Harga Barang" name="harga_barang" required id="harga_barang">
						</div>

						<div class="form-group">
							<label>Imei:</label>
							<input type="number" <?= isset($data) ? 'value="' . $data['imei'] . '"' : '' ?> class="form-control" placeholder="Imei" required id="imei" name="imei">
						</div>
						<div class="form-group">
							<label>Keterangan:</label>
							<textarea rows="5" cols="5" class="form-control" placeholder="Keterangan" required name="keterangan" id="keterangan"><?= isset($data) ? '' . $data['keterangan'] . '' : '' ?></textarea>
						</div>
						<div class="form-group">
							<label>Stok:</label>
							<input type="number" <?= isset($data) ? 'value="' . $data['stok'] . '"' : '' ?> class="form-control" placeholder="Stok" required id="stok" name="stok">
						</div>
						<div class="form-group">
							<label>Foto Barang:</label>
							<input type="file" class="form-input-styled" name="file">
							<!-- <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span> -->
						</div>
					</div>
				</fieldset>
				<div class="text-right">
					<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
				</div>
			</form>
		</div>
	</div>
	<!-- /advanced legend -->

</div>