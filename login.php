<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<style>
.container{
    width: 30%;
    margin-top: 5%;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
    padding: 1.5cm;
    font-family: 'Quicksand' sans-serif;
}
.btn{
    width: 48%;
}
</style>
<div class="container">
<form action="proses_login.php" METHOD="POST">
    <h2 class="text-center"> SILAHKAN LOGIN </h2>
    <hr>
        <div class="form-group">
        <label> Username </label>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <br>
        </div>
        <label> Password </label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <br>
        <br>
        <button type="submit" name="login" class="btn btn-primary"> Login </button>
        <button type="reset" class="btn btn-danger"> Reset </button>
        
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