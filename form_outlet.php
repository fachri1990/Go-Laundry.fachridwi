<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> My Outlet </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

<style type="text/css">
    .bs-example{
    	margin: 20px;
      margin-left: 30%;
      font-family: 'Quicksand', sans-serif;
    }
</style>
</head>
<body>
<style>
        #sidebar{
          position: fixed;
          float: left;
          margin-right: 30px;
        }

    </style>
		
		<div class="wrapper d-flex align-items-stretch">
    <?php session_start(); ?>
			<nav id="sidebar" class="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(img/awan.jpg);">
	  			<div class="user-logo">
	  				<h2 > GO <br> LAUNDRY </h2>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
        <?php 
            if($_SESSION['role'] == "admin"){
              echo "
          <li class='active'> 
            <a href='dashboard.php'><span class='fa fa-home mr-3'></span> Dashboard </a>
          </li>";
            }else if($_SESSION['role'] == "kasir"){
              echo "
          <li class='active'> 
            <a href='dashbord.php'><span class='fa fa-home mr-3'></span> Dashboard </a>
          </li>";
            }
          ?>
          <?php 
            if($_SESSION['role']== "admin"){
              echo "
          <li>
              <a href='form_user.php'><span class='fa fa-download mr-3 notif'></span>  USER </a>
          </li>";
            }else if($_SESSION['role']== "owner"){
              echo "
          <li>
              <a href='form_user.php'><span class='fa fa-download mr-3 notif'></span>  USER </a>
          </li>";
            }
          ?>
          <?php 
            if($_SESSION['role']== "admin"){
              echo "
          <li>
            <a href='form_paket.php'><span class='fa fa-gift mr-3'></span> DAFTAR PAKET </a>
          </li>";
            }else if($_SESSION['role']== "owner"){
              echo "
          <li>
            <a href='form_paket.php'><span class='fa fa-gift mr-3'></span> DAFTAR PAKET </a>
          </li>";
            }
          ?>
          <?php 
            if($_SESSION['role']== "admin"){
              echo "
          <li>
            <a href='form_outlet.php'><span class='fa fa-trophy mr-3'></span> LIST OUTLET </a>
          </li>";
              }else if($_SESSION['role']== "owner"){
                echo "
          <li>
            <a href='form_outlet.php'><span class='fa fa-trophy mr-3'></span> LIST OUTLET </a>
          </li>";
              }
          ?>
          <li>
            <a href='list_transaksi.php'><span class='fa fa-cog mr-3'></span> LIST TRANSAKSI </a>
          </li>
          <li>
            <a href='form_member.php'><span class='fa fa-support mr-3'></span> DAFTAR MEMBER </a>
          </li>
  
          <br>
          <li>
            <a href="login.php" class="btn btn-danger" style="color: white;"><span class="fa fa-sign-out mr-3"></span> LOGOUT </a>
          </li>
        </ul>
      </nav>
<div class="bs-example">
<h2 class="text-center" > OUTLET YANG KAMI MILIKI </h2> <br>
<?php
    if($_SESSION['role'] == "admin"){
      echo"
<a href='form_tambah_outlet.php' class='btn btn-success' style='margin-bottom: 2cm;'> Tambah Outlet </a>"; 
}
?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Id Outlet </th>
                <th> Nama </th>
                <th> Alamat </th>
                <th> Telepon </th>
                <th> Option </th>
            </tr>
        </thead>
        <?php 
        require 'db.php';
        $db = new Database();
        $outlet = $db->getAll('outlet');
        foreach($outlet as $out):
        ?>
        <tbody>
            <tr>
                <td><?= $out ['id_outlet']?></td>
                <td><?= $out ['nama']?></td>
                <td><?= $out ['alamat']?></td>
                <td><?= $out ['telepon']?></td>
                <td><a href="form_ubah_outlet.php?id=<?= $out['id_outlet']; ?>" class="btn btn-success"> Update </a> 
                <a href="proses_hapus_outlet.php?id=<?= $out['id_outlet']; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini')" class="btn btn-danger"> Delete </a> </td>
            </tr>  
<?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>                            