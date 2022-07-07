<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Ubah kata sandimu</li>
            </ol>

            <div class="row">
                <div class="col-lg-8">
                    <?= flashdata('message'); ?>
                    <?= form_open_multipart('profil/changePassword'); ?>
                    <div class="form-group mb-2">
                        <label for="current_password">Kata sandi saat ini</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="new_password">Kata sandi baru</label>
                        <input type="password" class="form-control" id="new_password" name="new_password1">
                        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="new_password">Ulangi kata sandi</label>
                        <input type="password" class="form-control" id="new_password" name="new_password2">
                        <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary">Ubah password</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>