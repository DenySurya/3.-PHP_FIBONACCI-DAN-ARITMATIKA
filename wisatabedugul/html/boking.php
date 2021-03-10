<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/book.css">
</head>
<body>

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

<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <img src="" alt="">
        <div class="registration-form">
        
            <form>
                <div class="form-icon">
                    <span><i class="icon icon-user"></i></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="username" placeholder="Username">
                </div>
                
                <div class="form-group">
                    <select class="form-control items" >
                      <option>Dtw Ulun Danu Beratan</option>
                      <option>Kebun Raya Eka Karya</option>
                      <option>Wisata Tepi Danau</option>
    
                    </select>
                  </div>
                
                <div class="form-group">
                    <input type="text" class="form-control item" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="#number-card" placeholder="Number Card">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="birth-date" placeholder="Date">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-block create-account">Booking Now</button>
                </div>
            </form>
            <div class="social-media">
                <h5>For More Information</h5>
                <div class="social-icons">
                    <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                    <a href="#"><i class="icon-social-google" title="Google"></i></a>
                    <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
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
      <div class="col text-center" >
        <p>Copyright 2021</p>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER -->

</html>
