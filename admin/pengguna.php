<?php
    include '../lib/library.php';
    include '../lib/koneksi.php';
    
    sudahLogin();
    
    if (!isRole('admin')) {
        header('location:'.base_url());
    }
    
    // Mengambil jumlah seluruh data
    $sql = "SELECT COUNT(users.id) as jml_data FROM users";
    
    $search = @$_GET['search'];
    if (!empty($search)) $sql .= " WHERE email LIKE '%$search%' OR nama_depan LIKE '%$search%' OR nama_belakang LIKE '%$search%' OR role LIKE '%$search%' ";

    $query = $mysqli->query($sql);
    $data = $query->fetch_array();
    $jml_data = $data['jml_data'];

    // Mengambil data 
    $sql = "SELECT users.id, users.email, users.nama_depan, users.nama_belakang, users.role FROM users";

    $search = @$_GET['search'];
    if (!empty($search)) $sql .= " WHERE email LIKE '%$search%' OR nama_depan LIKE '%$search%' OR nama_belakang LIKE '%$search%' OR role LIKE '%$search%' ";

    $page = @$_GET['page'] ?? 1;
    $limit = @$_GET['limit'] ?? 10;

    $offset = ($page>1) ? ($page * $limit) - $limit : 0;

    if ($offset < 0) {
        $offset = 0;
    }

    $sql .= " LIMIT $limit OFFSET $offset";

    $listdata = $mysqli->query($sql);

    // Menghitung jumlah halaman yang tersedia
    $jml_page = 1;
    if ($jml_data > 0) {
        $jml_page = ceil($jml_data / $limit);
    }

    // Is First atau Last Page
    $is_first_page = ($page == 1);
    $is_last_page = ($page == $jml_page);

    include '../views/pages/admin/v_pengguna.php';
?>
