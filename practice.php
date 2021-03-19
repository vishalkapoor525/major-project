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
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $servername = "localhost";
      $username = "root";
      $password = "Vishal@123";
      $database = "website";
      $conn = mysqli_connect($servername,$username,$password,$database);

      $name = $_POST['search'];
      $sql = "SELECT * FROM class9 WHERE name = '$name'";
      $result = mysqli_query($conn,$sql);

      $count = mysqli_num_rows($result);
      echo "<br> total records are $count with name = $name";
      $var = 1;
      while($rows = mysqli_fetch_assoc($result))
      {
        echo "<br><br>" . $var . " Hiii " . $rows['name'] . "<br>your mobile number is " . $rows['mobile number']  . "<br>your suggestion is " . $rows['suggestion'];
        $var = $var+1;
      }
    }
      
    ?>


<form method="POST">
       <h1> search for records</h1>
       <br>search<br><input type="text" name="search" placeholder="Enter your name">
       <br><br><br><input type="submit" value="submit"> 
   </form>

  </body>
</html>
