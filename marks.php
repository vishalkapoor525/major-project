<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "Vishal@123";
    $database = "user";
    $conn = mysqli_connect($servername,$username,$password,$database);

    //create a table
    //$sql = "CREATE TABLE marks ( `Sno` INT(4) NOT NULL AUTO_INCREMENT ,  `Name` TEXT NOT NULL ,  `marks in maths` INT NOT NULL DEFAULT '0' ,  `marks in science` INT NOT NULL DEFAULT '0' ,  `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`Sno`))";
    //$result = mysqli_query($conn,$sql);

    /*$sql = "INSERT INTO `marks` (`Sno`, `Name`, `marks in maths`, `marks in science`, `date`) VALUES (NULL, 'surya thakur', '25', '29', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "enter successfully";
    }*/

    $sql = "INSERT INTO `marks` (`Sno`, `Name`, `marks in maths`, `marks in science`, `date`) VALUES (NULL, 'surya thakur', '28', '30', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "enter successfully";
    }
    ?>
  </body>
</html>