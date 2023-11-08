<?php
    include '../lib/library.php';
    
    sudahLogin();

    if (!isRole('admin')) {
        header('location:'.base_url());
    }
    
    include '../lib/koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Login
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            setOld($_POST);

            $sql = "SELECT * FROM users
                    WHERE email = '$email'";

            $data = $mysqli->query($sql) or die($mysqli->error);

            if ($data->num_rows != 0) {
                $row = mysqli_fetch_object($data);

                if (password_verify($password, $row->password)) {
                    $data_user = [
                        'id' => $row->id,
                        'nama_depan' => $row->nama_depan,
                        'nama_belakang' => $row->nama_belakang,
                        'nama_lengkap' => $row->nama_depan.' '.$row->nama_belakang,
                        'role' => $row->role
                    ];
    
                    $_SESSION['data_login'] = $data_user;
    
                    return header('location:'.base_url());
                } else {
                    flash('error', 'Email atau Password salah!');
    
                    return header('location:'.base_url().'/login.php');
                }
            } else {
                flash('error', 'Email atau Password salah!');

                return header('location:'.base_url().'/login.php');
            }
        }

        // Register
        if (isset($_POST['register'])) {
            $email = $_POST['email'];
            $nik = $_POST['nik'];
            $nama_depan = $_POST['nama_depan'];
            $nama_belakang = $_POST['nama_belakang'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $status_pernikahan = $_POST['status_pernikahan'];
            $alamat = $_POST['alamat'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            setOld($_POST);

            if (strcmp($password, $confirm_password)) {
                flash('error', 'Password tidak sama!');

                return header('location:'.base_url().'/register.php');
            }

            resetOld();
            $password = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO `users`(`email`, `password`, `nama_depan`, `nama_belakang`, `nik`, `alamat`,
                                        `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `status_pernikahan`)
                    VALUES ('$email','$password','$nama_depan','$nama_belakang','$nik','$alamat',
                            '$tgl_lahir','$tempat_lahir','$jenis_kelamin','$status_pernikahan')";

            try {
                $status = $mysqli->query($sql) or die ($mysqli->error);
            } catch (\Throwable $th) {
                setOld($_POST);
                flash('error', 'Terjadi masalah saat memasukkan data, coba gunakan NIK atau email berbeda!');

                return header('location:'.base_url().'/register.php');
            }

            if ($status) {
                $data_user = [
                    'id' => $mysqli->insert_id,
                    'nama_depan' => $nama_depan,
                    'nama_belakang' => $nama_belakang,
                    'nama_lengkap' => $nama_depan.' '.$nama_belakang,
                    'role' => 'pasien'
                ];

                $_SESSION['data_login'] = $data_user;

                return header('location:'.base_url());
            } else {
                setOld($_POST);
                flash('error', 'Terjadi masalah saat memasukkan data, coba gunakan NIK atau email berbeda!');

                return header('location:'.base_url().'/register.php');
            }
        }
    }
?>
