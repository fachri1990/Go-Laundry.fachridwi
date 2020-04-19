<?php

require 'db.php';

$id     =$_GET['id'];

$hapus = new Database();

$delete  = $hapus->delete('member',['id_member' => $id ]);

if ($delete > 0){
    header('Location:form_member.php');
}else{
    echo "Gagal dihapus";
}