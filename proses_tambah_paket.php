<?php
require 'db.php';

$paket = new Database();

$id         =$_POST['id_outlet'];
$nama       =$_POST['nama_paket'];
$jenis      =$_POST['jenis_paket'];
$harga      =$_POST['harga'];


$insert = $paket->insert('paket', [
    'id_paket'  => '',
    'id_outlet' => $id,
    'jenis_paket'  => $jenis,
    'nama_paket' => $nama,
    'harga'     => $harga
]);

if ( $insert > 0 ) {
    header('Location:form_paket.php');
} else {
    echo "Gagal..:(";
}