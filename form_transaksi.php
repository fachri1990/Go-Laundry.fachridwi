<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <title> Silahkan Transaksi </title>
</head>
<style>
.container{
    width: 80%;
    margin-top: 5%;
    box-shadow: 0 5px 20px rgba(0,0,0,1);
    padding: 1cm;
    position: center;
    font-family: 'Quicksand', sans-serif;
}
</style>
<body>
<div class="container">
<form class="form" action="proses_transaksi.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label> Id Outlet </label>
        <?php 
        $id   = $_GET['id'];
        require 'db.php';
        $db = new Database();
        
        $query = mysqli_query($db->connect(), "SELECT * FROM paket INNER JOIN outlet ON paket.id_outlet=outlet.id_outlet WHERE paket.id_paket='$id'");
        while ($out = mysqli_fetch_array($query, MYSQLI_ASSOC)):
        ?>
        <input type="text" name="id_outlet" class="form-control" value="<?= $out['id_outlet']; ?>" >
        <?php endwhile; ?>
    </div>
    <div class="form-group col-md-6">
      <label> Nama Member </label>
      <select name="id_member" class="form-control">
        <?php 
        $db = new Database();
        $member = $db->getAll('member');
        foreach($member as $mem):
        ?>
        <option value="<?= $mem['id_member']; ?>" class="form-control"> <?= $mem['nama']; ?> </option> 
        <?php endforeach; ?>
        </select>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label> Nama Paket </label>
    <?php 
    $id   =$_GET['id'];
    $db = new Database();
        $paket = $db->getById('paket', ['id_paket' => $id]);
        foreach($paket as $pak):
        ?>
    <input type="text" name="id_paket" class="form-control" value="<?= $pak['nama_paket']; ?>">
    <?php endforeach; ?>
  </div>
  <div class="form-group col-md-6">
    <label> Harga </label>
    <?php 
        $idku   =$_GET['id'];
        $db = new Database();
        $harga = $db->getById('paket', ['id_paket' => $idku]);
        foreach($harga as $har):
        ?>
    <input type="text" name="harga" id="harga" class="form-control" value="<?= $har['harga']; ?>" onkeyup="sum();" readonly >
    <?php endforeach; ?>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label> Id Transaksi </label>
      <input type="text" class="form-control" name="id_transaksi" value="<?php echo(rand()); ?>" readonly>
    </div>
  <div class="form-group col-md-6">
      <label> Jumlah </label>
      <input type="number" id="jumlah" class="form-control" name="jumlah" placeholder="Masukan Jumlah" onkeyup="sum();">
    </div>
    </div> 
    <div class="form-row">
    <div class="form-group col-md-6">
      <label> Tanggal </label>
      <input type="date" class="form-control" name="tanggal">
    </div>
    <div class="form-group col-md-6">
      <label> Deadline </label>
      <input type="date" class="form-control" name="batas_waktu" placeholder="Deadline">
    </div>
    </div> 
    <div class="form-row">
  <div class="form-group col-md-6">
    <label> Tanggal Bayar </label>
    <input type="date" class="form-control" name="tgl_bayar" placeholder="Tanggal Bayar ">
  </div>
  <div class="form-group col-md-6">
    <label> Biaya Tambahan </label>
    <input type="text" name="biaya_tambahan" class="form-control" id="biaya" onkeyup="sum();" value="5000" readonly >
  </div>
  </div> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label> Discount </label>
      <input type="text" name="diskon" class="form-control" id="inputCity">
    </div> 
    <div class="form-group col-md-6">
      <label> Pajak </label>
      <input type="text" name="pajak" class="form-control" value="3000" id="pajak" readonly>
    </div>
    </div> 
    <div class="form-row">
    <div class="form-group col-md-6">
      <label> Status Transaksi </label>
      <select name="status" class="form-control">
      <option selected> Pilih </option>
      <option value="baru"> Baru </option>
      <option value="proses"> Sedang Proses</option>
      <option value="dibayar"> Selesai </option>
      <option value="diambil"> Diambil / Diantar </option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label> Pembayaran </label>
      <select name="pembayaran" class="form-control">
        <option selected> Pilih </option>
        <option value="dibayar"> Dibayar </option>
        <option value="belum_dibayar"> Belum Dibayar </option>
      </select>
    </div> 
    </div> 
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState"> Penanggung Jawab Member </label>
      <select name="id_user" class="form-control">
        <?php 
        $db = new Database();
        $user = $db->getAll('user');
        foreach($user as $use):
        ?>
        <option value="<?= $use['id_user']; ?>" class="form-control"> <?= $use['nama']; ?> </option> 
        <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group col-md-6">
    <label> Kode Invoice </label>
    <input type="text" name="kode_invoice" class="form-control" value="<?php echo(rand()); ?>" >
  </div>
  </div> 
  <div class="form-row" >
  <div class="form-group col-md-6">
    <label> Total Harga </label>
    <input type="text" name="total_harga" class="form-control" id="total_harga" >
    <script>
function sum() {
      var txtFirstNumberValue = document.getElementById('harga').value;
      var txtSecondNumberValue = document.getElementById('jumlah').value;
      var txtThirdNumberValue = document.getElementById('biaya').value;
      var txtFourthNumberValue = document.getElementById('pajak').value;
      var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue)+ parseFloat(txtThirdNumberValue) + parseFloat(txtFourthNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total_harga').value = result;
      }
}
</script>
  </div>
  <div class="form-group col-md-6">
    <label> Keterangan </label>
    <input type="text" name="keterangan" class="form-control" >
  </div>
    </div>
    <br> <br>
  <button type="submit" name="bayar" class="btn btn-primary"> Masukan </button>
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
