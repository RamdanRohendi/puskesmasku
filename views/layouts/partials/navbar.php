<nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url().'/assets/images/logo.svg' ?>" width="120" alt="Logo Puskesmasku">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url().'#layanankami' ?>">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url().'#dokterjaga' ?>">Dokter Jaga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url().'#jadwal' ?>">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url().'#lokasi' ?>">Lokasi</a>
                </li>
            </ul>

            <div class="d-flex justify-content-end ms-5 my-2">
                <?php if (isLogin()) { ?>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= dataLogin('nama_lengkap') ?>
                        </a>
                        <ul class="dropdown-menu mt-2">
                            <li>
                                <?php if (dataLogin('role') == 'admin') { ?>
                                    <a class="dropdown-item" href="<?= base_url().'/admin' ?>">Master</a>
                                <?php } else { ?>
                                    <a class="dropdown-item" href="<?= base_url().'/riwayat.php' ?>">Riwayat</a>
                                <?php } ?>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#konfirmasiLogout">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php } else { ?>
                    <a class="btn btn-outline-primary px-4 py-2" href="<?= base_url().'/login.php' ?>">Login</a>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>

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
