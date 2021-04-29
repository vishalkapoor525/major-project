<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Teachers corner</title>
    <link rel="stylesheet" href="style.css">
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

  <!-- php file link -->
    <?php include('vie-teacher-insert-contain-php.php')?>

  <!-- FontAwesome Link -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style>
            a>h2{
                text-decoration: none;
                color: #ff4c68;
                text-align: center;
                font-family: serif;
                font-size: 34px;
                font-weight: bold;
              }
            
    </style>
  
  </head>
  <body>
  <!-- navigation bar I'll add it tu baki kaam kar -->

  <!-- Add Welcome message -->
<!-- Form for insertion of marks-->
<div class="container">

  <h2 style = "text-align : center"> Insert New Records </h2>
<form method = "POST" action="vie-teacher-contain-html.php">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>Test ID</strong></label>
    <input type="tel" name = "testid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>Student Name</strong></label>
    <input type="text" name = "name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>Student Email Address</strong></label>
    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><strong>Marks in Maths</strong></label>
    <input type="tel" name = "maths" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label"><strong>Marks in Science</strong></label>
    <input type="tel" name = "science" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label"><strong>Date</strong></label>
    <input type="date" name = "date" class="form-control" id="exampleInputPassword1" placeholder="yyyy-mm-dd"> 
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

<br><br>
<!-- display records -- test id represent first digit = class , next 3 digits = student id , last two digit = test id>-->
<div class="container">
  <a href="displayrecords.php"><h2> Display Records </h2></a>
</div>


<br><br>
<!-- Update records -->
<div class="container">
  <a href="updaterecords.php" style="text-decoration: none;"><h2> Update Records </h2></a>
</div>

<br><br>
<!-- delete records -->
<div class="container">
  <a href="deleterecord.php" style="text-decoration: none;"><h2> Delete Records </h2></a>
</div>


<br><br>
<!-- display records -->
<div class="container">
  <a href="displayrecords.php" style="text-decoration: none;"><h2> Display Records </h2></a>
</div>
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