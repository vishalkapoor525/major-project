<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Teachers corner</title>

    <style>
    footer{
                height: 430px;
                background-color: black;
                margin-top: 50px;
                color: white;
            }
            footer>address{
                font-size: 26px;
                font-weight: bolder;
                color: white;
                text-align: center;
            }
            address>a{
                color: white;
            }
            footer>div{
                
                font-size: 34px;
                color: crimson;
            }
            footer a{
                font-size: 24px;
                text-decoration: none;
                color: cyan;
            }
            a>h2{
                text-decoration: none;
                color: crimson;
                text-align: center;
                font-family: serif;
                font-size: 34px;
                font-weight: bold;
              }
              a>h2:hover{
                color: darkblue; 
              }
            
    </style>
  </head>
  <body>
  <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Teacher's corner</a>
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
          <a class="nav-link active" href="login.php">Login</a>
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
<hr>  



<!-- Form for insertion of marks-->
<div class="container">

<?php
//connecting with database user and using table marks to insert the records
$servername = "localhost";
$username = "root";
$password = "Vishal@123";
$database = "user";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
  die("Sorry <br> We're facing some technical problem <br> please try againg later");
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $testid = $_POST['testid'];
  $name = $_POST['name'];
  $maths = $_POST['maths'];
  $science = $_POST['science'];

  $sql = "INSERT INTO marks (`test id`, `Name`, `marks in maths`, `marks in science`, `date`) VALUES ('$testid', '$name', '$maths', '$science', current_timestamp())";
  $result = mysqli_query($conn,$sql);
  if($result)
  {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>SUCCESS</strong><br>' . $name . ' Record has been successfully inserted <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
  }
  else
  {
    echo "not inserted";
  }
}
?>
  <h2 style = "text-align : center"> Insert New Records </h2>
<form method = "POST" action="teachers.php">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>Test ID</strong></label>
    <input type="tel" name = "testid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Please provide 6 digit test I'd</div>
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>Student Name</strong></label>
    <input type="text" name = "name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><strong>Marks in Maths</strong></label>
    <input type="tel" name = "maths" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label"><strong>Marks in Science</strong></label>
    <input type="tel" name = "science" class="form-control" id="exampleInputPassword1">
  </div>


  <button type="submit" class="btn btn-primary" style = "margin-left : 600px">Submit</button>
</form>
</div>

<br><br>
<!-- display records -- test id represent first digit = class , next 3 digits = student id , last two digit = test id>
<div class="container">
  <a href="displayrecords.php"><h2> Display Records </h2></a>
</div>


<br><br>
<!-- Update records -->
<div class="container">
  <a href="updaterecords.php"><h2> Update Records </h2></a>
</div>

<br><br>
<!-- delete records -->
<div class="container">
  <a href="deleterecord.php"><h2> Delete Records </h2></a>
</div>


<br><br>
<!-- display records -->
<div class="container">
  <a href="displayrecords.php"><h2> Display Records </h2></a>
</div>
<!-- footer section -->
<footer>
            <address>Location: E-55/56 First floor of kalra store near Mangalam hospital bus stop, opposite Tarang Appartment<br>Call us: 8448154110<br>
                Mail us at: vishalkapoor525@gmail.com<br><a href="https://maps.app.goo.gl/9DxZ7ARc6AFMYyz68" style="color: white;">Reach to us</a>
            </address><br><br>

            <div>Quick Links</div> 
            <ol>
                <li><a href="front_page.php">Home Page</a></li>
                <li><a href="Students.php">Students Corner</a></li>
                <li><a href="#teachers.html">Teacher Corner</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ol>
    </footer>
  </body>
</html>