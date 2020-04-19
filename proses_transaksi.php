<?php
include 'db.php';

$transaksi = new Database();

$outlet         =$_POST['id_outlet'];
$member         =$_POST['id_member'];
$id_paket       =$_POST['id_paket'];
$harga          =$_POST['harga'];
$tanggal        =$_POST['tanggal'];
$deadline       =$_POST['batas_waktu'];
$tgl_bayar      =$_POST['tgl_bayar'];
$jumlah         =$_POST['jumlah'];
$biaya          =$_POST['biaya_tambahan'];
$diskon         =$_POST['diskon'];
$pajak          =$_POST['pajak'];
$status         =$_POST['status'];
$pembayaran     =$_POST['pembayaran'];
$user           =$_POST['id_user'];
$kode           =$_POST['kode_invoice'];
$id_trans       =$_POST['id_transaksi'];
$keterangan     =$_POST['keterangan'];

$insert = $transaksi->insert('transaksi',[
    'id_transaksi' => $id_trans,
    'id_outlet'      => $outlet,
    'id_member'    => $member,
    'kode_invoice' => $kode,
    'tanggal'      => $tanggal,
    'batas_waktu'      => $deadline,
    'tgl_bayar'    => $tgl_bayar,
    'biaya_tambahan' => $biaya,
    'diskon'      => $diskon,
    'pajak'      => $pajak,
    'status_transaksi'    => $status,
    'pembayaran'   => $pembayaran,
    'id_user'      => $user
]);

if ( $insert > 0 ) {
    header('location:dashboard.php');
} else {
    var_dump($insert);
    echo "Gagal..:(";
}

$tambah = $transaksi->insert('detail_transaksi',[
    'id_detail_transaksi'  =>'',
    'id_transaksi'         => $id_trans,
    'id_paket'             => $id_paket,
    'quantity'             => $jumlah,
    'keterangan'           => $keterangan
]);

if ( $tambah > 0 ) {
    header('location:dashboard.php');
} else {
    var_dump($tambah);
    echo "Gagal ditambahkan:(";
}