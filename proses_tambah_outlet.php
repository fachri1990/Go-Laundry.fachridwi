<?php
require 'db.php';

$outlet = new Database();

$nama       =$_POST['nama'];
$alamat     =$_POST['alamat'];
$telp       =$_POST['telp'];


$insert = $outlet->insert('outlet', [
    'id_outlet' => '',
    'nama'      => $_POST['nama'],
    'alamat'    => $_POST['alamat'],
    'telp'      => $_POST['telp']
]);

if ( $insert > 0 ) {
    header('Location:form_outlet.php');
} else {
    echo "Gagal..:(";
}