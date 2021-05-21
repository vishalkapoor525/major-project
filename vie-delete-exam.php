<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!--style sheet -->
    <link rel="stylesheet" href="style.css">

    <!--Php file-->
    <?php include("connection.php")?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    

    <title>Delete Exam</title>
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
              <li class="nav-item1">
                <a class="nav-link" href="vie-home-page-teachers.php">Home</a>
              </li>
              <li class="nav-item5">
                <a class="nav-link" href="vie-create-exam-contain-html.php">Add Exam</a>
              </li>
              <li class="nav-item5">
                <a class="nav-link" href="vie-display-exam.php">View Exams</a>
              </li>
              <li class="nav-item5">
                <a class="nav-link" href="vie logout.php">Log Out</a>
              </li>
            </ul>
          </div>
      </nav>
<br><br>
    <h1 style = "text-align : center">Please Confirm Exam Details</h1>
    <h3 style = "text-align : center">Hit Submit Button to delete this exam</h3>

    <?php

    //Receiver the parameters from vie-dispaly-exam.php and show them in the form
    $exam_title = $_GET['exam_title'];
    $exam_id = $_GET['exam_id'];
    $exam_code = $_GET['exam_code'];
    $exam_duration = $_GET['exam_duration'];
    $exam_date = $_GET['exam_date'];
    $right_answer = $_GET['right_answer'];
    $wrong_answer = $_GET['wrong_answer'];
    $total_question = $_GET['total_question'];
    
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['delete_exam']))
        {
            $sql_exam = "DELETE FROM `online_exam_table` WHERE `Exam_Id` = '$exam_id'";
            $result = mysqli_query($conn,$sql_exam);
            $sql_question = "DELETE FROM `question_table` WHERE `Exam_Id` = '$exam_id'";
            $result_question = mysqli_query($conn,$sql_question);
            $sql_option = "DELETE FROM `option_table` WHERE `Exam_Id` = '$exam_id'";
            $result_optoin = mysqli_query($conn,$sql_option);
            if(!$result)
            {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>We are facing technical Problem <br>Please try Again after some time</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            else
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Exam Deleted Successfully</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';   
            }
        }
        
    }
    ?>
    <div class="conatiner">
    <form method="POST"> 
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"><b><p>Exam Title : <?php echo $exam_title ?></p></b></label>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"><b><p>Exam Date and Time : <?php echo $exam_date ?></p></b></label>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"><b><p>Exam Duration : <?php echo $exam_duration ?></p></b></label>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"><b><p>Total Number of Questions : <?php echo $total_question ?></p></b></label>
      </div>
      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"><b><p>Marks for each right answer : <?php echo $right_answer ?></p></b></label>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"><b><p>Marks for each wrong answer : <?php echo $wrong_answer ?></p></b></label>
        </div>
        
      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"><b><p>Exam Code : <?php echo $exam_code ?></p></br></label>
          
        </div>
        <input type="submit" name="delete_exam" class="btn btn-dark btn-lg  btn-1" >
    </form>
    
    </div>

  </body>
</html>