<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Detail Transaksi | Go Laundry </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
<h2 class="text-center" style=""> DETAIL TRANSAKSI  </h2> 
<a href="register_member.php" class="btn btn-success" style="margin-bottom: 2cm;"> Tambahkan List </a>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>Id </th>
                <th> Id Transaksi </th>
                <th> Id Paket </th>
                <th> Quantity </th>
                <th> Keterangan </th>
                <th> Option </th>
            </tr>
        </thead>
        <?php 
        require 'db.php';
        $db = new Database();
        $admin = $db->getAll('detail_transaksi');
        foreach($admin as $adm):
        ?>
        <tbody>
            <tr>
                <td><?= $adm ['id_detail_transaksi']?></td>
                <td><?= $adm ['id_transaksi']?></td>
                <td><?= $adm ['id_paket']?></td>
                <td><?= $adm ['quantity']?></td>
                <td><?= $adm ['keterangan']?></td>
                <td><a href="form_ubah_detrans.php?id=<?= $adm['id_detail_transaksi']; ?>" class="btn btn-success"> Update </a> 
                <a href="proses_hapus_detrans.php?id=<?= $adm['id_detail_transaksi']; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini')" class="btn btn-danger"> Delete </a> </td>
            </tr>  
<?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>                            