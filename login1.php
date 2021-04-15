<?php
session_start(); 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>loing page</title>
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
  </head>
  <body>
    <?php
    $servername="localhost";
    $password="Vishal@123";
    $username="root";
    $database="user";
    
    $conn = mysqli_connect($servername,$username,$password,$database);
        if(isset($_POST['submit']))
        {
            $email=$_POST["Email"];
            $password=$_POST["Password"];
            $sql = "SELECT * from signup WHERE Email='$email'";
            $result=mysqli_query($conn,$sql);
            $count= mysqli_num_rows($result);
            if($count==1)
            {
                $assoc = mysqli_fetch_assoc($result); //$assoc is an associative array having index is same as the name of columns.
                if($password==$assoc['Pass'])    // assoc[password] --> gives the value store in the password fields.
                {
                  $_SESSION['username'] = $assoc['Name'];
                    echo "login successful";
                    header('location:welcome.php');
                }
                else
                {
                    echo "incorrect password";
                }
            }
            else
            {
                echo "email doesn't exists";
            }
            
          }

    ?>
   <div class="container">
    <form method="POST">
      <label>E mail</label><br><input type="email" name="Email" placeholder="Enter Email address"><br><br>
      <label>Password</label><br><input type="password" name="Password" placeholder="Enter Password"><br>
      <input type="submit" value="Submit" name="submit"><input type="reset" value="reset"><br>
    </form>  
   </div>
  </body>
  
