<?php
    $title = 'Form Pengguna';
    ob_start();
?>

<div class="card mx-3 shadow mt-4 min-vh-admin">
    <div class="card-header d-flex justify-content-between">
        <h1>Form Pengguna</h1>
        <a href="<?= base_url().'/admin/pengguna.php' ?>" class="btn btn-secondary text-light my-2"><- Kembali</a>
    </div>
    <div class="card-body">
        <div class="container">
            <form action="<?= base_url().'/controllers/penggunaController.php' ?>" method="POST">
                <div class="row">
                    <input type="hidden" name="id" value="<?= @$data['id'] ?>">
                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Email<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="email" class="form-control" required value="<?= old('email', @$data['email']) ?>"
                                    placeholder="Masukkan Email..." <?= empty(@$data) ? 'autofocus' : 'disabled' ?> name="email">
                        </div>
                    </div>
        
                    <div class="mb-3 col-lg-12">
                        <label class="form-label">NIK<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="number" class="form-control" required value="<?= old('nik', @$data['nik']) ?>"
                                    placeholder="Masukkan NIK..." name="nik" <?= empty(@$data) ? '' : 'disabled' ?>>
                        </div>
                    </div>

                    <div class="mb-3 col-lg-6">
                        <label class="form-label">Nama Depan<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="text" class="form-control" required value="<?= old('nama_depan', @$data['nama_depan']) ?>"
                                    placeholder="Masukkan Nama Depan..." name="nama_depan">
                        </div>
                    </div>
        
                    <div class="mb-3 col-lg-6">
                        <label class="form-label">Nama Belakang<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="text" class="form-control" required value="<?= old('nama_belakang', @$data['nama_belakang']) ?>"
                                    placeholder="Masukkan Nama Belakang..." name="nama_belakang">
                        </div>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" <?= !strcmp(old('jenis_kelamin', @$data['jenis_kelamin']), 'L') ? 'checked' : '' ?>
                                        name="jenis_kelamin" value="L" id="jenis_kelamin_l">
                                <label class="form-check-label" for="jenis_kelamin_l">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" <?= !strcmp(old('jenis_kelamin', @$data['jenis_kelamin']), 'P') ? 'checked' : '' ?>
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
                            <input type="date" class="form-control" required value="<?= old('tgl_lahir', @$data['tgl_lahir']) ?>"
                                    placeholder="Masukkan Tanggal Lahir..." name="tgl_lahir">
                        </div>
                    </div>
                    
                    <div class="mb-3 col-lg-6">
                        <label class="form-label">Tempat Lahir<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <input type="text" class="form-control" required value="<?= old('tempat_lahir', @$data['tempat_lahir']) ?>"
                                    placeholder="Masukkan Tempat Lahir..." name="tempat_lahir">
                        </div>
                    </div>
                    
                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Status Pernikahan<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <select class="form-select" required name="status_pernikahan">
                                <option value="">--Pilih Status Pernikahan--</option>
                                <option <?= !strcmp(old('status_pernikahan', @$data['status_pernikahan']), 'Belum Kawin') ? 'selected' : '' ?> value="Belum Kawin">Belum Kawin</option>
                                <option <?= !strcmp(old('status_pernikahan', @$data['status_pernikahan']), 'Kawin') ? 'selected' : '' ?> value="Kawin">Kawin</option>
                                <option <?= !strcmp(old('status_pernikahan', @$data['status_pernikahan']), 'Cerai Hidup') ? 'selected' : '' ?> value="Cerai Hidup">Cerai Hidup</option>
                                <option <?= !strcmp(old('status_pernikahan', @$data['status_pernikahan']), 'Cerai Mati') ? 'selected' : '' ?> value="Cerai Mati">Cerai Mati</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Alamat<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <textarea class="form-control" rows="5" name="alamat" required><?= old('alamat', @$data['alamat'])?></textarea>
                        </div>
                    </div>
                    
                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Role<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" <?= !strcmp(old('role', @$data['role']), 'admin') ? 'checked' : '' ?>
                                        name="role" value="admin" id="role_admin">
                                <label class="form-check-label" for="role_admin">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" <?= !strcmp(old('role', @$data['role']), 'pasien') ? 'checked' : '' ?>
                                        name="role" value="pasien" id="role_pasien" required>
                                <label class="form-check-label" for="role_pasien">
                                    Pasien
                                </label>
                            </div>
                        </div>
                    </div>
        
                    <?php if(empty(@$data)) { ?>
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
                    <?php } ?>
                    
                    <div class="mb-3 mt-1 col-lg-12 text-end">
                        <button type="submit" class="btn btn-lg btn-primary" name="<?= empty(@$data) ? 'tambah' : 'edit' ?>">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include '../views/layouts/app-admin-master.php'; ?>
