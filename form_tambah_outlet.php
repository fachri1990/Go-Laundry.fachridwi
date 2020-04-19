<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORM TAMBAH OUTLET </title>
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
<form action="proses_tambah_outlet.php" method="POST">
    <h2 class="text-center"> TAMBAH OUTLET</h2> <br>
    <label> Nama Outlet </label>
    <input type="text" name="nama" class="form-control" Placeholder="Nama Outlet" required>
    <br> <br>
    <label> Alamat </label>
    <textarea name="alamat" class="form-control" id="" cols="10" rows="5" placeholder="Masukan Alamat Outlet..."></textarea>
    <br> <br>
    <label> Telepon </label>
    <input type="text" name="telp" class="form-control" Placeholder="Telepon">
    <br> <br>
    <button type="Submit" class="btn btn-primary"> Tambah </button>
</form>
</div>
</body>
</html>