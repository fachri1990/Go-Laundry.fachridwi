<?php
require 'db.php';

$user = new Database();

$nama       =$_POST['nama'];
$username     =$_POST['username'];
$pass       =$_POST['password'];
$role       =$_POST['role'];
$id_outlet  =$_POST['id_outlet'];


$insert = $user->insert('user', [
    'id_user' => '',
    'nama'      => $nama,
    'username'    => $username,
    'password'      => $pass,
    'id_outlet'     => $id_outlet,
    'role'      => $role
]);

if ( $insert > 0 ) {
    var_dump($insert);
    header('Location:form_user.php');
} else {
    echo "Gagal..:(";
}