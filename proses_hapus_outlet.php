<?php

require 'db.php';

$id     =$_GET['id'];

$hapus = new Database();

$delete  = $hapus->delete('outlet',['id_outlet' => $id ]);

if ($delete > 0){
    header('Location:form_outlet.php');
}else{
    echo "Gagal dihapus";
}