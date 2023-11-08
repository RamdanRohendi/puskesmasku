<div class="card mx-3 shadow">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <button class="btn btn-secondary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#canvasSidebar" aria-controls="canvasSidebar">
                    <span class="fw-bold">=</span>
                </button>
            </div>
            <div class="col text-end">
                <a class="btn btn-outline-primary px-4 py-2" data-bs-toggle="modal" data-bs-target="#konfirmasiLogout">Logout</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="konfirmasiLogout" tabindex="-1" aria-labelledby="konfirmasiLogoutLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="konfirmasiLogoutLabel">Konfirmasi Logout</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a class="btn btn-danger" href="<?= base_url().'/logout.php' ?>">Yakin</a>
            </div>
        </div>
    </div>
</div>
