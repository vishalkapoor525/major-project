<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Login page</title>
</head>

<body>
     <!-- navigation bar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="front_page.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Students.php">Student's corner</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="contact_us.php" >Contact Us</a>
        </li>


        <li class="nav-item">
          <a class="nav-link active" href="signup form.php">SignUP</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="notes.php">Prepare your own Notes</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br><br>
<h1 style = "text-align : center">Welcome to Institute of knowledge and progress</h1>   
<h4 style = "text-align : center"> Please enter your credential to check your exam results </h4>

<?php
      $servername = "localhost";
      $username = "root";
      $password = "Vishal@123";
      $database = "user";
      $conn = mysqli_connect($servername,$username,$password,$database);
      if($conn)
      {
        echo "connected";
      }


      $sql = "CREATE TABLE notes ( `Sno` INT NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(100) NOT NULL ,  `Notes title` VARCHAR(200) NOT NULL ,  `Description` VARCHAR(500) NOT NULL ,  `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`Sno`))";
      $result = mysqli_query($conn,$sql);
      if($result)
      {
        echo "table created";
      }
      else
      {
        echo "failed to create table";
      }

      $sql = "INSERT INTO 'notes' (`Sno`, `Name`, `Notes title`, `Description`, `date`) VALUES (NULL, 'surya thakur', 'cells', 'cells were discovered by robert hook in 1665', 'current_timestamp()')";
      $result = mysqli_query($conn,$sql);
      if($result)
      {
        echo "record inserted successfully";
      }
      else
      {
        echo "failed to insert row";
      }
?>
</body>
</html>

