<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORM UBAH PAKET </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
.container{
    width: 80%;
    margin-top: 5%;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
    padding: 1cm;
    position: center;
    font-family: 'Quicksand', sans-serif;
}
</style>
<?php 
        require 'db.php';
        $id =$_GET['id'];
        $tampil = new Database();
        $paket = $tampil->getById('paket', ['id_paket' => $id]);
        foreach($paket as $pak):
        ?>
<div class="container">
<form action="proses_ubah_paket.php" method="POST">
    <h2 class="text-center"> FORM UBAH PAKET </h2>
    <div class="form-group">
    <label> Id Paket </label>
    <input type="text" class="form-control" name="id" Value="<?= $pak['id_paket'] ?>" readonly>
    <br> <br>
    <label> Id Outlet </label>
    <input type="text" name="nama" class="form-control" Placeholder="Nama Outlet" Value="<?= $pak['id_outlet'] ?>">
    <br> <br>
    <label> Jenis Paket </label>
    <select name="jenis_paket" class="form-control" id="">
        <option class="form-control" value="kiloan"> Kiloan </option>
        <option class="form-control" value="selimut"> Selimut </option>
        <option class="form-control" value="bed_cover"> Bed Cover </option>
        <option class="form-control" value="kaos"> Kaos </option>
        <option class="form-control" value="lain"> Lain-Lain </option> 
        </select>
    <br> <br>
    <label> Nama Paket </label>
    <input type="text" name="nama_paket" class="form-control" Value="<?= $pak['nama_paket'] ?>">
    <br> <br>
    <label> Harga </label>
    <input type="text" name="harga" class="form-control" Value="<?= $pak['harga'] ?>">
    <br> <br>
    <button type="Submit" class="btn btn-primary"> Ubah </button>
    </div>
</form>
</div>
        <?php endforeach; ?>
</body>
</html>