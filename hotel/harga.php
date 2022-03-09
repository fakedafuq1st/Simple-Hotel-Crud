<!doctype html>
<html lang="en">
  <head>
      <title>Daftar Harga dan booking</title>
  <?php

    include 'alerts.php';
    include 'koneksi.php';
    $sql = mysqli_query($conn,"SELECT * FROM tamu ORDER BY id ASC");
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <style>
    .row row-centered-centered {
    text-align:center;
    }
    .col-centered {
        display:inline-block;
        float:none;
        /* reset the text-align */
        text-align:left;
        /* inline-block space fix */
        margin-right:-4px;
    }

    .content {
      max-width: 1000px;
      margin: auto;
      background: white;
      padding: 10px;
    }

    </style>

  </head>
  <body>
       <?php include 'nav.php'; ?>
  <div class="container">
    <div class="row content">
      <div class="col-md-12">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title"  style="text-align: center;"><i class="glyphicon glyphicon-usd"></i><b> Daftar Harga kamar </b> <i class="glyphicon glyphicon-usd"></i></h3>
          </div>
          <div class="panel-body">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col content">No</th>
      <th scope="col content">Jenis Kamar</th>
      <th scope="col content">Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Standard</td>
      <td>Rp.300.000/malam</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Deluxe</td>
      <td>Rp.500.000/malam</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Family</td>
	  <td>Rp.1.200.000/malam</td>
    </tr>
  </tbody>
</table>
             </div>
          </div>
        </div>
    </div>
</div>
<div class="row content">
      	<div class="col-md-12">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title"  style="text-align: center;"><i class="glyphicon glyphicon-bookmark"></i><b> List Booking </b><i class="glyphicon glyphicon-bookmark"></i></h3>
            </div>
        <div class="panel-body">
      		 <table class="table table-hover table-bordered">
      			<thead>
      			  <tr class="info">
                  <th>no</th>
                  <th>id</th>
                  <th>Nama</th>
                  <th>Identitas</th>
                  <th>Tanggal</th>
                  <th><center>ACTION</center></th>
      				</tr>
      			</thead>
            <tbody>

                <?php
                $no=1;
                ?>
                <?php while ($row = mysqli_fetch_array($sql)) { ?>
                <tr class="striped">
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['identitas']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                <td align="center">
                  <a href="detail.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> Detail</a>
                  <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
                  <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick ="if (!confirm('Apakah Anda yakin akan menghapus data ini?')) return false;" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a>
                </td>
              </tr>
                <?php   }   ?>
          </tbody>
      		</table>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>