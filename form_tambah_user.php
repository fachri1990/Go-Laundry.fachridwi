<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORM TAMBAH USER </title>
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
<form action="proses_tambah_user.php" method="POST">
    <h2 class="text-center"> TAMBAH USER </h2> <br>
    <label> Nama </label>
    <input type="text" name="nama" class="form-control" Placeholder="Nama" required>
    <br> <br>
    <label> Username </label>
    <input type="text" name="username" class="form-control" Placeholder="Username" required>
    <br> <br>
    <label> Password </label>
    <input type="password" name="password" class="form-control" Placeholder="Password Anda">
    <br> <br>
    <label> Nama Outlet </label>
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
        <br> <br>
    <label> Role </label>
    <select name="role" class="form-control">
        <option class="form-control" value="admin"> Admin </option>
        <option class="form-control" value="kasir"> Kasir </option>
        <option class="form-control" value="owner"> Owner </option> 
        </select>
    <br> <br>
    <button type="Submit" class="btn btn-primary"> Tambah </button>
</form>
</div>
</body>
</html>