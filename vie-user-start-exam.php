<?php
    session_start();
    if(!isset($_SESSION['username']))
{
    header('location:vie login contain html.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Previous Enrolled Exams</title>
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

    <!--style sheet -->
    <link rel="stylesheet" href="style.css">

    <!-- jquery-->    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!--css for jquery-->
    <link href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">

    <!--javascript for jquery-->    
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <!--php file-->
    <?php include('connection.php') ?>
    
    <!-- for jQuery Tbale-->
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
  </head>
    
  <body>
   <!-- Nav Bar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand  href="">Vie</a>
                <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item2">
            <a class="nav-link" href="vie-home-page.php">Home</a>
          </li>
          <li class="nav-item3">
            <a class="nav-link" href="vie Students contain html.html">Notes</a>
          </li>
          <li class="nav-item4">
            <a class="nav-link" href="vie-progress-chart.php">Progress Report</a>
          </li>
          <li class="nav-item dropdown nav-item5">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              E-Examination
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="vie-user-exam-code-contain-html.php">Enroll New</a></li>
              <li>
              </li>
              <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="vie-user-previous-enrolled-exam.php">View Previous</a></li>
            </ul>
          </li>
          <li class="nav-item6">
            <a class="nav-link" href="vie-helping-hand-contain-html.html">Helping Hand</a>
          </li>
          <li class="nav-item6">
            <a class="nav-link" href="vie logout.php">Log Out</a>
          </li>
        </ul>
      </div>
  </nav>

<br><br>

<?php 
//receive the parameters from login page and use to fetch records of all students who are enrolled in some exam with their exam id in exam enroll table
$email = $_SESSION['email'];
//Receive the parameter from vie-previous-enrolled-exams.php  
$exam_title = $_GET['exam_title'];
$exam_id = $_GET['exam_id'];
$exam_code = $_GET['exam_code'];
$exam_duration = $_GET['exam_duration'];
$exam_date = $_GET['exam_date'];
$right_answer = $_GET['right_answer'];
$wrong_answer = $_GET['wrong_answer'];
$total_question = $_GET['total_question'];
?>

<h1 style = "text-align : center">Welcome to VIE Online Examination Portal</h1>
<h4 style = "text-align : center">Below is your Selected exam details</h4>

<?php
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong><br>Exam Title : </strong>'.$exam_title.'<strong><br>Exam Code : </strong>'.$exam_code.'<strong><br>Exam Duration : </strong>'.$exam_duration.'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
?>
<br><br><br>
<div class="col-lg-10 m-auto d-block">
<form method="post">
<?php

        //sql query to select the questions in a exam
        $sql_question_table = "SELECT * FROM `question_table` WHERE `Exam_id` = '$exam_id'";
        $result_question_table = mysqli_query($conn,$sql_question_table);
        $count_question_table = mysqli_num_rows($result_question_table);
        if($count_question_table==0)
        {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Contact your Teacher...<br>No Questions has been added till now...<br>Very Lazy and Careless</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        else
        {
            $question_number = 0;
            while($rows_question_table=mysqli_fetch_assoc($result_question_table))
            {
                $question_number = $question_number+1;
                $question_id = $rows_question_table['Question_Id'];                 //fetch Question ID
                $correct_answer = $rows_question_table['Answer_Option'];            //fetch the correct option
                $question_title = $rows_question_table['Question_Title'];           //fetch question title
                $question_image = $rows_question_table['Question_Image'];
                $question_image_part = substr($question_image,16);                  // check that whether Question_image\ ke baad kuch value present hai ya nhi
?>

            
            <div class="card">
                <h4 class="card-header"><?php echo "Ques ".$question_number.": ".$question_title ?></h4>
                <?php
                  if($question_image_part)
                  {
                    echo '<img class="card-header m-auto d-block" height="300px" width="400px" src='.$question_image.' alt="Question_image">';
                  }
                ?>
                
            </div>

<?php
            $sql_option_table = "SELECT * FROM `option_table` WHERE `Question_Id` = '$question_id'";
            $result_option_table = mysqli_query($conn,$sql_option_table);
            $count_option_table = mysqli_num_rows($result_option_table);
            if($count_option_table==0)
            {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Contact your Teacher...<br>No Options has been added till now...<br>Very Lazy and Careless</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            else
            {
                while($rows_option_table=mysqli_fetch_assoc($result_option_table))
                {
                    $options = $rows_option_table['Option_Title'];
                    $option_image = $rows_option_table['Option_Image'];
                    $option_image_part = substr($option_image,16);                  // check that whether Question_image\ ke baad kuch value present hai ya nhi
?>

                    <div class="cadr-body">
                        <input type="radio" value="<?php echo $rows_option_table['Option_Id'];?>" name="testcheck[<?php echo $question_id; ?>"><?php  echo $options?> 
                        <?php
                          if($option_image_part)
                          {
                            echo '<img class="card-header m-auto d-block" height="100px" width="200px" src='.$option_image.' alt="option images">';
                            //echo "<br>".$option_image."<br>".$option_image_part;
                          }
                        ?>    
                    <div>
<?php
                }
            }
?>
            
<?php
                
            }
        }
    ?>
    <div class="card-footer text-muted">
    <input type="submit" name="submit_test" value="submit" class="btn btn-success col-lg-2 m-auto d-block">
  </div>
    
</form>
</div>
  </body>
</html>