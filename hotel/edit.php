<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <?php
    //mengambil koneksi dan pesan
    include 'alerts.php';
    include 'koneksi.php';
    //default settings
    $id = $_GET['id'];
    $input = mysqli_query($conn, "SELECT * FROM tamu WHERE id='$id'");
    $data = mysqli_fetch_array($input);
    $tiperuangan = 0;
    $total = 0;
    $nama = "";
    $identitas = "";
    $tipeharga = "";
    $durasi = 0;
    $selected1 = "";
    $selected2 = "";
    $selected3 = "";
    $selected4 = "";
    $selected5 = "";
    $tanggal = "dd/mm/yyyy";
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
      max-width: 500px;
      margin: auto;
      background: white;
      padding: 10px;
    }

    </style>
    <title>Edit Data :<?php echo $data['nama']; ?></title>
  <body>
  <?php include 'nav.php'; ?>
    <div class="container">
    <div class="row content">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="glyphicon glyphicon-tag"></i> <b> Edit Booking Hotel </b> </h3>
          </div>
          <div class="panel-body">
            <form id="form_input" action="edit.php" method="post">
              <?php
                 if(isset($_POST['update'])){
                   $id = $_POST['id'];
                   $nama = $_POST['nama'];
                   $identitas = $_POST['identitas'];
                   $tanggal = $_POST['tanggal'];
  
                   if($_POST['jk'] == '1'){
                     $jk = 'Pria';
                   }
                   if($_POST['jk'] == '2'){
                    $jk = 'Wanita';
                  }
                   $update  = "UPDATE tamu SET nama='$nama', jk='$jk', identitas='$identitas', tanggal='$tanggal' WHERE id = '$id'";

                  mysqli_query($conn, $update) or die(mysqli_error($conn));
                  $data = mysqli_fetch_array($update);
                  echo "<script language=javascript>parent.location.href='harga.php';</script>";
                  }
               ?>
                 <div class="row">
                   <div class="col-xs-12 form-group">
                     <label class="control-label" for="id">Id </label>
                     <input readonly="true" type="text" class="form-control" name="id" id="id" value="<?php echo $data['id']; ?>" required>
                   </div>
                 </div>
                  <div class="row">
                   <div class="col-xs-12 form-group">
                     <label class="control-label" for="nama">Nama </label>
                     <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required>
                   </div>
                 </div>

                  <!-- field & combo jenis - hp -->
                  <?php 
                  $selected4 = "";
                  $selected5 = "";
                  if ($data['jk'] == 'Pria'){
                    $selected4 = 'selected';
                  } 
                  if ($data['jk'] == 'Wanita'){
                    $selected5 = 'selected';
                  } 
                  ?>
                 <div class="row">
                   <div class="col-xs-12 form-group">
                     <label for="sel1">Jenis Kelamin</label>
                     <select class="form-control" name="jk">
                       <option value="1" <?php echo $selected4;?>>Pria</option>
                       <option value="2" <?php echo $selected5;?>>Wanita</option>
                     </select>
                   </div>
                 </div>

                 <div class="row">
                 <div class="col-xs-12 form-group">
                     <label class="control-label" for="hp">Identitas</label>
                     <input onkeypress='validate(event)' type="text" class="form-control" minlength="16" maxlength="16" name="identitas" id="identitas" value="<?php echo $data['identitas']; ?>">
                   </div>
              </div>
                 <!-- akhir jns dan hp -->

                 <!-- combo jenis kamar-->


                 <!-- datepicker  -->
                 <div class="row">
                 <div class="col-xs-12 form-group">
                     <label>Tanggal</label>
                     <div class="input-group date " data-date="" data-date-format="yyyy/mm/dd">
                       <input class="form-control" type="text" name="tanggal" readonly="readonly" value="<?php echo $data['tanggal']; ?>">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                 </div>
                </div>
              </div>

                 <!-- akhir total -->

                 <!-- button -->
                 <div class="row">
                   <div class="col-xs-6 form-group">
                   <input type="submit" value="Update" name="update" class="btn btn-primary">
                 	 <a href="harga.php" class="btn btn-danger">Batal</a>
                 </div>
              </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
<!-- fungsi datepicker -->
    <script>
      $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
      function validate(evt) {
        var theEvent = evt || window.event;

  // Handle paste
      if (theEvent.type === 'paste') {
          key = event.clipboardData.getData('text/plain');
      } else {
      // Handle key press
          var key = theEvent.keyCode || theEvent.which;
          key = String.fromCharCode(key);
      }
      var regex = /[0-9]|\./;
      if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
      }
    }
    </script>

  </body>
</html>
