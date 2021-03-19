<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <?php
    //simple print statements
    echo "this is my first string";


    // variables in php
    //1. always starts with $ sign and can be alphanumeric and can contain underscore 
    $name = "vishal";
    $income = 200.5;
    
    
    //br tag is use for break statements
    echo "<br>My name is $name and my income is $income";

    //var_dump() function is use to print the type and value of a variable
    echo "<br>";
    echo var_dump($income);

    // use with boolean variable when we have to print a false value ie. 0 then it will print blank statement
    $correct = true;
    $incorrect = false;

    echo "<br>correct variable is $correct";
    echo "<br>incorrect variable is $incorrect"; //$incorrect ki jagha pe balnk value aa gai

    echo "<br>incorrect variable is ";
    var_dump($incorrect);

    //array in php
    //syntax $array name = array(val1,val2,val3);
    //for accessing $array name[index] --->index start with 0

    $students = array("rohan","mohan","shyam","krish");
    echo "<br> first student in array is $students[0]";
    echo "<br> second student in array is $students[1]";
    echo "<br> third student in array is $students[2]";
    echo "<br> fourth student in array is $students[3]"; 

    // . operator is use for concatenation of string
    echo "<br>my name is $name." . " my income is $income";

    // string functions 
    // 1. strlen(strimg name) 2.str_word_count(string) 3. strrev(string) --> revers the string  4.strpos($string,word) ----> return the starting positin of word;
    // 2. str_replace("old_word","new","string")  6. str_repeat("string",number of time do you wants to repeate string) 7. ltrim("string")
    $character = "cool guy with brown hairs";
    echo "<br>total characters in characters are ". strlen($character);
    echo "<br>total words in characters are ". str_word_count($character);
    echo "<br> position of guy in character is ". strpos($character,"guy");
    

    // operator in php
    /* 1 Arithematic operators [+,-,/,*,%]
    2. Assignment operator [=,+=,-=,*=,/=,%=]
    3.comparision operator [>,<,<>(not equal to),>=,<=,==]
    4. logical operators [and (&&),or (||)]*/


    //if else statements
    $age = 20;
    if($age>25 and $age<65)
    {
      echo "<br>you can drive the car";
    }
    else
    {
      echo "<br>you can't drive<br>";
    }


    //switch case ---> same as in c++


    //while loop 
    $i=1;
    $number=5;
    echo "using while loop <br>";
    while($i<=10)
    {
      echo "$number x  $i = ".$number*$i."<br>";
      $i++;
    }

    echo "using for loop<br>";
    //for loop
    for($i=1;$i<=10;++$i)
    {
      echo "$number x  $i = ".$number*$i."<br>";
    }

    echo "display array names using for loop<br>";
    $employees = array("suman","athrava","dara sikho");
    $i=0;
    for($i=0;$i<count($employees);++$i)  //count($arr name)---> use to count the number of elements in an array
    {
      echo "name of employee " . $i+1 . " is $employees[$i] <br>";
    }

    //do while loop ---> same as in c++
    
    
    //functions Question- calculate the marks of a students of 5 subjects and print is average
    function average($marks) //parameters may or may not be required for function 

    //function may or may not return a value
    //if it returns then we need to store the result in a variable the print it
    {
      $sum = 0;
      $i=0;
      for($i=0;$i<count($marks);++$i)
      {
        $sum+=$marks[$i];
      }
      $avg = $sum/2.5;
      return $avg;
    }

    $mymarks = array(10,20,30,40,50);
    echo average($mymarks)."%";   //function calling in case of return statements else we will not rerquired echo
    
    
    function greater($a,$b)
    {
      if($a>$b)
      {
        return $a;
      }
      else
      {
        return $b;
      }
    }

    echo "<br>Greater number is : " . greater(10,14);


    function available($my_cities)
    {
      $city="delhi";
      for($i=0;$i<count($my_cities);++$i)
      {
        if($my_cities[$i]==$city)
        {
          return "city availabel";
          break;
        }
        else
        return "not available";
      }
    }

    $citites = array("mumbai","goa","palghar","merrut","mathura");
    echo available($citites);

    //foreach loop in array
    foreach($citites as $key =>$value)
    {
      echo "<br> value at index " . $key . " is " . $value . "<br>";
    }

    //Associative array
    $favsub = array("Riya" => "English", "Sumedha" => "SST", "Gaurav" => "Science");
    foreach($favsub as $key => $value)
    {
      echo "<br>Favourite Subject of " . $key . " is ". $value;
    }

    $i = 20;
    echo "<br><br><br>". var_dump($i);
    //2 D array
    $my_array = array(array("one","two","three"),array("four","five","six"),array("seven","eight","nine"));
    for($i=0;$i<count($my_array);++$i)
    {
      for($j=0;$j<count($my_array[$i]);++$j)
      {
        echo $my_array[$i][$j]."  ";
      }
      echo "<br>";
    }

    //global and local variables 
    // those variables which are defined with in a function are called local variables

    $a =100;
    function local()
    {
      $a=10;
      echo "value of local a is $a";
    }

    local();
    echo "value of global a is $a";

    /*function local2()
    {
      echo "value of global a inside a function is $a";
    }
    local2();*/ //globals variables can't be use directly within a function
    
    function local2()
    {
      global $a;  //requesting to accessing for global variable
      echo "value of global a inside a function is $a";

      //any change to global variable inside a funcation will also be reflected in the its actual value
    }
    local2();

    //all the global varibales will get stored in a array named GLOBALS
    //echo var_dump($GLOBALS);


    // to show an alert on submission of email and password in a form
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
      $email =$_POST['email'];
      $pass = $_POST['password'];

      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Sucess</strong> Email is ' . $email  . ' and password is ' . $pass. '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

  ?>
  <form method = "post"><br><br><br><br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name = "email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

  //connecting to mysql using php
  /*  $username = "root";
    $servername = "localhost";
    $password = "Vishal@123";

    $conn = mysqli_connect($servername,$username,$password);
    if(!$conn)
    {
      die("connection is not created" . mysqli_connect_error());
    }
    else{
      echo "connection is sucessfully created";
    }

    if database is already created then we just need to provide the name of database during connecting it
    $database = "name of database"; 
    $conn = mysqli_connect($servername,$username,$password,$database);


    //creating a database
    $sql = "CREATE DATABASE temp";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
      echo "database is created sucessfully";
    }*/


    //creating a table
    $sql = "CREATE TABLE table_name (attributes datatypes constraints)";
    $result = mysqli_query($conn,$result);
    if($result)
    {
      echo "sucessfully executed";
    }
    else
    {
      echo "unsuccesfull";
    }

    //inserting a record
    $sql = "INSERT INTO table_name  VALUES ('','','')";
    //table_name should be without inverted commas;
    $result = mysqli_query($conn,$sql);


    //fetch the input fiels from html form
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $name = $_POST['name of input field'];
      $mobile = $_POST['name of input field'];
      $desc = $_POST['name of input field'];

      //inserting these values to database
      $sql = "INSERT INTO table_name  VALUES ('$name','$mobile','$desc')";
      //table_name should be without inverted commas;
      $result = mysqli_query($conn,$sql);
      if($result) //check for true
      {
        echo "successfull";
      }
      else
      {
        echo "unsucessfull";
      }
    }


    //fetching the records from database 

    //1. selecting all reords
    $sql = "SELECT * from table_name";
    $result = mysqli_query($conn,$sql);

    //count number of records
    $count = mysqli_num_rows($result);  //return number of records


    //display the records
    mysqli_fetch_assoc($result); //return the first record 

    // if we write this statement second time then it will return second record and so on ot will continue till last and at last it will give NULL
    // thus insted of writing multiple times we just put this statement in the loop

    while($rows = mysqli_fetch_assoc($result))
    {
      echo "hello " . $rows['attribute name'] . "your mobile number is " . $rows["mobile"] . " and your query is " . $rows["query"] . " <br>";
    }

?>
  </body>
</html>