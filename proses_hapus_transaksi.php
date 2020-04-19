<?php

require 'db.php';

$id     =$_GET['id'];

$hapus = new Database();

$delete  = $hapus->delete('transaksi',['id_transaksi' => $id ]);

if ($delete > 0){
    header('Location:list_transaksi.php');
}else{
    echo "Gagal dihapus";
}