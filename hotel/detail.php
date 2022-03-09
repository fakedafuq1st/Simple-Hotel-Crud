<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Detail</title>
    <?php
    //Mengambil Koneksi dan notifikasi
    include 'alerts.php';
    include 'koneksi.php';
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <style>
        .content {
      max-width: 1000px;
      margin: auto;
      background: white;
      padding: 10px;
    }
</style>
</head>
<body>
<div class="container">
    <br>
    <a class="btn" href="harga.php"><span class="glyphicon glyphicon-arrow-left"></span>  Back</a><br><br>
    <?php

   $id= $_GET['id']; //mengambil ID dari page sebelumnya.
   $detaildata = mysqli_query($conn, "SELECT * from tamu where tamu.id='$id' LIMIT 1") or die(mysqli_error()); // menghubungkan ke database
    while ($data=mysqli_fetch_array($detaildata)){ //mengambil data dari database
    ?>
    <div class="row content">
      <div class="col-md-12 content">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center;"><b> Detail Booking</b> </h3>
          </div>
      <div class="panel-body content">
        <table class="table table-responsive table-striped">
          <tbody>
            <tr>
                <td><b>Nama Pemesan<b></td>
                <td>: <?php echo $data['nama'] ?></td>
            </tr>
            <tr>
                <td><b>Nomor Identitas<b></td>
                <td>: <?php echo $data['identitas'] ?></td>
            </tr>
            <tr>
                <td><b>Jenis Kelamin</b></td>
                <td>: <?php echo $data['jk'] ?></td>
            </tr>
            <tr>
                <td><b>Tipe Kamar<b></td>
                <td>: <?php echo $data['tipe'] ?></td>
            <tr>
                <td><b>Durasi Penginapan<b></td>
                <td>: <?php echo $data['durasi'] ?> Hari</td>
            </tr>
            <?php
            if ($data['durasi'] > 3){
                $diskon = '10%';
            } else{
                $diskon = 'Tidak Mendapatkan Diskon';
            }
            ?>
            <tr>
                <td><b>Discount<b></td>
                <td>: <?php echo $diskon?></td>
            </tr>
            <tr>
                <td><b>Total<b></td>
                <td>: <?php echo $data['total'] ?></td>
            </tr>
            <tbody>
        </table>
      </div>
    </div>
        <?php
    }
    ?>
</div>
