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
                <li class="breadcrumb-item active">Daftar Langganan</li>
            </ol>
            <table id="listlangganan">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($langganan as $l) :
                    ?>
                        <tr>
                            <th><?= $i++; ?></th>
                            <td><?= $l['email']; ?></td>
                            <td><button class="btn btn-sm btn-danger mx-1" data-remove data-id="<?= $l['id']; ?>">Hapus</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script>
            $(window).ready(() => {
                const listlangganan = document.getElementById('listlangganan');
                if (listlangganan) {
                    dataTable = new simpleDatatables.DataTable(listlangganan);
                }

                $('button[data-remove]').on('click', function() {
                    const id = $(this).data('id');

                    $.ajax({
                        url: "<?= base_url('/staff/unsubs'); ?>",
                        type: 'post',
                        data: {
                            id: id,
                        },
                        success: function() {
                            document.location.href = "<?= base_url('/staff/langganan') ?>";
                        }
                    })
                });
            });
        </script>
    </main>