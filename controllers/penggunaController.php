<?php
    include '../lib/library.php';
    
    sudahLogin();

    if (!isRole('admin')) {
        header('location:'.base_url());
    }
    
    include '../lib/koneksi.php';
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['hapus'])) {
            $id = $_GET['id'];

            $sql1 = "DELETE FROM riwayat_berobat WHERE user_id = '$id'";
            $sql2 = "DELETE FROM users WHERE id = '$id'";
        
            try {
                $status1 = $mysqli->query($sql1) or die ($mysqli->error);
                $status2 = $mysqli->query($sql2) or die ($mysqli->error);
            } catch (\Throwable $th) {
                flash('error', 'Terjadi masalah saat menghapus data!');

                return header('location:'.base_url().'/admin/pengguna.php');
            }

            if ($status1 && $status2) {
                flash('success', 'Data berhasil dihapus!');

                return header('location:'.base_url().'/admin/pengguna.php');
            } else {
                flash('error', 'Terjadi masalah saat menghapus data!');

                return header('location:'.base_url().'/admin/pengguna.php');
            }
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['tambah'])) {
            $email = $_POST['email'];
            $nik = $_POST['nik'];
            $nama_depan = $_POST['nama_depan'];
            $nama_belakang = $_POST['nama_belakang'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $status_pernikahan = $_POST['status_pernikahan'];
            $alamat = $_POST['alamat'];
            $role = $_POST['role'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            setOld($_POST);

            if (strcmp($password, $confirm_password)) {
                flash('error', 'Password tidak sama!');

                return header('location:'.base_url().'/admin/pengguna-form.php');
            }

            resetOld();
            $password = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO `users`(`email`, `password`, `nama_depan`, `nama_belakang`, `nik`, `alamat`,
                                        `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `status_pernikahan`, `role`)
                    VALUES ('$email','$password','$nama_depan','$nama_belakang','$nik','$alamat',
                            '$tgl_lahir','$tempat_lahir','$jenis_kelamin','$status_pernikahan', '$role')";

            try {
                $status = $mysqli->query($sql) or die ($mysqli->error);
            } catch (\Throwable $th) {
                setOld($_POST);
                flash('error', 'Terjadi masalah saat memasukkan data, coba gunakan NIK atau email berbeda!');

                return header('location:'.base_url().'/admin/pengguna-form.php');
            }

            if ($status) {
                flash('success', 'Data berhasil dimasukkan!');

                return header('location:'.base_url().'/admin/pengguna.php');
            } else {
                setOld($_POST);
                flash('error', 'Terjadi masalah saat memasukkan data, coba gunakan NIK atau email berbeda!');

                return header('location:'.base_url().'/admin/pengguna-form.php');
            }
        }

        if (isset($_POST['edit'])) {
            $id = $_POST['id'];
            $nama_depan = $_POST['nama_depan'];
            $nama_belakang = $_POST['nama_belakang'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $status_pernikahan = $_POST['status_pernikahan'];
            $alamat = $_POST['alamat'];
            $role = $_POST['role'];

            setOld($_POST);

            $sql = "UPDATE `users` SET `nama_depan`='$nama_depan',`nama_belakang`='$nama_belakang',`alamat`='$alamat',
                                        `tgl_lahir`='$tgl_lahir',`tempat_lahir`='$tempat_lahir',`jenis_kelamin`='$jenis_kelamin',
                                        `status_pernikahan`='$status_pernikahan',`role`='$role'
                     WHERE `id`='$id'";

            try {
                $status = $mysqli->query($sql) or die ($mysqli->error);
            } catch (\Throwable $th) {
                setOld($_POST);
                flash('error', 'Terjadi masalah saat memperbarui data!');

                return header('location:'.base_url().'/admin/pengguna-form.php?id='.$id);
            }

            if ($status) {
                flash('success', 'Data berhasil diperbarui!');

                return header('location:'.base_url().'/admin/pengguna.php');
            } else {
                setOld($_POST);
                flash('error', 'Terjadi masalah saat memperbarui data!');

                return header('location:'.base_url().'/admin/pengguna-form.php?id='.$id);
            }
        }
    }
?>
