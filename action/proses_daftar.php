<?php

    include '../config/koneksi.php';

    $nama       =$_POST['name'];
    $telp       =$_POST['phone'];
    $email      =$_POST['email'];
    $jk         =$_POST['kelamin'];
    $pass1      =$_POST['password1'];
    $pass2      =$_POST['password2'];
    $options = [ 
               'cost' => 12, 
               'salt' => '$P27r06o9!nasda57b2M22'
           ]; 
    $hash =password_hash($pass1,PASSWORD_BCRYPT, $options);
    if(empty($nama)){
        echo "<script>alert('nama belum di isi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../signup.php'>";
    }else if(empty($telp)){
        echo "<script>alert('nomor telepon belum di isi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../signup.php'>";
    }else if(empty($email)){
        echo "<script>alert('email belum di isi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../signup.php'>";
    }else if(empty($jk)){
        echo "<script>alert('jenis kelamin belum di isi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../signup.php'>";
    }else if(empty($pass1)){
        echo "<script>alert('password belum di isi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../signup.php'>";
    }else if(empty($pass2)){
        echo "<script>alert('password2 belum di isi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../signup.php'>";
    }else if($pass1 != $pass2){
        echo "<script>alert('password anda tidak sama')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../signup.php'>";
    }else{
        $daftar =mysqli_query($sambung,"INSERT INTO users(name,email,password,gender,phone_number) VALUES ('$nama','$email','$hash','$jk','$telp')");
        if($daftar){
            echo "<script>alert('berhasil mendaftar')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
        }else{
            echo "<script>alert('gagal mendaftar')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../signup.php'>";
        }
    }