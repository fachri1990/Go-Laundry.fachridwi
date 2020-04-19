<?php

include 'db.php';

$db = new Database();

$Update = $db->update('outlet',
        ['nama' => 'cantika',
        'alamat' => 'Rajamandala',
        'telp' => '0894457584'],
        ['id_outlet' => '3']
);
if ($update > 0){
    echo "Berhasil diubah";
} else{
    echo
}

// <?php

include "db.php";

$admin = new Database();

$insert = $admin->insert('outlet', [
    'id_outlet' => '',
    'nama'      => 'Cabang baru di PJR',
    'alamat'    => 'PJR',
    'telp'      => '08671234571'
]);

if ( $insert > 0 ) {
    echo "Berhasil!";
} else {
    echo "Gagal..:(";
}

$delete  = $admin->delete('tabel_outlet',['id_outlet' => '2']);

if ($delete > 0){
    echo "Berhasil dihapus";
}else{
    echo "Gagal dihapus";
}

// getAll()

// $data = $admin->getAll('tabel_outlet');

// foreach($data as $d):   
//  echo $d['id_outlet'];
//  echo "<br">;
//  echo $d['nama'];
//  echo "<br">;
//  echo $d['alamat'];
//  echo "<br">;
//  echo $d['tlp'];
//  echo "<br">;
//  echo "<hr>";
// endforeach;




