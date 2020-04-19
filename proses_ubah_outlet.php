<?php

include "db.php";

$id     =$_POST['id'];

$db = new Database();


$update = $db->update('outlet', [

    'nama'      => $_POST['nama'],
    'alamat'    => $_POST['alamat'],
    'telepon'      => $_POST['telepon']
], ['id_outlet' => $id]);

if ( $update > 0 ) {
    header('Location:form_outlet.php');
} else {
    echo "Gagal..:(";
}