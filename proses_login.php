<?php
session_start();
require 'koneksi.php';

$username       =$_POST['username'];
$password       =$_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");

    if(mysqli_num_rows($query) === 1 ){
        
        $cek = mysqli_fetch_assoc($query);

        if ($password == TRUE){

         $_SESSION = [
             'id_user'      => $cek['id_user'],
             'nama'         => $cek['nama'],
             'username'     => $cek['username'],
             'role'         => $cek['role']
         ];
         if($cek['role'] == "owner"){
             header('location:form_user.php');exit;
         }
         header('location: dashboard.php') ;  
        } else {
            echo "Password salah";
        }

    }else{
        echo "akun tidak ditemukan";
    }
            
        ?>