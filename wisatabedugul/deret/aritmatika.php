<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/aritmatika.css">
    <title>Hello, world!</title>
  </head>
  
  
  <body id="page-top">
  <!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top" >
    <div class="container">
    <a class="navbar-brand" href="#">WISATA BEDUGUL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">HOME<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../deret/fibbonacci.php">FIBONACCI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../deret/aritmatika.php">ARITMATIKA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../html/boking.php">BOOKING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>
    </div>
    </div>
</nav>
<!-- NAVBAR -->

<!-- RUMUS -->
<?php

$suku1 = "";           //input1
$beda = "";            //input2
$suku_n = "";          //suku ke - n
$baris = "";           //baris yang akan disimpan
$baristampil = "";       //baris yang akan tampil
$hasil = "";           //hasil yang akan tampil


if (isset($_POST['submit'])) {      //cek jika tombol submit ditekan

    $suku1 = $_POST["suku1"];
    $beda = $_POST["beda"];
    $suku_n = $_POST["suku_n"];

    //aritmatika

    $a = $suku1;
    $b = $beda;
    $n = $suku_n;

    //suku ke n
    $hasil = $a + ($n - 1) * $b;

    //tampilan baris
    for ($i = 1; $i < $n + 1; $i++) {
        $baris = $a + ($i - 1) * $b;
        $baristampil .= $baris . " ";
    }
}
?>
<!-- RUMUS -->
 <!-- KONTEN -->
 <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <img src="" alt="">
            <div class="registration-form">

                <form method="POST" action="#">
                    <h1>ARITMATIKA</h1>
                    <div class="form-group">
                        <input type="number" class="form-control item" name ="suku1" placeholder="Suku 1" value="<?php echo $suku1; ?>">
                </div>
                
                <div class=" form-group ">
                        <input type="text" class="form-control item" name="beda" placeholder="Beda" value="<?php echo $beda; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control item" name="suku_n" placeholder="Suku Ke N" value="<?php echo $suku_n; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-block create-account">Hasil</button>
                    </div>



                </form>
                
                <div class="social-media">
                    <br>
                    <div class="form-group">
                        <h5> <b> Suku Ke-N (UN)  </b></h5>
                        <h4> <?php echo $hasil ?></h4>
                    </div>

                    <div class="form-group">
                        <h5> <b> Baris Aritmatika </b></h5>
                        <h4> <?php echo $baristampil ?></h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- JUMBOTRON -->


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="../html/app.js"></script>
</body>
 <!-- KONTEN -->
</body>

<!-- FOOTER -->
<footer class="bg-dark text-white">
  <div class="container">
    <div class="row pt-3">
      <div class="col text-center" >
        <p>Deny Surya | Copyright 2021</p>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER -->
