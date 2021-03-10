<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fibonacci.css">
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
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

    <!----Rumus -->

    <?php

    $input1 = "";           //input1
    $input2 = "";           //input2
    $hasil = "";            //hasil
    $deret = "";            //deret yang ditampilin
    $jmlderet = "";         //jml deret

    if (isset($_POST['submit'])) {      //cek jika tombol submit ditekan

        $input1 = $_POST["input1"];
        $input2 = $_POST["input2"];
        $jmlderet = $_POST["jmlderet"];

        //fibonacci

        $a = $input1;
        $b = $input2;
        $n = $jmlderet;

        $deret = $a . ", " . $b;
        for ($i = 0; $i < $n - 2; $i++) {

            $hasil = $a + $b;

            $a = $b;
            $b = $hasil;
            $deret = $deret . ", " . $hasil;
        }
    }
    ?>



    <!-- JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <img src="" alt="">
            <div class="registration-form">

                <form method="POST" action="#">
                    <h1>FIBONACCI</h1>
                    <div class="form-group">
                        <input type="number" class="form-control item" name ="input1" placeholder="Input 1" value="<?php echo $input1; ?>
                </div>
                
                <div class=" form-group">
                        <input type="text" class="form-control item" name="input2" placeholder="Input 2" value="<?php echo $input2; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control item" name="jmlderet" placeholder="Jumlah Deret" value="<?php echo $jmlderet; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-block create-account">Hasil</button>
                    </div>



                </form>
                
                <div class="social-media">
                    <br>
                    <div class="form-group">
                        <h5> <b> Jumlah </b></h5>
                        <h4> <?php echo $deret ?></h4>
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

<!-- FOOTER -->
<footer class="bg-dark text-white">
    <div class="container">
        <div class="row pt-3">
            <div class="col text-center">
                <p>Copyright 2021</p>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER -->

</html>