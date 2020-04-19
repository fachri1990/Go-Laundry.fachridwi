<?php

require 'db.php';

$id     =$_GET['id'];

$hapus = new Database();

$delete  = $hapus->delete('user',['id_user' => $id ]);

if ($delete > 0){
    header('Location:form_user.php');
}else{
    echo "Gagal dihapus";
}