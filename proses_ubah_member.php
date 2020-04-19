<?php

include "db.php";

$id     =$_POST['id'];

$db = new Database();


$update = $db->update('member', [

    'nama'      => $_POST['nama'],
    'alamat'    => $_POST['alamat'],
    'telepon'      => $_POST['telepon']
], ['id_member' => $id]);

if ( $update > 0 ) {
    header('Location:form_member.php');
} else {
    echo "Gagal..:(";
}