<?php
    $title = 'Login';
    ob_start();
?>

<div class="row container d-flex justify-content-center m-3">
    <div class="col-sm-8 col-lg-4">
        <form action="<?= base_url().'/controllers/authController.php' ?>" method="POST" class="shadow">
            <div class="card">
                <div class="card-body mx-3">
                    <div class="text-center mb-3">
                        <div class="d-flex align-items-center justify-content-center mb-4 mt-2">
                            <a href="<?= base_url() ?>" class="rounded-circle">
                                <img src="<?= base_url().'/assets/images/icon.svg' ?>" class="rounded-circle" alt="Icon PuskesmasKu">
                            </a>
                        </div>
                        <h5 class="mb-0">Masuk ke akun anda</h5>
                        <span class="d-block text-muted">Masukkan kredensial anda dibawah</span>
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="email" class="form-control" required placeholder="Masukkan Email..." autofocus name="email">
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="password" class="form-control" required placeholder="•••••••••••" name="password">
                        </div>
                    </div>
                    
                    <div class="mb-3 mt-4">
                        <button type="submit" class="btn btn-primary w-100" name="login">Masuk</button>
                    </div>

                    <p>Belum memiliki akun? <a href="<?= base_url().'/register.php' ?>">Daftar disini!</a></p>
                </div>
            </div>
        </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include './views/layouts/app-auth-master.php'; ?>
