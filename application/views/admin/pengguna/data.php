    <!-- DOM positioning -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title"><b>Data Pengguna</b></h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <button type="button" onclick="tambah()" data-toggle="modal" data-target="#modal_form_vertical" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round"><b><i class="icon-reading"></i></b> Tambah Data Pengguna</button>
        </div>
        <table class="table datatable-dom-position ">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA LENGKAP</th>
                    <th>USERNAME</th>
                    <th>ALAMAT</th>
                    <th>NO HP</th>
                    <th>AKSES</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody id="isi">
                <?php
                $no = 1;
                foreach ($data_pengguna->result_array() as $k) :

                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $k['nama_lengkap']; ?></td>
                        <td><?= $k['username']; ?></td>
                        <td><?= $k['alamat']; ?></td>
                        <td><?= $k['no_hp']; ?></td>
                        <td>
                            <span class="badge badge-primary">ADMIN</span>
                        </td>
                        <td class="text-center">
                            <button type="button" data-toggle="modal" data-target="#modal_form_vertical" class="btn bg-primary-400 btn-labeled btn-labeled-left rounded-round" onclick="edit('<?= $k['id_pengguna'] ?>')"><b><i class="icon-quill4"></i></b>Edit</button>&nbsp;<button type="button" onclick="hapus('<?= $k['id_pengguna'] ?>')" class="btn bg-danger-400 btn-labeled btn-labeled-left rounded-round"><b><i class="icon-cancel-circle2"></i></b>Hapus</button>
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
                    <h5 class="modal-title">Tambah Data Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form method="POST" id="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Nama Lengkap</label>
                                    <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" id="nama_lengkap" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label>Username</label>
                                    <input type="text" placeholder="Username" name="username" id="username" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Password</label>
                                    <input type="Password" name="password" placeholder="Password" id="password" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label>No Hp</label>
                                    <input type="number" name="no_hp" placeholder="No Hp" id="no_hp" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
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

        function edit(id_pengguna) {
            $('.modal-title').text("Edit Data Pengguna");
            $('#form')[0].reset();
            $('#form').attr('action', '<?= base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/update/') ?>' + id_pengguna);
            $.ajax({
                url: "<?= base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/edit') ?>/" + id_pengguna,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#username').val(data.username);
                    $('#password').val(data.password);
                    $('#nama_lengkap').val(data.nama_lengkap);
                    $('#no_hp').val(data.no_hp);
                    $('#alamat').text(data.alamat);
                    idne = data.id_pengguna;
                },
                error: function(a, v, b) {
                    alert("tidak tampil");
                }

            });
        }

        function hapus(id_pengguna) {
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
                        url: "<?= base_url($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/hapus/') ?>" + id_pengguna,
                        type: "POST",
                        data: {
                            id_pengguna: id_pengguna
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