<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Notes</title>

<!-- jquery-->    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!--css for jquery-->
<link href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--javascript for jquery-->    
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="Notes.php">Update Records</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="front_page.php">Home</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link active" href="teachers.php">Teacher's corner</a>
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
<h4 style = "text-align : center">You can Update your Records</h4>



<br><br><br>
  <?php
  //$x = $_GET['Serial'];
  //echo $x;
  //echo $_GET['desc'];
  //echo $_GET['Serial'];          // -------------->>>>>>>>>> NOT WORKING CORRECTLY
  //echo "serial number is ".$serial;
    $servername = "localhost";
    $username = "root";
    $password = "Vishal@123";
    $database = "user";
    $conn = mysqli_connect($servername,$username,$password,$database);

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $serial = $_POST['Sno'];
      if($title!="" and $desc!="")
      {
        $sql = "UPDATE notes SET `Notes Title` = '$title' , `Description` = '$desc' WHERE `Sno` = '$serial'";
        $result = mysqli_query($conn,$sql);
        if($result)
            echo '<br><br><div class="alert alert-success alert-dismissible fade show" role="alert"><strong>SUCCESS</strong> <br> Notes Title and Description updated successfully<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        else
            echo 'falied to update';
      }
      elseif($title=="" and $desc!="")
      {
        $sql = "UPDATE notes SET `Description` = '$desc' WHERE `Sno` = '$serial'";
        $result = mysqli_query($conn,$sql);
        if($result)
            echo '<br><br><div class="alert alert-success alert-dismissible fade show" role="alert"><strong>SUCCESS</strong> <br> Notes Description updated successfully<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        else
            echo 'falied to update';
      }
      elseif($desc=="" and $title!="")
      {
        $sql = "UPDATE notes SET `Notes Title` = '$title' WHERE `Sno` = '$serial'";
        $result = mysqli_query($conn,$sql);
        if($result)
            echo '<br><br><div class="alert alert-success alert-dismissible fade show" role="alert"><strong>SUCCESS</strong> <br> Notes title updated successfully<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        else
            echo 'falied to update';
      }
      else
      {
        echo '<br><br><div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>WARNING</strong> <br> Please provide either notes title or description<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
      }
    }
    
?>
<!-- notes area -->
<br><br>
<div class="container">
<form method = "POST" action = "updatenotes.php">
  


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><h3>Notes ID</h3></label>
    <input type="text" name = "Sno" value = "<?php echo $_GET['Serial']?>"class="form-control" id="exampleInputEmail1" placeholder = "Serial Number" aria-describedby="emailHelp">
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><h3>Give a New title</h3></label>
    <input type="text" name = "title" class="form-control" id="exampleInputEmail1" placeholder = "Add title" aria-describedby="emailHelp">
  </div>


  <div class="form-floating">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><h3>Provide New Description</h3></label>
  <textarea class="form-control" placeholder="Give Description to your notes"  name = "desc" id="floatingTextarea"></textarea>
</div>

  <button type="submit" class="btn btn-primary">Update Notes</button>
</form>
</div>



  
  </body>
</html>