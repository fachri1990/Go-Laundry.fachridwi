<?php
include 'db.php';

$member = new Database();

$nama       =$_POST['nama'];
$alamat     =$_POST['alamat'];
$jenis      =$_POST['jenis_kelamin'];
$telp       =$_POST['telp'];

$insert = $member->insert('member', [
    'id_member' => '',
    'nama'      => $_POST['nama'] ,
    'alamat'    => $_POST['alamat'],
    'jenis_kelamin' => $_POST['jenis_kelamin'],
    'telp'      => $_POST['telp']
]);

if ( $insert > 0 ) {
    header('Location:form_list_outlet.php');
} else {
    echo "Gagal..:(";
}