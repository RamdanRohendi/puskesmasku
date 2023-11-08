<?php
    session_start();

    function base_url() {
        return "https://puskesmasku.test";
    }

    function flash($tipe, $pesan = ''){
        if (empty($pesan)) {
            $pesan = @$_SESSION[$tipe];
            unset($_SESSION[$tipe]);
            
            return $pesan;
        } else {
            $_SESSION[$tipe] = $pesan;
        }
    }

    function old($value, $default = '') {
        $nilai = $default ?? '';
        
        if (isset($_SESSION['old_input'])) {
            $data_old = @$_SESSION['old_input'];
            $nilai = @$data_old[$value] ?? $default;
        }
    
        return $nilai;
    }

    function setOld($data) {
        $_SESSION['old_input'] = $data;
    }

    function resetOld() {
        unset($_SESSION['old_input']);
    }

    function sudahLogin(){
        if (!isset($_SESSION['data_login'])) {
            header('location:'.base_url().'/login.php');
        }
    }

    function belumLogin(){
        if (isset($_SESSION['data_login'])) {
            header('location:'.base_url().'/index.php');
        }
    }

    function isLogin(){
        return isset($_SESSION['data_login']);
    }

    function dataLogin($kunci) {
        $nilai = '';

        if (isLogin()) {
            $data_old = @$_SESSION['data_login'];
            $nilai = @$data_old[$kunci];
        }

        return $nilai;
    }

    function isRole($role) {
        $nilai = false;

        if (isLogin()) {
            $data_old = @$_SESSION['data_login'];

            if (isset($data_old['role'])) {
                $nilai = !strcmp($data_old['role'], $role);
            }
        }

        return $nilai;
    }

    $success = flash('success');
    $error = flash('error');

    if (empty($error)) {
        resetOld();
    }
?>