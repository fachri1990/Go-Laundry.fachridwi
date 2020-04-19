<?php

include "db.php";

$id     =$_POST['id'];

$db = new Database();


$update = $db->update('paket', [

    'jenis_paket'      => $_POST['jenis_paket'],
    'nama_paket'       => $_POST['nama_paket'],
    'harga'            => $_POST['harga']
], ['id_paket' => $id]);

if ( $update > 0 ) {
    header('Location:form_paket.php');
} else {
    echo "Gagal..:(";
}