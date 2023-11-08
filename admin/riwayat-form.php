<?php
    include '../lib/library.php';
    include '../lib/koneksi.php';
    
    sudahLogin();
    
    if (!isRole('admin')) {
        header('location:'.base_url());
    }

    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
    } else {
        if (isRole('admin')) {
            header('location:'.base_url().'/admin');
        }

        $user_id = dataLogin('id');
    }

    // Mengambil data User Terkait
    $sql = "SELECT users.id, users.nama_depan, users.nama_belakang FROM users WHERE id = '$user_id' ";
    $query = $mysqli->query($sql);
    $data_user = $query->fetch_array();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM riwayat_berobat WHERE id = '$id' ";
        $query = $mysqli->query($sql);
        $data = $query->fetch_array();
    }

    include '../views/pages/admin/forms/v_riwayat.php';
?>
