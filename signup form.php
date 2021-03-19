<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Sign up form</title>

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
    </style>
  </head>
  <body>

 
  <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SignUP</a>
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
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
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
    
<?php 
    // code to create a database
    $servername = "localhost";
    $username = "root";
    $password = "Vishal@123";
    $database = "user";
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
    {
        die("We are facing some technical problem <br>Sorry for inconvience caused");
    }

    //$sql = "CREATE DATABASE user";
    //$result = mysqli_query($conn,$sql);
    
    //$sql = "CREATE TABLE clients ( `Sno` INT NOT NULL AUTO_INCREMENT ,  `name` TEXT NOT NULL ,  `password` VARCHAR(100) NOT NULL ,  `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,  `securityQues` VARCHAR(100) NOT NULL ,  `MobileNo` DOUBLE NOT NULL ,    PRIMARY KEY  (`Sno`))";
    //$result = mysqli_query($conn,$sql);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
                $name = $_POST['user'];
                $pass = $_POST['password'];
                $cpass = $_POST['cpassword'];
                $security = $_POST['security'];
                $mobile = $_POST['mobile'];
                if($pass == $cpass)
                {
                    $sql = "SELECT * FROM clients WHERE name = '$name'";
                    $result = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($result);
                    if($count==0)
                    {
                        $sql = "INSERT INTO clients (`Sno`, `name`, `password`, `date`, `securityQues`, `MobileNo`) VALUES (NULL, '$name', '$pass', current_timestamp(), '$security', '$mobile')";
                        $result = mysqli_query($conn,$sql);
                        if($result)
                        {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>SUCCESS</strong> Hii ' . $name . ' your account has been sucessfully created <br> Now you can login <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                        else
                        {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>FAILURE</strong> Hii ' . $name . ' your record is not sucessfully submitted <br> please try again later <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                    }
                    else
                    {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>WARNING</strong> Hii ' . $name . ' record is already present with this name. Please select a different user Name<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }
                }
                else
                {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>CHECK it!!</strong> You have enterd wrong password <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }
                
    }

    ?>

<br><br>
<h1 style = "text-align : center">Welcome to Institute of knowledge and progress</h1>
<h4 style = "text-align : center"> Please register yourself </h4>

<div class="container">

<!-- form for sign up -->
<form method = "POST" action="signup form.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><h3>User Name</h3></label>
    <input type="text" name = "user" class="form-control" placeholder = "Enter user name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><h3>Password</h3></label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder = "Enter a strong password">
    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
  </div>

  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label"><h3>Confirm Password</h3></label>
    <input type="password" name = "cpassword" class="form-control" id="exampleInputPassword2" placeholder = "Re-Enter the same password">
    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
  </div>

  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label"><h3>Security Answer</h3></label>
    <input type="password" name = "security" class="form-control" id="securityQuestion" placeholder = "Please provide some Infromation which can be use to recover your password incase you forget it">
    <div id="emailHelp" class="form-text">We'll never share this information with anyone else.</div>
  </div>

  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label"><h3>Mobile Number</h3></label>
    <input type="tel" name = "mobile" class="form-control" id="MobileNumber" placeholder = "Enter your Mobile Number">
    <div id="emailHelp" class="form-text">We'll never share your Mobile Number with anyone else.</div>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

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