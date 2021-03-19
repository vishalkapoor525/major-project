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

    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
        </script>
  </head>
  <body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Create and prepare notes</a>
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
<h4 style = "text-align : center">You can create your own notes, update it and delete it </h4>




<!-- notes area -->
<br><br>
<div class="container">
<form method = "POST" action = "Notes.php">
  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><h3>Name</h3></label>
    <input type="text" name = "name" class="form-control" id="exampleInputEmail1" placeholder = "Enter your name" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><h3>Password</h3></label>
    <input type="password" name = "password" class="form-control" placeholder = "Enter your Password" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><h3>Add title</h3></label>
    <input type="text" name = "title" class="form-control" id="exampleInputEmail1" placeholder = "Add title" aria-describedby="emailHelp">
  </div>


  <div class="form-floating">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><h3>Notes Description</h3></label>
  <textarea class="form-control" placeholder="Give Description to your notes" name = "desc" id="floatingTextarea"></textarea>
</div>

  <button type="submit" class="btn btn-primary">Add Notes</button>
  <button type="submit" class="btn btn-primary">Show Notes</button>
  <button class='btn btn-primary'><a style='color: aliceblue; text-decoration: none;' href = 'forgetpassword.php'>Forget Password</a></button>
  <h4> If you wants to see your pevious notes then click on Show notes</h4>
</form>
</div>



<br><br><br>



<!-- table designing -->
<table class="table" id= "myTable">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Notes Title</th>
      <th scope="col">Notes Description</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "Vishal@123";
    $database = "user";
    $conn = mysqli_connect($servername,$username,$password,$database);

    //create a table
    //$sql = "CREATE TABLE notes ( `Sno` INT NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(100) NOT NULL , `Notes title` VARCHAR(200) NOT NULL ,  `Description` VARCHAR(5000) NOT NULL ,  `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`Sno`))";
    //$result = mysqli_query($conn,$sql);

   // $sql = "CREATE TABLE notes ( `Sno` INT NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(100) NOT NULL ,  `Notes title` VARCHAR(200) NOT NULL ,  `Description` VARCHAR(1000) NOT NULL ,  `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`Sno`))";
    //$result = mysqli_query($conn,$sql);

    //$sql = "INSERT INTO `notes` (`Sno`, `Notes title`, `Description`, `date`) VALUES (NULL, 'Respiration', 'oxidation of food is called respiration', current_timestamp())";
    //$result = mysqli_query($conn,$sql);

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $name = $_POST['name'];
        $pass = $_POST['password'];
        if($name=="")
        {
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Warning</strong>  Please Enter your name  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        else
        {
          //$sql = "INSERT INTO `notes` (`Sno`, `Notes title`, `Description`, `date`) VALUES (NULL, '$title', '$desc', current_timestamp())";
          $sql = "SELECT * FROM clients WHERE name = '$name' and `password` = '$pass'";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          if($count!=1)
          {
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>WARNING</strong> Hii ' . $name . ' Either you are not a registered user or You have entered some wrong credentials <br> Please sign up <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
          }
          else
          {
            if($title=="" || $desc=="")
            {
              //echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>SORRY</strong> You have not prepared any notes till now!!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            else
            {
              $sql = "INSERT INTO notes (`Sno`, `Name`, `Notes title`, `Description`, `date`) VALUES (NULL, '$name', '$title', '$desc', current_timestamp())";
              $result = mysqli_query($conn,$sql);
              if($result)
              {
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>SUCCESS</strong> Notes has been successfully added  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
              }
              else
              {
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>FAILURE</strong>  Sorry, we are facing some technical issue <br> Please try againg later  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
              }
            }
            $sql = "SELECT * from notes WHERE name = '$name'";
            $result = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($result);
            if($count==0)
            {
                //echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>FAILURE</strong>  Sorry, we are facing some technical issue <br> Please try againg later  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            else
            {
              $var = 0;
              while($rows = mysqli_fetch_assoc($result))
              {
                $var = $var+1;
                echo "<tr>
                      <td>".$var."</td>
                      <td>".$rows['Name']."</td>
                      <td>".$rows['Notes title']."</td>
                      <td>".$rows['Description']."</td>
                      <td>".$rows['date']."</td>
                      <td><button class='btn btn-primary'><a style='color: aliceblue; text-decoration: none;' href = 'updatenotes.php?name=$rows[Name] & desc=$rows[Description] & Serial=$rows[Sno]'>Update</a></button><br><br><button class='btn btn-primary'><a style='color: aliceblue; text-decoration: none;' href = 'deletenotes.php?name=$rows[Name] & desc=$rows[Description] & Serial=$rows[Sno]'>Delete</a></button></td>
                      </tr>";
              }//------------------->>>>>>>>>>>> NOTES TITLE NOT ABLE TO FETCH
            }
          }
        }
        
    }
    
?>

  
  </body>
</html>