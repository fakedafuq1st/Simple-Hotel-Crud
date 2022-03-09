<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Booking</title>
    <?php
  // memasukan koneksi dan notifikasi
    include 'alerts.php';
    include 'koneksi.php';
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

  </head>
  <body>
        <?php include 'nav.php'; 

              //Declare Variables for default
              $nama = "";
              $identitas = "";
              $hargakamar = "";
              $durasi = 0;
              $tipekamar = 0;
              $tanggal = "dd/mm/yyyy";
              $total = 0;
              $selected1 = "";
              $selected2 = "";
              $selected3 = "";
              $selected4 = "";
              $selected5 = "";
              
              if(isset($_POST['calculate'])){

              //Declare Variables for Price
              $standar = 300000;
              $deluxe = 500000;
              $family = 1200000;
              $hargasarapan = 80000;

              //Calculating tergantung dari jenis kamar.
              if($_POST['tipekamar'] == '1'){
                $selected1 = "selected";
                $hargakamar = 300000;
                $hargaawal = $standar * $_POST['durasi'];
                $total = $hargaawal;
              }
              if($_POST['tipekamar'] == '2'){
                $selected2 = "selected";
                $hargakamar = 500000;
                $hargaawal = $deluxe * $_POST['durasi'];
                $total = $hargaawal;
              }
              if($_POST['tipekamar'] == '3'){
                $selected3 = "selected";
                $hargakamar = 1200000;
                $hargaawal = $family * $_POST['durasi'];
                $total = $hargaawal;
              }
               //memberikan diskon jika durasi lebih dari 3
               if($_POST['durasi'] <= 0){
               writeMsg('durasi.error');
               }
               elseif($_POST['durasi'] > 3){
                 $hargadiskon = $total * 0.1;
                 $diskon = $total - $hargadiskon;
                 $total = $diskon;
               }
               //memberikan tambahan uang jika memakai sarapan
               if(isset($_POST['breakfast'])){
                $biayasarapan = $total + $hargasarapan;
                $total = $biayasarapan;
              }

                //Mengisi form seperti sebelum melakukan kalkulasi
                $nama = $_POST['nama'];
                if ($_POST['jk'] == '1'){
                $selected4 = "selected";
                }
                if ($_POST['jk'] == '2'){
                $selected5 = "selected";
                }
                $identitas = $_POST['identitas'];
                $tanggal = $_POST['tanggal'];
                $durasi = $_POST['durasi'];
            }
               if(isset($_POST['save'])){
                
                 $nama = $_POST['nama'];
                 $jk = $_POST['jk'];
                 $identitas = $_POST['identitas'];
                 $hargakamar = $_POST['harga'];
                 $tanggal = $_POST['tanggal'];
                 $durasi = $_POST['durasi'];
                 $totalharga = $_POST['total'];

                 if($_POST['jk'] == '1'){
                   $jk = 'Pria';
                 }
                 if($_POST['jk'] == '2'){
                  $jk = 'Wanita';
                }

                 if(isset($_POST['breakfast'])){
                  $breakfast = 'Y';
                } else {
                  $breakfast = 'N';
                }

                if($_POST['tipekamar'] == '1'){
                  $namatipe = 'Standard';
                }
                if($_POST['tipekamar'] == '2'){
                  $namatipe = 'Deluxe';
                }
                if($_POST['tipekamar'] == '3'){
                  $namatipe = 'Family';
                }

                 $insert  = "INSERT INTO tamu (nama, jk, identitas, tipe, harga, tanggal, durasi, breakfast, total) VALUES('$nama', '$jk', '$identitas', '$namatipe', '$hargakamar', '$tanggal', '$durasi', '$breakfast', '$totalharga');";
                 mysqli_query($conn, $insert) or die(mysqli_error($conn));
                 writeMsg('data.saved');

                 //reset setelah simpan
                 $tipekamar = 0;
                 $total = 0;
                 $nama = "";
                 $identitas = "";
                 $hargakamar = "";
                 $durasi = 0;
                 $selected1 = "";
                 $selected2 = "";
                 $selected3 = "";
                 $selected4 = "";
                 $selected5 = "";
                 $tanggal = "dd/mm/yyyy";
                }
                
                if(isset($_POST['reset'])){
                  $tipekamar = 0;
                  $total = 0;
                  $nama = "";
                  $identitas = "";
                  $hargakamar = "";
                  $durasi = 0;
                  $selected1 = "";
                  $selected2 = "";
                  $selected3 = "";
                  $selected4 = "";
                  $selected5 = "";
                  $tanggal = "dd/mm/yyyy";
                  }
               ?>

    <div class="container">
        <div class="row content">
        <div class="col">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center;"><b>Form Pemesanan</b> </h3>
          </div>
          <div class="panel-body">
            <form id="form_input" action="book.php" method="post">
              <?php 
              include 'koneksi.php';
              ?>
                 <div class="row content">
                   <div class="col-xs-12 form-group">
                     <label class="control-label" for="nama">Nama Pemesan</label>
                     <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>" required>
                   </div>
                 </div>

                  <!-- field & combo jenis - hp -->
                 <div class="row content">
                   <div class="col-xs-12 form-group">
                     <label for="sel1">Jenis Kelamin</label>
                     <select class="form-control" name="jk">
                       <option value="">Pilih jenis kelamin</option>
                       <option value="">-------------------</option>
                       <option value="1" <?php echo $selected4;?>>Pria</option>
                       <option value="2" <?php echo $selected5;?>>Wanita</option>
                     </select>
                   </div>
                 </div>

                 <div class="row content">
                 <div class="col-xs-12 form-group">
                     <label class="control-label" for="hp">Identitas (KTP/SIM)</label>
                     <input onkeypress='validate(event)' type="text" class="form-control" minlength="16" maxlength="16" name="identitas" id="identitas" value="<?php echo $identitas;?>">
                   </div>
              </div>
                 <!-- akhir jns dan hp -->

                 <!-- combo jenis kamar-->
                 <div class="row content">
                   <div class="col-xs-12 form-group">
                     <label for="sel1">Tipe Kamar</label>
                     <select class="form-control" name="tipekamar">
                      <option value="">Pilih jenis kamar</option>
                      <option value="">-------------------</option>
                       <option value="1" <?php echo $selected1;?>>Standard room</option>
                       <option value="2" <?php echo $selected2;?>>Deluxe room</option>
                       <option value="3" <?php echo $selected3;?>>Family room</option>
                     </select>
                   </div>
                 </div>

                 <div class="row content">
                   <div class="col-xs-12 form-group">
                     <label class="control-label" for="nama">Durasi Menginap</label>
                     <input type="number" class="form-control" name="durasi" id="durasi" value="<?php echo $durasi; ?>" required>
                   </div>
                 </div>

                 <div class="row content">
                   <div class="col-xs-12 form-group">
                     <label class="control-label" for="nama">Harga</label>
                     <input type="text" class="form-control" name="harga" id="harga" readonly="true" value="<?php echo $hargakamar; ?>" required>
                   </div>
                 </div>
                 <!-- Akhir combo jenis kamar -->

                 <!-- datepicker  -->
                 <div class="row content">
                 <div class="col-xs-12 form-group">
                     <label>Tanggal</label>
                     <div class="input-group date " data-date="" data-date-format="yyyy/mm/dd">
                       <input class="form-control" type="text" name="tanggal" readonly="readonly" value="<?php echo $tanggal; ?>">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                 </div>
                </div>
              </div>
                  <div class="row content">
                 <div class="col-xs-12 form-group">
                 <label>Termasuk Breakfast?</label>
                  <input class="form-check-input" type="checkbox" value="Y" <?php if(isset($_POST['breakfast'])) echo "checked='checked'"; ?> name="breakfast">
                   </div>
              </div>
                  
                 <!-- text total -->
                 <div class="row content">
                   <div class="col-xs-12 form-group">
                   <label for="comment">Total</label>
                   <input type="text" class="form-control" name="total" id="total" value="<?php echo $total; ?>" readonly="true" required>
                 </div>
              </div>
                 <!-- akhir total -->

                 <!-- button -->
                 <div class="row content">
                   <div class="col-xs-12 form-group">
                  <input type="submit" value="Hitung" name="calculate" class="btn btn-info">
                  <input type="submit" value="Simpan" name="save" class="btn btn-primary">
                  <input type="submit" value="Cancel" nama="reset" class="btn btn-danger">
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
<!-- fungsi datepicker untuk otomatis menutup dan memilih hari ini. -->
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
