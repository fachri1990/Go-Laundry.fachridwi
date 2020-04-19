<?php

require 'db.php';

$id     =$_GET['id'];

$hapus = new Database();

$delete  = $hapus->delete('paket',['id_paket' => $id ]);

if ($delete > 0){
    header('Location:form_paket.php');
}else{
    echo "Gagal dihapus";
}