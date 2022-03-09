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
          <h1 style="text-align: center;">Tentang Kami</h1>
      </div>

<table class="table table-borderless content">
  <thead>
    <tr>
    <h4 style="text-align: center;">Hotel Daffa</h4>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
	  <td></td>
      <td>
        <div class="card text-center" style="">
          <div class="card-body">
            <p style="text-align: center;" class="card-text">Terletak di bogor, kami berusaha menyediakan hotel termurah dan ternyaman se indonesia</p>
          </div>
         </div>
      </td>
      <td></td>
    </tr>
  </tbody>
</table>

<table class="table table-borderless content">
    <tbody>
        <tr>
            <td class="row">
         <div class="card text-center" style="">
              <div class="card-body">
                    <h3>
                    &nbsp
                    </h3>
                    <h3>
                    Contact Us!
                    </h3>
                     <h3>
                     &nbsp
                    </h3>
              </div>
         </div>
            </td>
            <td></td>
            <td>
            <h3>
            <a href="#"> Whatsapp </a>
            </h3>
             <h3>
            <a href="#"> Facebook </a>
            </h3>
            <h3>
            <a href="#"> Instagram </a>
            </h3>
            </td>
        </tr>
    </tbody>
</table>


  </body>
</html>