<?php
    include '../lib/library.php';
    
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

    include '../lib/koneksi.php';
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['hapus'])) {
            $id = $_GET['id'];

            $sql = "DELETE FROM riwayat_berobat WHERE id = '$id'";
        
            try {
                $status = $mysqli->query($sql) or die ($mysqli->error);
            } catch (\Throwable $th) {
                flash('error', 'Terjadi masalah saat menghapus data!');

                return header('location:'.base_url().'/admin/riwayat.php?user_id='.$user_id);
            }

            if ($status) {
                flash('success', 'Data berhasil dihapus!');

                return header('location:'.base_url().'/admin/riwayat.php?user_id='.$user_id);
            } else {
                flash('error', 'Terjadi masalah saat menghapus data!');

                return header('location:'.base_url().'/admin/riwayat.php?user_id='.$user_id);
            }
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['tambah'])) {
            $keluhan = $_POST['keluhan'];
            $hasil_pemeriksaan_fisik = $_POST['hasil_pemeriksaan_fisik'];
            $diagnosis = $_POST['diagnosis'];
            $obat = $_POST['obat'];
            $catatan_lainnya = $_POST['catatan_lainnya'];

            setOld($_POST);

            $sql = "INSERT INTO `riwayat_berobat`(`user_id`, `keluhan`, `hasil_pemeriksaan_fisik`,
                                                `diagnosis`, `obat`, `catatan_lainnya`)
                    VALUES ('$user_id','$keluhan','$hasil_pemeriksaan_fisik','$diagnosis','$obat','$catatan_lainnya')";

            try {
                $status = $mysqli->query($sql) or die ($mysqli->error);
            } catch (\Throwable $th) {
                setOld($_POST);
                flash('error', 'Terjadi masalah saat memasukkan data!');

                return header('location:'.base_url().'/admin/riwayat-form.php?user_id='.$user_id);
            }

            if ($status) {
                flash('success', 'Data berhasil dimasukkan!');

                return header('location:'.base_url().'/admin/riwayat.php?user_id='.$user_id);
            } else {
                setOld($_POST);
                flash('error', 'Terjadi masalah saat memasukkan data!');

                return header('location:'.base_url().'/admin/riwayat-form.php?user_id='.$user_id);
            }
        }

        if (isset($_POST['edit'])) {
            $id = $_POST['id'];
            $keluhan = $_POST['keluhan'];
            $hasil_pemeriksaan_fisik = $_POST['hasil_pemeriksaan_fisik'];
            $diagnosis = $_POST['diagnosis'];
            $obat = $_POST['obat'];
            $catatan_lainnya = $_POST['catatan_lainnya'];

            setOld($_POST);

            $sql = "UPDATE `riwayat_berobat` SET `keluhan`='$keluhan',`hasil_pemeriksaan_fisik`='$hasil_pemeriksaan_fisik',
                                        `diagnosis`='$diagnosis',`obat`='$obat',`catatan_lainnya`='$catatan_lainnya'
                     WHERE `id`='$id'";

            try {
                $status = $mysqli->query($sql) or die ($mysqli->error);
            } catch (\Throwable $th) {
                setOld($_POST);
                flash('error', 'Terjadi masalah saat memperbarui data!');

                return header('location:'.base_url().'/admin/riwayat-form.php?user_id='.$user_id.'&id='.$id);
            }

            if ($status) {
                flash('success', 'Data berhasil diperbarui!');

                return header('location:'.base_url().'/admin/riwayat.php?user_id='.$user_id);
            } else {
                setOld($_POST);
                flash('error', 'Terjadi masalah saat memperbarui data!');

                return header('location:'.base_url().'/admin/riwayat-form.php?user_id='.$user_id.'&id='.$id);
            }
        }
    }
?>
