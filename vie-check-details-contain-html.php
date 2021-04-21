<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Check Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Google Font Links -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Montserrat:wght@800&display=swap" rel="stylesheet">

    <!-- Favicon Link -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FontAwesome Link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--style sheet link -->
    <link rel="stylesheet" href="style.css">
    <!--php file link-->
    <?php include('vie-check-details-contain-php.php') ?>
  </head>
  <body>
  <!-- navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand  href="">Vie</a>
    <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item1">
            <a class="nav-link" href="vie-home-page.php">Home</a>
          </li>
          <li class="nav-item2">
            <a class="nav-link" href="vie Students contain php.php">Students</a>
          </li>
          <li class="nav-item3">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item5">
            <a class="nav-link" href="vie notes contain html.php">Prepare your Notes</a>
          </li>
          <li class="nav-item5">
            <a class="nav-link" href="vie-helping-hand-contain-html.html">Helping Hand</a>
          </li>
          <li class="nav-item5">
            <a class="nav-link" href="vie logout.php">Log Out</a>
          </li>
        </ul>
      </div>
  </nav>
<br><br>
<h4 style = "text-align : center"> Please Provide following information to update your credentials</h4>

<!-- form for login -->
<br><br>
<div class="container">
<form method = "POST" action = "">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><h3>Email</h3></label>
    <input type="email" name = "email" class="form-control" placeholder = "Enter email i'd" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><h3>Mobile No</h3></label>
    <input type="tel" name = "MobileNo" class="form-control" placeholder = "Enter Mobile Number" id="exampleInputPassword1">
  </div>
  <input type="submit" name="submit" class="btn btn-primary">
</form>
<!-- footer section -->
<footer id="footer">
    <div class="footer-icon">
      <i class="fab fa-twitter fa-2x"></i>
      <i class="fab fa-facebook-f fa-2x"></i>
      <i class="fab fa-instagram fa-2x"></i>
      <i class="fas fa-envelope-square fa-2x"></i>
    </div>
    <p class="footer-txt">© Copyright 2021 Vie</p>
  </footer>
  </body>
</html>