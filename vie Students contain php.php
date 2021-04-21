<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student section</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="vie students section.css">
        <script type="text/javascript" src="vie students section.js"></script>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand  href="">Vie</a>
        <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item1">
                <a class="nav-link" href="vie-home-page.php">Home</a>
              </li>
              <li class="nav-item2">
                <a class="nav-link" href="vie Students contain php.php">Students</a>
              </li>
              <li class="nav-item3">
                <a class="nav-link" href=""></a>
              </li>
              <li class="nav-item5">
                <a class="nav-link" href="vie notes contain html.php">Prepare your Notes</a>
              </li>
              <li class="nav-item5">
                <a class="nav-link" href="vie-helping-hand-contain-html.html">Helping Hand</a>
              </li>
              <li class="nav-item5">
                <a class="nav-link" href="vie logout.php">Log Out</a>
              </li>
            </ul>
          </div>
      </nav>
      <?php
            $servername = "localhost";
            $username = "root";
            $password = "Vishal@123";
            $database = "user";
            $conn = mysqli_connect($servername,$username,$password,$database);
            if(!$conn)
            {
                die("<br> Sorry we are facing tecnical problems <br> sorry for inconvience");
            }
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $name = $_POST['Name'];
                $mobile_number = $_POST['Mobile_number'];
                $desc = $_POST['message'];
                /*if($name=="")
                {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>FAILURE</strong> Please enter your Name  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }*/
                $sql = "INSERT INTO querybox (`name`, `mobile number`, `suggestion`) VALUES ('$name', '$mobile_number', '$desc')";
                $result = mysqli_query($conn,$sql);
                if($result)
                {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>SUCCESS</strong> Hii ' . $name . ' your record is sucessfully submitted <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }                
            }
        ?>
        
        <marquee><h1> Upcoming Accouncements</h1></marquee>
        
        <nav>
            <a href="#class 9th" class="top" style="margin-left: 250px;">Class 9th</a>
            <a href="#class 10th" class="top">Class 10th</a>
            <a href="#class 11th" class="top">Class 11th</a>
            <a href="#class 12th" class="top">Class 12th</a>
        </nav>



        <a name="class9th"></a><br><br><br><br>
        <section style="clear: left;">
            <h2>class 9th</h2><hr style="height: 3px; background-color: black;">
            <div class="n1" style="margin-left: 150px;" onclick="open_content_Science_class9th()">Science Notes</div>
            <div class="n1" onclick="open_content_Maths_class9th()">Maths Notes</div>
            <div ><a href="https://us04web.zoom.us/j/957526965?pwd=ZTJSdWdrYm04WmZqUUMxcmpkcXMrZz09" class='n1'>Join Zoom Classes</a></div>
            <div class="n1" onclick="comment_class9th()">Query Box</div><br><br><br><br>
            <div id="Science_notes_class9th" style="clear: left; text-decoration: none;"></div>
            <div id="Maths_notes_class9th"></div>
            <form onsubmit="return validate()" method = "POST">
                <div id="class9th_comment"></div>
            </form>
        </section>



        <a name="class 10th"></a><br><br><br><br>
        <section style="clear: left;">
            <h2>class 10th</h2><hr style="height: 3px; background-color: black;">
            <div class="n1" style="margin-left: 150px;" onclick="open_content_Science_class10th()">Science Notes</div>
            <div class="n1" onclick="open_content_Maths_class10th()">Maths Notes</div>
            <div><a class='n1' href="https://us04web.zoom.us/j/957526965?pwd=ZTJSdWdrYm04WmZqUUMxcmpkcXMrZz09">Join Zoom Classes</a></div>
            <div class="n1" onclick="comment_class10th()">Query Box</div><br><br><br><br>
            <div id="Science_notes_class10th" style="clear: left; text-decoration: none;"></div>
            <div id="Maths_notes_class10th"></div>
            <form onsubmit="return validate()" method = "POST">
                <div id="class10th_comment"></div>
            </form>
        </section>



        <a name="class 11th"></a><br><br><br><br>
        <section style="clear: left;">
            <h2>class 11th</h2><hr style="height: 3px; background-color: black;">
            <div class="n1" onclick="open_content_Science_class11th()">Physics Notes</div>
            <div class="n1" onclick="open_content_Maths_class11th()">Chemistry Notes</div>
            <div class="n1" onclick="open_content_Maths_class11th()">Biology Notes</div>
            <div><a class='n1' href="https://us04web.zoom.us/j/957526965?pwd=ZTJSdWdrYm04WmZqUUMxcmpkcXMrZz09">Join Zoom Classes</a></div>
            <div class="n1" onclick="comment_class11th()">Query Box</div><br><br><br><br>
            <div id="Science_notes_class11th" style="clear: left;"></div>
            <div id="Maths_notes_class11th"></div>
            <form onsubmit="return validate()" method = "POST">
                <div id="class11th_comment"></div>
            </form>
            
        </section>
        
        
        
        <a name="class 12th"></a><br><br><br><br>
        <section style="clear: left;">
            <h2>class 12th</h2><hr style="height: 3px; background-color: black;">
            <div class="n1" onclick="open_content_Science_class12th()">Physics Notes</div>
            <div class="n1" onclick="open_content_Maths_class12th()">Chemistry Notes</div>
            <div class="n1" onclick="open_content_Maths()">Biology Notes</div>
            <div><a class='n1' href="https://us04web.zoom.us/j/957526965?pwd=ZTJSdWdrYm04WmZqUUMxcmpkcXMrZz09">Zoom Classes</a></div>
            <div class="n1" onclick="comment_class12th()">Query Box</div><br><br><br><br>
            <div id="Science_notes_class12th" style="clear: left;"></div>
            <div id="Maths_notes_class12th"></div>
            <form onsubmit="return validate()" method = "POST">
                <div id="class12th_comment"></div>
            </form>
        </section>

        <br><br><br>
        <footer id="footer">
    <div class="footer-icon">
      <i class="fab fa-twitter fa-2x"></i>
      <i class="fab fa-facebook-f fa-2x"></i>
      <i class="fab fa-instagram fa-2x"></i>
      <i class="fas fa-envelope-square fa-2x"></i>
    </div>
    <p class="footer-txt">© Copyright 2021 Vie</p>
  </footer>
    </body>
</html>