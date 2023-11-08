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

    // Mengambil jumlah seluruh data
    $sql = "SELECT COUNT(riwayat_berobat.id) as jml_data FROM riwayat_berobat WHERE user_id = $user_id ";
    
    $search = @$_GET['search'];
    if (!empty($search)) $sql .= "AND (keluhan LIKE '%$search%' OR hasil_pemeriksaan_fisik LIKE '%$search%' OR diagnosis LIKE '%$search%' OR obat LIKE '%$search%' OR catatan_lainnya LIKE '%$search%') ";

    $query = $mysqli->query($sql);
    $data = $query->fetch_array();
    $jml_data = $data['jml_data'];

    // Mengambil data 
    $sql = "SELECT riwayat_berobat.id, riwayat_berobat.keluhan, riwayat_berobat.hasil_pemeriksaan_fisik, riwayat_berobat.diagnosis, riwayat_berobat.obat, riwayat_berobat.catatan_lainnya, riwayat_berobat.dibuat_pada FROM riwayat_berobat ";
    // $sql .= "RIGHT JOIN users ON riwayat_berobat.user_id = users.id ";
    $sql .= "WHERE user_id = $user_id ";

    $search = @$_GET['search'];
    if (!empty($search)) $sql .= "AND (keluhan LIKE '%$search%' OR hasil_pemeriksaan_fisik LIKE '%$search%' OR diagnosis LIKE '%$search%' OR obat LIKE '%$search%' OR catatan_lainnya LIKE '%$search%') ";

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

    include '../views/pages/admin/v_riwayat.php';
?>
