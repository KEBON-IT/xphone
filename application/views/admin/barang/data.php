    <!-- DOM positioning -->
    <div class="card">
      <div class="card-header header-elements-inline">
        <h5 class="card-title"><b>Data Barang</b></h5>
        <div class="header-elements">
          <div class="list-icons">
            <a class="list-icons-item" data-action="collapse"></a>
            <a class="list-icons-item" data-action="reload"></a>
            <a class="list-icons-item" data-action="remove"></a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <a href="<?= base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/tambah'); ?>" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round"><b><i class="icon-cabinet"></i></b> Tambah Data Barang</a>
      </div>
      <table class="table datatable-dom-position ">
        <thead>
          <tr>
            <th>MERK</th>
            <th>NAMA</th>
            <th>HARGA</th>
            <th>IMEI</th>
            <th>STOK</th>
            <th>GAMBAR UTAMA</th>
            <th class="text-center">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($barang as $b) :
          ?>
            <tr>
              <td><?= $b['nama_merk']; ?></td>
              <td><?= $b['nama_barang']; ?></td>
              <td><?= rupiah($b['harga_barang']); ?></td>
              <td><?= $b['imei']; ?></td>
              <td><?= $b['stok']; ?></td>
              <td><a href="<?= base_url(); ?>assets_2/images/<?= $b['gambar_ut']; ?>" data-popup="lightbox">
                  <img src="<?= base_url(); ?>assets_2/images/<?= $b['gambar_ut']; ?>" alt="" class="img-preview rounded">
                </a></td>
              <td class="text-center">
                <a href="<?= base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/edit/' . $b['id_barang']); ?>" class="btn bg-primary-400 btn-labeled btn-labeled-left rounded-round btn-sm"><b><i class="icon-quill4"></i></b>Edit</a>&nbsp;<button type="button" onclick="hapus('<?= $b['id_barang'] ?>')" class="btn bg-danger-400 btn-labeled btn-sm btn-labeled-left rounded-round"><b><i class="icon-cancel-circle2"></i></b>Hapus</button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
    <!-- /DOM positioned -->
    <script type="text/javascript">
      function hapus(kd_barang) {
        swalInit({
          title: 'Apakah Data Akan Dihapus?',
          text: "Data akan dihapus",
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          confirmButtonClass: 'btn btn-success',
          cancelButtonClass: 'btn btn-danger',
          buttonsStyling: false
        }).then(function(result) {
          if (result.value) {
            $.ajax({
              url: "<?= base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/hapus/') ?>" + kd_barang,
              type: "POST",
              data: {
                kd_barang: kd_barang
              },
              success: function() {
                swalInit(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                );
                location.reload();
                // $('#zero-config').fadeTo("fast",0.1, function(){
                //     $(this).remove();
                //     location.reload();
                // })
              },
              error: function() {
                swalInit(
                  'Cancelled',
                  'Your imaginary file is safe :)',
                  'error'
                );
              }
            });

          } else if (result.dismiss === swal.DismissReason.cancel) {
            swalInit(
              'Cancelled',
              'Your imaginary file is safe :)',
              'error'
            );
          }
        });
      }
    </script>