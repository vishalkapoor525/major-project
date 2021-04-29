<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:vie login contain html.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <title>Vie</title>

  <!-- Bootstrap Links -->
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



  <!-- Stylesheet -->
  <link rel="stylesheet" href="vie-home-page.css">

</head>

<body>
  <section id="title">

    <div class="container-fluid">


      <!-- Nav Bar -->
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
                <a class="nav-link" href="vie Students contain html.html">Students</a>
              </li>
              <li class="nav-item5">
                <a class="nav-link" href="vie-progress-chart.php">Progress</a>
              </li>
              <li class="nav-item5">
                <a class="nav-link" href="vie notes.php">Prepare your Notes</a>
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

      <!-- Title -->
      <div class="title-div">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="title-txt">Welcome <?php echo $_SESSION['username']?> </h1><br>
          <h1 class="title-txt">We simplify the process of exam's preparation for both students and teachers.</h1>
          <button type="button" class="btn btn-dark btn-lg btn-1"><i class="fab fa-apple"></i> Download</button>
          <button type="button" class="btn btn-outline-dark btn-lg btn-2"><i class="fab fa-google-play"></i> Download</button>
        </div>
        <div class="col-lg-6">
          <img class="title-img" src="<?php echo $_SESSION["pic"] ?>" alt="Profile Photo">
        </div>

      </div>
</div>

    </div>
  </section>


  <section id="features">
    <div class="row">
      <div class="col-lg-4 circle">
        <i class="fas fa-check-circle fa-9x icon"></i>
        <h3 class="features-txt">Easy to use.</h3>
      </div>
      <div class="col-lg-4 book">
        <i class="fas fa-book-open fa-9x icon"></i>
        <h3 class="features-txt">Updated and quality content.</h3>

      </div>
      <div class="col-lg-4 coins">
        <i class="fas fa-coins fa-9x icon"></i>
        <h3 class="features-txt">Free to use.</h3>

      </div>
    </div>

  </section>

  <section id="functions">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="function-txt">We support classes from 8th to 12th.</h2>
        </div>
        <div class="carousel-item">
          <h2 class="function-txt">Chapter wise notes.</h2>
          <p class="function-def">Learn from our customized and top-notch notes.</p>
        </div>
        <div class="carousel-item">
          <h2 class="function-txt">Chapter wise and term wise assessments.</h2>
          <p class="function-def">Test yourself with our exam oriented and customized assessments.</p>
        </div>
        <div class="carousel-item">
          <h2 class="function-txt">Assessment wise leaderboard.</h2>
          <p class="function-def">Compete with the best fellow students.</p>
        </div>
        <div class="carousel-item">
          <h2 class="function-txt">Performance analysis.</h2>
          <p class="function-def">Keep track of your progress.</p>
        </div>
        <div class="carousel-item">
          <h2 class="function-txt">Personalized notes making.</h2>
          <p class="function-def">Create and save your own notes.</p>
        </div>
        <div class="carousel-item">
          <h2 class="function-txt">Dedicated assessments accessible only to teachers.</h2>
          <p class="function-def">Teachers can trust our assessments to astonish their students.</p>
        </div>
        <div class="carousel-item">
          <h2 class="function-txt">Helping hand.</h2>
          <p class="function-def">If you are capable then please help your fellow mates and if you are needy then feel free to take help from your fellow mates.</p>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>

  <!-- Founders -->
  <section id="founder">

    <h1 class="founder-heading">Our Founders.</h1>
    <div class="row founder-row">
      <div class="col-lg-4 founder-col">
        <img class="founder-img" src="ramanand.jpeg" alt="ramanand-profile">
        <h3 class="founder-txt">Ramanand.</h3>
        <p class="founder-def">Computer Science Engineering Student.</p>
      </div>
      <div class="col-lg-4 founder-col">
        <img class="founder-img" src="vishal.jpeg" alt="vishal-profile">
        <h3 class="founder-txt">Vishal Kapoor.</h3>
        <p class="founder-def">Computer Science Engineering Student.</p>
      </div>
      <div class="col-lg-4 founder-col pks">
        <img class="founder-img" src="praveen.jpeg" alt="praveen-profile">
        <h3 class="founder-txt">Praveen Kumar Singh.</h3>
        <p class="founder-def">Computer Science Engineering Student.</p>
      </div>
    </div>
  </section>

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