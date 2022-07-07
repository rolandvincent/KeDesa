<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - KeDesa</title>
    <link href="<?= base_url('/'); ?>assets/img/favicon.png" rel="icon">
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login KeDesa.</h3>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <?= flashdata('message'); ?>

                                        <form method="POST" action="<?= base_url('/'); ?>auth">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <a class="small" href="<?= base_url('/'); ?>auth/resetpassword">Lupa Password?</a>
                                            <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
                                                <a class="btn btn-primary" style="margin-right: 0.5rem;" href="<?= base_url('/'); ?>beranda">Beranda</a>
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; KeDesa 2021</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>

</html>