<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= flashdata('message'); ?>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Daftar Masukan</li>
            </ol>
            <table id="listaspirasi">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                        <th>Komentar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                        <th>Komentar</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($aspirasi as $l) :
                    ?>
                        <tr>
                            <th><?= $i++; ?></th>
                            <td><?= $l['nama']; ?></td>
                            <td><?= $l['nik']; ?></td>
                            <td><?= $l['isi']; ?></td>
                            <td><?= date('d F Y', $l['tanggal']); ?></td>
                            <td><?= $l['komentar']; ?></td>
                            <td>
                                <li class="navbar dropdown" style="position: absolute; margin-top: -7px">
                                    <a class="dropdown-toggle" id="options" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="options">
                                        <li><button class="dropdown-item" data-comment data-id="<?= $l['id']; ?>">Komentari</button></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><button class="dropdown-item" data-remove data-id="<?= $l['id']; ?>">Hapus</button></li>
                                    </ul>
                                </li>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script>
            $(window).ready(() => {
                const listaspirasi = document.getElementById('listaspirasi');
                if (listaspirasi) {
                    dataTable = new simpleDatatables.DataTable(listaspirasi);
                }

                $('button[data-remove]').on('click', function() {
                    const id = $(this).data('id');

                    $('#iditem').html(id);
                    $('#yes').attr('onclick', 'remove(' + id + ')');

                    $('#deleteAspirasi').modal('toggle');
                });


                $('button[data-comment]').on('click', function() {
                    const id = $(this).data('id');
                    $.ajax({
                        url: "<?= base_url('/staff/aspirasi'); ?>",
                        type: 'post',
                        data: {
                            action: 3,
                            id: id,
                        },
                        success: function(data) {
                            $('#commentid').val(id);
                            $('#comment').val(data);
                            $('#ok').attr('onclick', 'comment(' + id + ')');

                            $('#commentModal').modal('toggle');
                        }
                    })
                });
            });


            function remove(id) {
                if (id == null) return;
                $.ajax({
                    url: "<?= base_url('/staff/aspirasi'); ?>",
                    type: 'post',
                    data: {
                        action: 1,
                        id: id,
                    },
                    success: function() {
                        document.location.href = "<?= base_url('/staff/aspirasi') ?>";
                    }
                })
            }

            function comment(id) {
                if (id == null) return;
                $.ajax({
                    url: "<?= base_url('/staff/aspirasi'); ?>",
                    type: 'post',
                    data: {
                        action: 2,
                        id: id,
                        comment: $('#comment').val()
                    },
                    success: function() {
                        document.location.href = "<?= base_url('/staff/aspirasi') ?>";
                    }
                })
            }
        </script>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="deleteAspirasi" tabindex="-1" aria-labelledby="deleteAspirasiLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAspirasiLabel">Hapus Aspirasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus aspirasi ini?<br>
                    ID : <span id="iditem"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" id="yes" class="btn btn-primary" onclick="remove(null)">Ya</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="commentModalLabel">Ubah komentar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="number" id="commentid" hidden>
                        <label for="comment" class="form-label">Komentar</label>
                        <textarea class="form-control" id="comment" placeholder="Komen Di sini!" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="ok" class="btn btn-primary" onclick="comment(null)">OK</button>
                </div>
            </div>
        </div>
    </div>