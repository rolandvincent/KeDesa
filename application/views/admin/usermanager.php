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
                <li class="breadcrumb-item active">Daftar Staff</li>
            </ol>

            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#adduser">Tambah Staff</button>
            <table id="userlist">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>

                </tbody>
            </table>
            <script>
                var dataTable = null;

                $(document).ready(function() {
                    getUsers();
                });

                function getUsers() {
                    $.ajax({
                        url: "<?= base_url('admin/userAction'); ?>",
                        type: 'post',
                        data: {
                            action: 2,
                        },
                        success: function(data) {
                            var userx = jQuery.parseJSON(data);

                            $('#userlist > tbody').html("");
                            var index = 1;
                            userx.forEach(element => {
                                var row = document.createElement('tr');
                                var th = document.createElement('th');
                                th.innerHTML = index;
                                row.append(th);
                                var elem = ['id', 'nama', 'email']
                                for (var o in elem) {
                                    var td = document.createElement('td');
                                    td.innerHTML = element[elem[o]] == null ? "&lt;Not set&gt;" : element[elem[o]];
                                    row.append(td);
                                }

                                var tdaction = document.createElement('td');
                                tdaction.innerHTML = `<button class="btn btn-sm btn-secondary mx-1" data-edit data-id="${element['id']}">Edit</button><button class="btn btn-sm btn-danger" data-remove data-id="${element['id']}" >&times;</button>`;

                                row.append(tdaction);
                                $('#userlist > tbody').append(row);
                                index++;
                            });

                            const userlist = document.getElementById('userlist');
                            if (userlist) {
                                dataTable = new simpleDatatables.DataTable(userlist);
                            }

                            $('button[data-remove]').on('click', function() {
                                const id = $(this).data('id');

                                $.ajax({
                                    url: "<?= base_url('admin/userAction'); ?>",
                                    type: 'post',
                                    data: {
                                        action: 1,
                                        id: id,
                                    },
                                    success: function(data) {
                                        window.location = "<?= base_url('/admin/usermanagement'); ?>";
                                    }
                                })
                            });

                            $('button[data-edit]').on('click', function() {
                                const id = $(this).data('id');

                                userx.forEach(element => {
                                    if (element['id'] == id) {
                                        $('#id-edit').val(id);
                                        $('#name2').val(element['nama']);
                                        $('#email2').val(element['email']);
                                        $('#userEdit').modal('toggle');
                                        return;
                                    }
                                });
                            });
                        }
                    })
                }
            </script>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="adduserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adduserLabel">Tambah Staff</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="nama" aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="sumbit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="userEdit" tabindex="-1" aria-labelledby="userEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userEditLabel">Edit Staff</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <input type="number" id="id-edit" name="id" hidden>
                        <div class="mb-3">
                            <label for="name2" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name2" name="nama" aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="email2" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email2" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password2">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="sumbit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>