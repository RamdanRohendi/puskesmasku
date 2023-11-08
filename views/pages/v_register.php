<?php
    $title = 'Register';
    ob_start();
?>
<div class="row container d-flex justify-content-center m-3">
    <div class="col-sm-9 col-lg-6">
        <form action="<?= base_url().'/controllers/authController.php' ?>" method="POST" class="shadow">
            <div class="card">
                <div class="card-body mx-3">
                    <div class="row">
                        <div class="text-center mb-3 col-lg-12">
                            <div class="d-flex align-items-center justify-content-center mb-4 mt-2">
                                <a href="<?= base_url() ?>" class="rounded-circle">
                                    <img src="<?= base_url().'/assets/images/icon.svg' ?>" class="rounded-circle" alt="Icon PuskesmasKu">
                                </a>
                            </div>
                            <h5 class="mb-0">Daftarkan akun anda</h5>
                            <span class="d-block text-muted">Masukkan data anda dibawah</span>
                        </div>
            
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Email<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="email" class="form-control" required value="<?= old('email') ?>"
                                        placeholder="Masukkan Email..." autofocus name="email">
                            </div>
                        </div>
            
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">NIK<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="number" class="form-control" required value="<?= old('nik') ?>"
                                        placeholder="Masukkan NIK..." name="nik">
                            </div>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Nama Depan<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" class="form-control" required value="<?= old('nama_depan') ?>"
                                        placeholder="Masukkan Nama Depan..." name="nama_depan">
                            </div>
                        </div>
            
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Nama Belakang<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" class="form-control" required value="<?= old('nama_belakang') ?>"
                                        placeholder="Masukkan Nama Belakang..." name="nama_belakang">
                            </div>
                        </div>

                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" <?= !strcmp(old('jenis_kelamin'), 'L') ? 'checked' : '' ?>
                                            name="jenis_kelamin" value="L" id="jenis_kelamin_l">
                                    <label class="form-check-label" for="jenis_kelamin_l">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" <?= !strcmp(old('jenis_kelamin'), 'P') ? 'checked' : '' ?>
                                            name="jenis_kelamin" value="P" id="jenis_kelamin_p" required>
                                    <label class="form-check-label" for="jenis_kelamin_p">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Tanggal Lahir<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="date" class="form-control" required value="<?= old('tgl_lahir') ?>"
                                        placeholder="Masukkan Tanggal Lahir..." name="tgl_lahir">
                            </div>
                        </div>
                        
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Tempat Lahir<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" class="form-control" required value="<?= old('tempat_lahir') ?>"
                                        placeholder="Masukkan Tempat Lahir..." name="tempat_lahir">
                            </div>
                        </div>
                        
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Status Pernikahan<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <select class="form-select" required name="status_pernikahan">
                                    <option value="">--Pilih Status Pernikahan--</option>
                                    <option <?= !strcmp(old('status_pernikahan'), 'Belum Kawin') ? 'selected' : '' ?> value="Belum Kawin">Belum Kawin</option>
                                    <option <?= !strcmp(old('status_pernikahan'), 'Kawin') ? 'selected' : '' ?> value="Kawin">Kawin</option>
                                    <option <?= !strcmp(old('status_pernikahan'), 'Cerai Hidup') ? 'selected' : '' ?> value="Cerai Hidup">Cerai Hidup</option>
                                    <option <?= !strcmp(old('status_pernikahan'), 'Cerai Mati') ? 'selected' : '' ?> value="Cerai Mati">Cerai Mati</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Alamat<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <textarea class="form-control" rows="5" name="alamat" required><?= old('alamat')?></textarea>
                            </div>
                        </div>
            
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Password<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="password" class="form-control" required pattern=".{8,}" placeholder="Masukan Password" name="password">
                            </div>
                            <small id="text-alert-password" class="text-muted">*Minimal 8 digits</small>
                        </div>
                        
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Konfirmasi Password<span class="text-danger">*</span></label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="password" class="form-control" required pattern=".{8,}" placeholder="Masukan Ulang Password" name="confirm_password">
                            </div>
                            <small id="text-alert-konfirmasi-password" class="text-muted">*Minimal 8 digits</small>
                        </div>
                        
                        <div class="mb-3 mt-4 col-lg-12">
                            <button type="submit" class="btn btn-primary w-100" name="register">Daftar</button>
                        </div>
                    </div>

                    <p>Sudah memiliki akun? <a href="<?= base_url().'/login.php' ?>">Masuk disini!</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php include './views/layouts/app-auth-master.php'; ?>
