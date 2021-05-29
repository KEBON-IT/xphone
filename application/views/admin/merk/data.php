    <!-- DOM positioning -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title"><b>Data Merk</b></h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <button type="button" onclick="tambah()" data-toggle="modal" data-target="#modal_form_vertical" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round"><b><i class="icon-reading"></i></b> Tambah Data Merk</button>
        </div>
        <table class="table datatable-dom-position">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA MERK</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody id="isi">
                <?php
                $no = 1;
                foreach ($data->result_array() as $k) :

                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $k['nama_merk']; ?></td>
                        <td class="text-center">
                            <button type="button" data-toggle="modal" data-target="#modal_form_vertical" class="btn bg-primary-400 btn-labeled btn-labeled-left rounded-round" onclick="edit('<?= $k['id_merk'] ?>')"><b><i class="icon-quill4"></i></b>Edit</button>&nbsp;<button type="button" onclick="hapus('<?= $k['id_merk'] ?>')" class="btn bg-danger-400 btn-labeled btn-labeled-left rounded-round"><b><i class="icon-cancel-circle2"></i></b>Hapus</button>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
    <!-- /DOM positioned -->
    <!-- Vertical form modal -->
    <div id="modal_form_vertical" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Data Merk</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form method="POST" id="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Nama Merk</label>
                                    <input type="text" placeholder="Nama Merk" name="nama_merk" id="nama_merk" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-primary">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /vertical form modal -->
    <script type="text/javascript">
        var idne;

        function tambah() {
            $('.modal-title').text("Tambah Data Pengguna");
            $('#form')[0].reset();
            $('.select').val('').trigger('change');
            $('#form').attr('action', '<?= base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/tambah') ?>');
        }

        function edit(id_merk) {
            $('.modal-title').text("Edit Data Pengguna");
            $('#form')[0].reset();
            $('#form').attr('action', '<?= base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/update/') ?>' + id_merk);
            $.ajax({
                url: "<?= base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/edit') ?>/" + id_merk,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#nama_merk').val(data.nama_merk);
                    idne = data.id_merk;
                },
                error: function(a, v, b) {
                    alert("tidak tampil");
                }

            });
        }

        function hapus(id_merk) {
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
                        url: "<?= base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/hapus/') ?>" + id_merk,
                        type: "POST",
                        data: {
                            id_merk: id_merk
                        },
                        success: function() {
                            swalInit(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            );
                            location.reload();
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