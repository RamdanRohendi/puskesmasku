<?php
    $title = 'Riwayat Berobat';
    ob_start();
?>

<div class="card mx-3 shadow mt-4 min-vh-admin">
    <div class="card-header d-flex justify-content-between">
        <h1>Data Riwayat - <?= $data_user['nama_depan'].' '.$data_user['nama_belakang'] ?></h1>
        <a href="<?= base_url().'/admin/riwayat-form.php?user_id='.$user_id ?>" class="btn btn-info text-light my-2">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 ">
                    <div class="input-group mb-3">
                        <input id="input-cari" type="text" class="form-control" name="search" placeholder="Cari..."
                                value="<?= @$search ?>" aria-label="Cari" aria-describedby="button-cari">
                        <button class="btn btn-outline-secondary" type="submit" id="button-cari" onclick="refreshPage()">Cari</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-nowrap">
                        <th>No</th>
                        <th>Keluhan Pasien</th>
                        <th>Hasil Pemeriksaan Fisik</th>
                        <th>Diagnosis</th>
                        <th>Obat</th>
                        <th>Catatan Lainnya</th>
                        <th>Berobat Pada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = $offset+1;
                        while ($data = $listdata->fetch_array()) {
                    ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td>
                                <div class="overflow-auto max-h-col min-w-col">
                                    <?= $data['keluhan'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="overflow-auto max-h-col min-w-col">
                                    <?= $data['hasil_pemeriksaan_fisik'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="overflow-auto max-h-col min-w-col">
                                    <?= $data['diagnosis'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="overflow-auto max-h-col min-w-col">
                                    <?= $data['obat'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="overflow-auto max-h-col min-w-col">
                                    <?= $data['catatan_lainnya'] ?>
                                </div>
                            </td>
                            <td class="text-nowrap"><?= date_format(date_create($data['dibuat_pada']), 'd F Y H:i:s') ?></td>
                            <td class="text-nowrap">
                                <a class="btn btn-sm btn-warning" href="<?= base_url().'/admin/riwayat-form.php?user_id='.$user_id.'&id='.$data['id'] ?>">Ubah</a>
                                <a class="btn btn-sm btn-danger text-light" data-bs-toggle="modal" data-bs-target="#konfirmasiHapus<?= $data['id'] ?>" href="#">Hapus</a>

                                <div class="modal fade" id="konfirmasiHapus<?= $data['id'] ?>" tabindex="-1" aria-labelledby="konfirmasiHapus<?= $data['id'] ?>Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="konfirmasiHapus<?= $data['id'] ?>Label">Konfirmasi Hapus Data</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                <a class="btn btn-danger" href="<?= base_url().'/controllers/riwayatController.php?hapus=true&user_id='.$user_id.'&id='.$data['id'] ?>">Yakin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    
                    <?php if ($jml_data == 0) { ?>
                        <tr>
                            <td colspan="8" class="text-center">Data Tidak Ada.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
        <div class="container">
            <div id="controller-pagination" class="row align-items-center justify-content-between">
                <div class="col-6 row align-items-center">
                    <div class="col col-auto">
                        <select id="input-limit" class="form-select" aria-label="Limit Data" name="limit-data" onchange="refreshPage()">
                            <option <?= @$limit == 10 ? 'selected' : '' ?> value="10">10</option>
                            <option <?= @$limit == 25 ? 'selected' : '' ?> value="25">25</option>
                            <option <?= @$limit == 50 ? 'selected' : '' ?> value="50">50</option>
                            <option <?= @$limit == 100 ? 'selected' : '' ?> value="100">100</option>
                        </select>
                    </div>
                    <div class="col text-nowrap">
                        <span id="desc-limit">Menampilkan <?= ($offset+1).' - '.($i-1).' dari '.$jml_data ?></span>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <nav id="nav-pagination" aria-label="Pagination Data Search">
                        <ul class="pagination">
                            <li class="page-item">
                                <button id="paginate-first" class="page-link <?= $is_first_page ? 'disabled' : '' ?>"
                                    onclick="refreshPage('<?= 1 ?>')" aria-label="First Page">
                                    <span aria-hidden="true">&laquo;</span>
                                </button>
                            </li>
                            <li class="page-item">
                                <button id="paginate-prev" class="page-link <?= $is_first_page ? 'disabled' : '' ?>"
                                    onclick="refreshPage('<?= $page-1 ?>')" aria-label="Prev">
                                    <span aria-hidden="true"><</span>
                                </button>
                            </li>
                            <li class="page-item">
                                <button id="paginate-numberfirst" class="page-link <?= $jml_page == 1 || ($jml_page == 2 && $jml_page != $page) ? 'd-none' : '' ?>"
                                    onclick="refreshPage('<?= $page-1 ?>')">
                                    <?= $page-1 ?>
                                </button>
                            </li>
                            <li class="page-item active">
                                <button id="paginate-numbermiddle" class="page-link"
                                    onclick="refreshPage('<?= $page ?>')">
                                    <?= $page ?>
                                </button>
                            </li>
                            <li class="page-item">
                                <button id="paginate-numberlast" class="page-link <?= $jml_page == 1 || $jml_page == $page ? 'd-none' : '' ?>"
                                    onclick="refreshPage('<?= $page+1 ?>')">
                                    <?= $page+1 ?>
                                </button>
                            </li>
                            <li class="page-item">
                                <button id="paginate-next" class="page-link <?= $is_last_page ? 'disabled' : '' ?>"
                                    onclick="refreshPage('<?= $page+1 ?>')" aria-label="Next">
                                    <span aria-hidden="true">></span>
                                </button>
                            </li>
                            <li class="page-item">
                                <button id="paginate-last" class="page-link <?= $is_last_page ? 'disabled' : '' ?>"
                                    onclick="refreshPage('<?= $jml_page ?>')" aria-label="Last Page">
                                    <span aria-hidden="true">&raquo;</span>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php
    ob_start();
?>
<script>
    let inputSearch = document.getElementById("input-cari");

    function refreshPage(page = 1) {
        const search = inputSearch.value;
        const limit = document.getElementById('input-limit').value;

        window.location.replace(`<?= base_url() ?>/admin/riwayat.php?search=${search}&limit=${limit}&page=${page}`);
    }
    
    inputSearch.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            document.getElementById("button-cari").click();
        }
    });
</script>
<?php $scripts = ob_get_clean(); ?>

<?php include '../views/layouts/app-admin-master.php'; ?>
