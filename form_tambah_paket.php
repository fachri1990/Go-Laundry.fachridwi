<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <title> FORM TAMBAH PAKET </title>
</head>
<body>
<style>
.container{
    width: 50%;
    margin-top: 5%;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
    padding: 1.5cm;
    font-family: 'Quicksand', sans-serif;
}
.btn{
    width: 20%;
    position: center;
}
</style>
<div class="container">
<form action="proses_tambah_paket.php" METHOD="POST">
    <h2 class="text-center"> Tambah Paket </h2>
    <hr>
    <div class="form-group">
        <label> Pilih Outlet  </label>
        <select name="id_outlet" class="form-control">
        <?php 
        require 'db.php';
        $db = new Database();
        $outlet = $db->getAll('outlet');
        foreach($outlet as $out):
        ?>
        <option value="<?= $out['id_outlet']; ?>" class="form-control"> <?= $out['nama']; ?> </option> 
        <?php endforeach; ?>
        </select>
        </div>
        <div class="form-group">
        <label> Jenis Paket </label>
        <select name="jenis_paket" class="form-control" id="">
        <option class="form-control" value="kiloan"> Kiloan </option>
        <option class="form-control" value="selimut"> Selimut </option>
        <option class="form-control" value="bed_cover"> Bed Cover </option>
        <option class="form-control" value="kaos"> Kaos </option>
        <option class="form-control" value="lain"> Lain-Lain </option> 
        </select>
        </div>
        <div class="form-group">
        <label> Nama Paket  </label>
        <input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket">
        </select>
        </div>
        <br>
        <div class="form-group">
        <label> Harga </label>
        <input type="number" class="form-control" name="harga" Placeholder="Harga">
        </div>
        <br> <hr>
        <center><button type="submit" class="btn btn-primary"> Tambah </button></center>
        
    </form>
    </div>
    
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>