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
            
    </style>
  </head>
  <body>
  <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="teachers.php">Teacher's corner</a>
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

<!-- display all records -->
<div class="container">
<br><br>
  <h2 style = "text-align : center"> Display Records </h2>
  <h6 style = "text-align : center"> Please provide Student Name to see the records </h6>
  <br><br><br>
  <form method = "POST" action="displayrecords.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><strong>Student Name</strong></label>
    <input type="text" name = "name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  

  <button type="submit" class="btn btn-primary" style = "margin-left : 600px">Submit</button>
</form>


  <table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Test ID</th>
      <th scope="col">Name</th>
      <th scope="col">Marks in Maths</th>
      <th scope="col">Marks in Science</th>
      <th scope="col">Date of exam</th>
    </tr>
  </thead>
  <tbody>
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

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
                $name = $_POST['name'];
                //$pass = $_POST['password'];
                $sql = "SELECT * FROM marks WHERE name = '$name'";
                $result = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($result);
                if($count==0)
                {
                  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>WARNING</strong> Hii ' . $name . ' No record is present with your name <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }
                else
                    {
                      //echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>SUCCESS</strong> Welcome ' . $name . ' your report card is shown below   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';  
                      //$sql = "SELECT * from marks WHERE name = '$name'";
                      //$result = mysqli_query($conn,$sql);
                      //$count = mysqli_num_rows($result);
                      //if($count == 0)
                      //{
                        //echo "<br><br><br><h3 style='text-align: center;'>No test is given by you till now</h3> <br><br>";
                      //}
                      $ser = 0;
                      while($rows = mysqli_fetch_assoc($result))
                      {
                        //echo "<br><br><br>Marks in Maths = " . $rows["marks in maths"] . "<br>Marks in Science = " . $rows["marks in science"] . "<br>Test Date was " . $rows["date"];
                        //echo "<br>";
                        $ser = $ser+1;
                      echo "<tr>
                      <td>".$ser."</td>
                      <td>".$rows['test id']."</td>
                      <td>".$rows['Name']."</td>
                      <td>".$rows['marks in maths']."</td>
                      <td>".$rows['marks in science']."</td>
                      <td>".$rows['date']."</td>
                    </tr>";
                      }
                    }
    }
?>    
  </tbody>
</table>
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