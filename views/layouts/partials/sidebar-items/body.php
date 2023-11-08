<ul class="list-unstyled ps-0">
    <li class="mb-1">
        <a href="<?= base_url().'/admin' ?>" class="btn hover-opacity-50 
        <?= ($_SERVER['REQUEST_URI'] == '/admin/' || $_SERVER['REQUEST_URI'] == '/admin/index.php') ? 'bg-primary-subtle' : '' ?>">
            Beranda
        </a>
    </li>
    <li class="mb-1">
        <a href="<?= base_url().'/admin/pasien.php' ?>" class="btn hover-opacity-50
        <?= ($_SERVER['REQUEST_URI'] == '/admin/pasien.php') ? 'bg-primary-subtle' : '' ?>">
            Pasien
        </a>
    </li>
    <li class="border-top my-3"></li>
    <li class="mb-1">
        <a href="<?= base_url().'/admin/pengguna.php' ?>" class="btn hover-opacity-50
        <?= ($_SERVER['REQUEST_URI'] == '/admin/pengguna.php') ? 'bg-primary-subtle' : '' ?>">
            Pengguna
        </a>
    </li>
</ul>
