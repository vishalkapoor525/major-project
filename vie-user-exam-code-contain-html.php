<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

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

    <!--style sheet -->
    <link rel="stylesheet" href="style.css">
    
    <!--Php file-->
    <?php include("vie-user-exam-code-contain-php.php")?>

    <title>Vie Online Examination Exam Code</title>
  </head>
  <body>

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
                <a class="nav-link" href="vie-user-exam-code-contain-html.php">Give Exam</a>
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


    <h1 style="text-align:center">Enter Exam Code</h1>
    <h3 style="text-align:center">(To Enroll in the Exam)</h3>
    
    <!-- Add Exam-Code  Form -->
    <div class="conatiner">
    <form method="POST"> 
        
      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Exam Code</label>
          <input type="tel" class="form-control" name="Exam_Code" placeholder="Enter Exam Code (FORMAT : CLASS.CHAPTER NO.TEST NO)" >
      </div>
        <input type="submit" id="submit" name="submit" class="btn btn-primary">
        <input type="Reset" id="Reset" name="submit" class="btn btn-primary">
    </form>
    
    </div>

  </body>
</html>