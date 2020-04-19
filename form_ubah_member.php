<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORM UBAH MEMBER</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<style>
.container{
    width: 70%;
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
        $member = $tampil->getById('member', ['id_member' => $id]);
        foreach($member as $mem):
        ?>
        <div class="container">
<form action="proses_ubah_member.php" method="POST">
    <h2> FORM UBAH MEMBER </h2>
    <label> Id Member </label>
    <input type="text" name="id" class="form-control" Value="<?= $mem['id_member'] ?>" readonly>
    <br> <br>
    <label> Nama Member </label>
    <input type="text" name="nama" class="form-control" Placeholder="Nama Outlet" Value="<?= $mem['nama'] ?>">
    <br> <br>
    <label> Alamat </label>
    <textarea name="alamat" id="" class="form-control" cols="30" rows="10"><?= $mem['alamat'] ?></textarea>
    <br> <br>
    <label> Jenis Kelamin </label>
    <select name="jenis_kelamin" class="form-control">
    <option value="L"> Laki-Laki </option>
    <option value="P"> Perempuan </option>
    </select>
    <br> <br>
    <label> Telepon </label>
    <input type="text" class="form-control" name="telepon" Placeholder="Telepon" Value="<?= $mem['telepon'] ?>">
    <br> <br>
    <button type="Submit" class="btn btn-primary"> Ubah </button>
</form>
</div>
        <?php endforeach; ?>
</body>
</html>