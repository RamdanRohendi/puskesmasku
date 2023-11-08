<?php
    $title = 'Riwayat';
    ob_start();
?>

<section class="container pb-3 px-3">
    <div class="d-flex justify-content-center mt-4">
        <div>
            <h2 class="text-center">Riwayat Berobat Saya</h2>
            <hr class="border-bottom border-3 border-primary opacity-100 mx-5" />
        </div>
    </div>
    <div class="my-5">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <label for="input-cari">Cari Riwayat Anda : </label>
                        <div class="input-group">
                            <input id="input-cari" type="text" class="form-control" name="search" placeholder="Masukan kata kunci..."
                                    value="<?= @$search ?>" aria-label="Cari" aria-describedby="button-cari">
                            <button class="btn btn-outline-secondary" type="submit" id="button-cari" onclick="refreshPage()">Cari</button>
                        </div>
                        <small class="text-muted">*untuk mencari berdasarkan tanggal dan waktu gunakan format Y-M-d H:i:s (2023-11-20 08:30:00)</small> <br>
                    </div>
                </div>
            </div>
            
            <div class="container mt-5">
                <div id="data-riwayat" class="list-group">
                    <?php
                        $i = $offset+1;
                        while ($data = $listdata->fetch_array()) {
                    ?>
                        <div class="border-0 list-group-item list-group-item-action cursor-pointer">
                            <div class="card bg-transparent">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $i++ .'). '. date_format(date_create($data['dibuat_pada']), 'd F Y H:i:s') ?></h5>
                                            <p class="card-text">
                                                <p>Keluhan : <br>
                                                    <small class="text-muted"><?= $data['keluhan'] ?></small>
                                                </p>

                                                <p>Hasil Pemeriksaan Fisik : <br>
                                                    <small class="text-muted"><?= $data['hasil_pemeriksaan_fisik'] ?></small>
                                                </p>
                                                
                                                <p>Diagnosis : <br>
                                                    <small class="text-muted"><?= $data['diagnosis'] ?></small>
                                                </p>
                                                
                                                <p>Obat : <br>
                                                    <small class="text-muted"><?= $data['obat'] ?></small>
                                                </p>
                                                
                                                <p>Catatan Lainnya : <br>
                                                    <small class="text-muted"><?= $data['catatan_lainnya'] ?></small>
                                                </p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    
                    <?php if ($jml_data == 0) { ?>
                        <a href="javascript:void(0);" class="border-0 list-group-item list-group-item-action">
                            <div class="card bg-transparent">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="card-body">
                                            <p class="card-text text-center">
                                                Belum terdapat data riwayat berobat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            
            <div class="container">
                <div id="controller-pagination" class="row align-items-center justify-content-between">
                    <div class="col-6 row align-items-center">
                        <div class="col col-auto">
                            <select id="input-limit" class="form-select" aria-label="Limit Data" name="limit-data" onchange="refreshPage()">
                                <option <?= @$limit == 5 ? 'selected' : '' ?> value="5">5</option>
                                <option <?= @$limit == 10 ? 'selected' : '' ?> value="10">10</option>
                                <option <?= @$limit == 15 ? 'selected' : '' ?> value="15">15</option>
                                <option <?= @$limit == 20 ? 'selected' : '' ?> value="20">20</option>
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
</section>

<?php $content = ob_get_clean(); ?>

<?php
    ob_start();
?>
<script>
    let inputSearch = document.getElementById("input-cari");

    function refreshPage(page = 1) {
        const search = inputSearch.value;
        const limit = document.getElementById('input-limit').value;

        window.location.replace(`<?= base_url() ?>/riwayat.php?search=${search}&limit=${limit}&page=${page}`);
    }
    
    inputSearch.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            document.getElementById("button-cari").click();
        }
    });
</script>
<?php $scripts = ob_get_clean(); ?>

<?php include './views/layouts/app-master.php'; ?>
