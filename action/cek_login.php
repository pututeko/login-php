<?php

    include '../config/koneksi.php';

    $email = $_POST['email'];
    $pass  = $_POST['password'];
    if(empty($email)){
        echo "<script>alert('email belum di isi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
    }else if(empty($pass)){
        echo "<script>alert('password harus di isi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
    }else{
        session_start();
        $login ="SELECT * FROM users WHERE email='$email'";
        $result =mysqli_query($sambung,$login);
        $tes =mysqli_num_rows($result);
        $get =mysqli_fetch_array($result);
        if($tes ===1){
            if(password_verify($pass,$get['password'])){
            $_SESSION['email'] =$email;
            header("location:../dashboard.php");
            }
        }else{
            echo "<script>alert('email atau password salah')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
        }
    }
?>