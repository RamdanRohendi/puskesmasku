<?php
    include '../lib/library.php';
    include '../lib/koneksi.php';
    
    sudahLogin();
    
    if (!isRole('admin')) {
        header('location:'.base_url());
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM users WHERE id = '$id' ";
        $query = $mysqli->query($sql);
        $data = $query->fetch_array();
    }

    include '../views/pages/admin/forms/v_pengguna.php';
?>
