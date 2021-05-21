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
    <title>Add questions</title>
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

    <!-- style sheet-->
    <link rel="stylesheet" href="style.css">

    <!--php file-->
    <?php include("connection.php")?>
    
    <!-- ckeditor cdn link-->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        function display_form()
        {
            var x='<br><br><div class="conatiner"><form method="POST" ><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Question Title</label><br><input type="text" name="Question_title" placeholder="Enter Question"></div><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Option 1</label><br><textarea name="option1" placeholder="Enter option 1" ></textarea></div><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Option 2</label><br><textarea name="option2" placeholder="Enter option 2"></textarea></div><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Option 3</label><br><textarea name="option3" placeholder="Enter option 3"></textarea></div><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Option 4</label><br><textarea name="option4" placeholder="Enter option 4"></textarea></div>    <div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Select correct answer </label><br><select name="answer_option"><option value="null">--SELECT--</option><option value="1"> option 1</option><option value="2">option 2</option><option value="3">option 3</option><option value="4">option 4</option></select></div><input type="submit" id="submit" name="submit" class="btn btn-primary"><br><br><input type="Reset" id="Reset" name="submit" class="btn btn-primary"></form></div>';
            window.document.getElementById('add').innerHTML=x;
            /*CKEDITOR.replace('Question_title');
            CKEDITOR.replace('option1');
            CKEDITOR.replace('option2');
            CKEDITOR.replace('option3');
            CKEDITOR.replace('option4');*/
        }
    </script>
  </head>
  
  <body>
        <!-- navigation bar -->
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
              <li class="nav-item1">
                <a class="nav-link" href="vie-create-exam-contain-html.php">Add Exam</a>
              </li>
              <li class="nav-item1">
                <a class="nav-link" href="vie-display-exam.php">View Exam</a>
              </li>
              <li class="nav-item5">
                <a class="nav-link" href="vie logout.php">Log Out</a>
              </li>
            </ul>
          </div>
      </nav>
    <br><br>
    <h1 style = "text-align : center">Add Questions</h1>

    <?php

        //Received the parameters from vie-display-exam.php so as to print exam details on top of each question
        $exam_title = $_GET['exam_title'];
        $exam_id = $_GET['exam_id'];
        $exam_code = $_GET['exam_code'];
        $exam_duration = $_GET['exam_duration'];
        $exam_date = $_GET['exam_date'];
        $right_answer = $_GET['right_answer'];
        $wrong_answer = $_GET['wrong_answer'];
        $total_question = $_GET['total_question'];
    ?>

    <!-- display Exam Details on top of each questions -->
    <h2>Exam Details</h2>
    <h4><?php echo "Exam Title : ".$exam_title?></h4>
    <h4><?php echo "Exam Code : ".$exam_code?></h4>
    <h4><?php echo "Exam Date and Time : ".$exam_date?></h4>
    <h4><?php echo "Total Number of Questions: ".$total_question?></h4><br><br>
    

    <?php

      //Display the Question Number the user is Entering (current question Number)
      $sql_total_question = "SELECT * FROM `question_table` WHERE `Exam_Id` = '$exam_id'";
      $result = mysqli_query($conn,$sql_total_question);
      $count = mysqli_num_rows($result);
      $current_question = $count+1;
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Enter Question Number : </strong>'.$current_question.' out of '.$total_question.'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    ?>
    
    <!-- Button to add each Question -->
    <button name="Add_Question" type="button" class="btn btn-success" onclick="display_form()">Add Question</button>   
    <!--Display The form to add questions if current question is less than or equal to total question-->
    <div id="add"></div>
    
    <?php
        
        //Receive the parameters from FORM to insert the data into question and options table
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $question_title=$_POST['Question_title'];
            $option_1 = $_POST['option1'];
            $option_2 = $_POST['option2'];
            $option_3 = $_POST['option3'];
            $option_4 = $_POST['option4'];
            $answer_option = $_POST['answer_option'];
            if($current_question<=$total_question)
            {   

                // Get the correct option ID of a question from option table and insert it into Question_table in Naswer_option Field
                $sql_correct_answer_option = "SELECT * FROM `question_table`";
                $result_correct_answer_option = mysqli_query($conn,$sql_correct_answer_option);
                $count_correct_answer_option = mysqli_num_rows($result_correct_answer_option);
                $correct_answer_option = (($count_correct_answer_option*4)+$answer_option);
                
                //insert question into Question_table
                $sql_question = "INSERT INTO `question_table` (`Question_Id`, `Exam_Id`, `Question_Title`, `Answer_Option`) VALUES (NULL, '$exam_id', '$question_title', '$correct_answer_option')";
                $result_question = mysqli_query($conn,$sql_question);
                if(!$result_question)
                {
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Question can not be inserted <br> We are Facing technical problem <br> Please Try Again After some time</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';   
                }
                else
                {   
                    //insert options into options tables
                    $sql_question_id = "SELECT * FROM `question_table`";
                    $result_question_id = mysqli_query($conn,$sql_question_id);
                    $count_question_id=mysqli_num_rows($result_question_id);
                    
                    //inserting option 1
                    $sql_option1 = "INSERT INTO `option_table` (`Option_Id`, `Question_Id`, `Option_Number`, `Option_Title`, `Exam_Id`) VALUES (NULL, '$count_question_id', '1', '$option_1', '$exam_id')";
                    $result_option1=mysqli_query($conn,$sql_option1);

                    //inserting option 2
                    $sql_option2 = "INSERT INTO `option_table` (`Option_Id`, `Question_Id`, `Option_Number`, `Option_Title`, `Exam_Id`) VALUES (NULL, '$count_question_id', '2', '$option_2', '$exam_id')";
                    $result_option2=mysqli_query($conn,$sql_option2);

                    //inserting option 3
                    $sql_option3 = "INSERT INTO `option_table` (`Option_Id`, `Question_Id`, `Option_Number`, `Option_Title`, `Exam_Id`) VALUES (NULL, '$count_question_id', '3', '$option_3', '$exam_id')";
                    $result_option3=mysqli_query($conn,$sql_option3);

                    //inserting option 4
                    $sql_option4 = "INSERT INTO `option_table` (`Option_Id`, `Question_Id`, `Option_Number`, `Option_Title`, `Exam_Id`) VALUES (NULL, '$count_question_id', '4', '$option_4', '$exam_id')";
                    $result_option4=mysqli_query($conn,$sql_option4);
                   
                }
            }
            else
            {
                // If user added all the questions then display this message;
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>You have already added all the questions</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            
        }
        
    ?>
  </body>
</html>