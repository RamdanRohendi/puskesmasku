<?php
    include '../lib/library.php';
    // include 'lib/koneksi.php';

    sudahLogin();

    if (!isRole('admin')) {
        header('location:'.base_url());
    }

    include '../views/pages/admin/v_index.php';
?>
