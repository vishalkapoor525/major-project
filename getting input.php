<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>connecting with database using forms</title>

  </head>
  <body>
    <h1>connecting with database using forms</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <?php
      
      /*if($conn)
      {
        echo "<br><br><br>connection is sucessful";
      }
      else
      {
        die("failed to connect");
      }*/


      //creating a database
      /*$sql = "CREATE DATABASE ikp";
      $result = mysqli_query($conn,$sql);
      if($result)
      {
        echo "<br><br><br>database is created";
      }
      else{
        echo "<br><br><br>we failed to create database";
      }*/


      //creating a table
      /*$sql = "CREATE TABLE `class9` ( `name` TEXT NOT NULL , `mobile number` DOUBLE NOT NULL , `suggestion` VARCHAR(500) NOT NULL )";
      $result = mysqli_query($conn,$sql);
      if($result)
      {
        echo "query is executed";
      }
      else
      {
        echo "failed to= execute";
      }*/
      if($_SERVER['REQUEST_METHOD']=="POST")
    {
      
      $name = $_POST['search'];
      $servername = "localhost";
      $username = "root";
      $password = "Vishal@123";
      $database = "website";

      $conn = mysqli_connect($servername,$username,$password,$database);
      if($conn)
      {
        echo "connection successful";
      }
      else
      {
        echo "connection failed";
      }
      $sql = "SELECT * FROM class9 WHERE name = '$name'";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      echo "<br> total records are $count with name = $name";
      if($count>0)
      {
        while($rows = mysqli_fetch_assoc($result))
        {
          echo "<br><br><br>hello " . $rows['name'] . "<br>your mobile number is " . $rows['mobile number'] . "<br>your query is " . $rows['suggestion'] . " <br>";
        }
      }
      

     /* $sql = "SELECT * FROM class9";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      echo "<br> total records are $count";
      if($count>0)
      {
        while($rows = mysqli_fetch_assoc($result))
        {
          echo "<br><br><br>hello " . $rows['name'] . "<br>your mobile number is " . $rows['mobile number'] . "<br>your query is " . $rows['suggestion'] . " <br>";
        }
      }*/
    }
    ?>


<form method="POST">
       <h1> search for records</h1>
       search<br><input type="text" name="search">
       <br><input type="submit" value="submit"> 
   </form>

  </body>
</html>