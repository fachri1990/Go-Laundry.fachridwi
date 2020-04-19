<?php

include "db.php";

$id     =$_POST['id'];

$db = new Database();


$update = $db->update('user', [

    'nama'      => $_POST['nama'],
    'username'    => $_POST['username'],
    'role'      => $_POST['role']
], ['id_user' => $id]);

if ( $update > 0 ) {
    header('Location:form_user.php');
} else {
    echo "Gagal..:(";
}