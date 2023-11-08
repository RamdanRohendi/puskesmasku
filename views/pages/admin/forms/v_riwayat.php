<?php
    $title = 'Form Riwayat';
    ob_start();
?>

<div class="card mx-3 shadow mt-4 min-vh-admin">
    <div class="card-header d-flex justify-content-between">
        <h1>Form Riwayat - <?= $data_user['nama_depan'].' '.$data_user['nama_belakang'] ?></h1>
        <a href="<?= base_url().'/admin/riwayat.php?user_id='.$user_id ?>" class="btn btn-secondary text-light my-2"><- Kembali</a>
    </div>
    <div class="card-body">
        <div class="container">
            <form action="<?= base_url().'/controllers/riwayatController.php?user_id='.$user_id ?>" method="POST">
                <div class="row">
                    <input type="hidden" name="id" value="<?= @$data['id'] ?>">
                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Keluhan<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <textarea class="form-control" rows="5" name="keluhan" required><?= old('keluhan', @$data['keluhan'])?></textarea>
                        </div>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Hasil Pemeriksaan Fisik</label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <textarea class="form-control" rows="5" name="hasil_pemeriksaan_fisik"><?= old('hasil_pemeriksaan_fisik', @$data['hasil_pemeriksaan_fisik'])?></textarea>
                        </div>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Diagnosis<span class="text-danger">*</span></label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <textarea class="form-control" rows="5" name="diagnosis" required><?= old('diagnosis', @$data['diagnosis'])?></textarea>
                        </div>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Obat</label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <textarea class="form-control" rows="5" name="obat"><?= old('obat', @$data['obat'])?></textarea>
                        </div>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Catatan Lainnya</label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <textarea class="form-control" rows="5" name="catatan_lainnya"><?= old('catatan_lainnya', @$data['catatan_lainnya'])?></textarea>
                        </div>
                    </div>

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
