<!doctype html>
<html lang="en">
  <head>
      <title>Welcome</title>
  <?php

    include 'alerts.php';
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <style>

    img {
    border: 2px solid #555;
    width: 480px;
    }

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
      <div class="row content">
          <h1 style="text-align: center;">Selamat Datang di hotel daffa</h1>
      </div>
      <div class="row content">
      <h3 style="text-align: center;"><i>"Hotel Nyaman, Aman, dan Murah"</i></h3>
      </div>

<table class="table table-borderless content">
  <thead>
    <tr>
    <h4 style="text-align: center;">Kami Menyediakan</h4>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
	  <td><div class="card text-center" style="">
  <img src="img/standard.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Standard Room</h5>
    <p style="text-align: justify;" class="card-text">Kamar standard room adalah tipe kamar hotel yang paling dasar di hotel. Fasilitas yang ditawarkan pun standar seperti kasur ukuran king size atau dua queen size.</p>
  </div>
</div></td>
      <td><div class="card text-center" style="">
  <img src="img/deluxe.jpeg" style="width: 395px;" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Deluxe Room</h5>
    <p style="text-align: justify;" class="card-text">Kamar ini tentu memiliki kamar yang lebih besar.  Tersedia pilihan kasur yang bisa kamu pilih, double bed atau twin bed. Biasanya, dari segi interior kamar ini terkesan lebih mewah.</p>
  </div>
</div></td>
      <td><div class="card text-center" style="">
  <img src="img/family.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Family Room</h5>
    <p style="text-align: justify;"class="card-text">Pergi traveling bersama keluarga besar atau teman-teman? Kamu bisa pilih tipe kamar hotel family room. Tipe kamar hotel family room ini biasanya tersedia satu tempat dengan ukuran king size dan satu tempat tidur dengan ukuran yang lebih kecil.</p>
  </div>
</div></td>
    </tr>
  </tbody>
</table>
<tr>
<td></td>
<td>
    <td><div class="card text-center" style="">
    <h3 class="card-title"><a class="nav-link" href="book.php">Pesan Sekarang</a></h3>

<iframe width="420" height="315"
src="https://www.youtube.com/embed/MjtMVhywI68?autoplay=1&mute=1&t=535s">
</iframe>
  <div class="card-body">
    <p class="card-text"></p>
  </div>
</div>
</td>
<td></td>
</tr>

  </body>
</html>