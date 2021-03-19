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

        <style>
            body{
                background-color: powderblue;
                
            }
            header > h2{
                text-align: center;
                color:orangered;
                font-weight: bold;
                font-family: 'Times New Roman', Times, serif;
                font-size: 38px;
                text-transform: capitalize;
                height: 30px;
            }
            nav>a{
                text-decoration: none;
                width: 200px;
                color: aqua;
                float: left;
                font-weight: bold;
                background-color: black;
                font-size: 26px;
                text-align: center;
                margin-left: 60px;
            }
            nav>a:hover{
                color: black;
                background-color: cornsilk;
                border: 3px solid red;
                border-radius: 5px;
            }
            .n1{
                width: 300px;
                height: 30px;
                font-size: 26px;
                font-family: cursive;
                color: darkred;
                text-align: center;
                float: left;
                cursor: pointer;
            }
            section>h2{
                text-transform: uppercase;
                text-align: center;
                font-size: 30px;
                font-weight: bold;
                width: 250px;
                margin-left: 650px;
            }
            section>h2:hover{
                color: white;
                background-color: black;
                border-radius: 5px;
            }
            h1{
                color: white;
            }
            footer{
                height: 500px;
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
        <script>
            function open_content_Science_class9th()
            {
                var x = "<a id ='chapter_1' href=c1.pdf style='text-decoration: none;'>chapter 1 : Chemical Reaction and Equation</a> <br><br> <a href=c3.pdf style='text-decoration: none;'>Chapter 3 : Metals and Non metals";
                document.getElementById("Science_notes_class9th").style.fontSize = "24px";
                document.getElementById("Science_notes_class9th").innerHTML=x; 
            }
            function open_content_Maths_class9th()
            {
                var x = "<br><br><br><a href=c1.pdf>Maths chapter 1 : Chemical Reaction and Equation</a> <br><br> <a href=c3.pdf>Chapter 3 : Metals and Non metals";
                document.getElementById("Maths_notes_class9th").style.fontSize = "24px";
                document.getElementById("Maths_notes_class9th").innerHTML=x; 
            }
            function comment_class9th()
            {
                var data = "<br><br><br>Name : <br><input id = 'class9th_name' type='text' name='Name' placeholder='Enter your Name'><label id='class9th_name_labe'>Fill it</label> <br><br> Mobile Number : <br><input type='tel' name='Mobile_number' placeholder='Mobile Number'> <br><br> Comment : <br><textarea name='message' rows='5' cols='80' placeholder='Enter your message'></textarea> <br><br> <input type='submit' value='submit'>";
                document.getElementById("class9th_comment").innerHTML=data;
                var x = document.getElementById("class9th_name_labe");
                x.style.visibility = "hidden";
            }
            function validate()
            {
                var x = document.getElementById("class9th_name");
                var y = document.getElementById("class9th_name_labe");
                if(x.value=="")
                {
                    alert("Name can't be blank");
                    x.style.border = "3px solid red";
                    y.style.visibility = "visible";
                    y.style.color = "red";
                    y.style.marginLeft = "10px";
                    y.style.fontSize = "20px";
                    return false;
                }
            }


            function open_content_Science_class10th()
            {
                var x = "<a href=c1.pdf>chapter 1 : Chemical Reaction and Equation</a> <br><br> <a href=c3.pdf>Chapter 3 : Metals and Non metals";
                document.getElementById("Science_notes_class10th").style.fontSize = "24px";
                document.getElementById("Science_notes_class10th").innerHTML=x; 
            }
            function open_content_Maths_class10th()
            {
                var x = "<br><br><br><a href=c1.pdf>Maths chapter 1 : Chemical Reaction and Equation</a> <br><br> <a href=c3.pdf>Chapter 3 : Metals and Non metals";
                document.getElementById("Maths_notes_class10th").style.fontSize = "24px";
                document.getElementById("Maths_notes_class10th").innerHTML=x; 
            }
            function comment_class10th()
            {
                var data = "<br><br><br>Name : <br><input id = 'class10th_name' type='text' name='Name' placeholder='Enter your Name'><label id='class10th_name_labe'>Fill it</label> <br><br> Mobile Number : <br><input type='tel' name='Mobile_number' placeholder='Mobile Number'> <br><br> Comment : <br><textarea name='message' rows='5' cols='80' placeholder='Enter your message'></textarea> <br><br> <input type='submit' value='submit'>";
                document.getElementById("class10th_comment").innerHTML=data;
                var x = document.getElementById("class10th_name_labe");
                x.style.visibility = "hidden";
            }
            function validate_10th()
            {
                var x = document.getElementById("class10th_name");
                var y = document.getElementById("class10th_name_labe");
                if(x.value=="")
                {
                    alert("Name can't be blank");
                    x.style.border = "3px solid red";
                    y.style.visibility = "visible";
                    y.style.color = "red";
                    y.style.marginLeft = "10px";
                    y.style.fontSize = "20px";
                    return false;
                }
            }




            function open_content_Science_class11th()
            {
                var x = "<a href=c1.pdf>chapter 1 : Chemical Reaction and Equation</a> <br><br> <a href=c3.pdf>Chapter 3 : Metals and Non metals";
                document.getElementById("Science_notes_class11th").style.fontSize = "24px";
                document.getElementById("Science_notes_class11th").innerHTML=x; 
            }
            function open_content_Maths_class11th()
            {
                var x = "<br><br><br><a href=c1.pdf>Maths chapter 1 : Chemical Reaction and Equation</a> <br><br> <a href=c3.pdf>Chapter 3 : Metals and Non metals";
                document.getElementById("Maths_notes_class11th").style.fontSize = "24px";
                document.getElementById("Maths_notes_class11th").innerHTML=x; 
            }
            function comment_class11th()
            {
                var data = "<br><br><br>Name : <br><input type='text' name='Name' placeholder='Enter your Name'> <br><br> Mobile Number : <br><input type='tel' name='Mobile_number' placeholder='Mobile Number'> <br><br> Comment : <br><textarea name='message' rows='5' cols='80' placeholder='Enter your message'></textarea> <br><br> <input type='submit' value='submit'>";
                document.getElementById("class11th_comment").innerHTML=data;
            }


            function open_content_Science_class12th()
            {
                var x = "<a href=c1.pdf>chapter 1 : Chemical Reaction and Equation</a> <br><br> <a href=c3.pdf>Chapter 3 : Metals and Non metals";
                document.getElementById("Science_notes_class12th").style.fontSize = "24px";
                document.getElementById("Science_notes_class12th").innerHTML=x; 
            }
            function open_content_Maths_class12th()
            {
                var x = "<br><br><br><a href=c1.pdf>Maths chapter 1 : Chemical Reaction and Equation</a> <br><br> <a href=c3.pdf>Chapter 3 : Metals and Non metals";
                document.getElementById("Maths_notes_class12th").style.fontSize = "24px";
                document.getElementById("Maths_notes_class12th").innerHTML=x; 
            }
            function comment_class12th()
            {
                var data = "<br><br><br>Name : <br><input type='text' name='Name' placeholder='Enter your Name'> <br><br> Mobile Number : <br><input type='tel' name='Mobile_number' placeholder='Mobile Number'> <br><br> Comment : <br><textarea name='message' rows='5' cols='80' placeholder='Enter your message'></textarea> <br><br> <input type='submit' value='submit'>";
                document.getElementById("class12th_comment").innerHTML=data;
            }
        </script>


        <?php
            $servername = "localhost";
            $username = "root";
            $password = "Vishal@123";
            $database = "website";
            $conn = mysqli_connect($servername,$username,$password,$database);
            if(!$conn)
            {
                die("<br> Sorry we are facing tecnical problems <br> sorry for inconvience");
            }
            $sql = "CREATE DATABASE Website";
            $result = mysqli_query($conn,$sql);
            //$sql = "CREATE TABLE `class9` ( `name` TEXT NOT NULL , `mobile number` DOUBLE NOT NULL , `suggestion` VARCHAR(500) NOT NULL )";
            //$result = mysqli_query($conn,$sql);
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $name = $_POST['Name'];
                $mobile_number = $_POST['Mobile_number'];
                $desc = $_POST['message'];
                
                //$sql = "SELECT * FROM class9 WHERE name = '$name'";
                //$result = mysqli_query($conn,$sql);
                //$count = mysqli_num_rows($result);
                //if($count==0)
                //{
                    $sql = "INSERT INTO class9 (`name`, `mobile number`, `suggestion`) VALUES ('$name', '$mobile_number', '$desc')";
                    $result = mysqli_query($conn,$sql);
                    if($result)
                    {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>SUCCESS</strong> Hii ' . $name . ' your record is sucessfully submitted <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }
                    else
                    {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>FAILURE</strong> Hii ' . $name . ' your record is not sucessfully submitted <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }
                //}
                //else
                //{
                  //  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>WARNING</strong> Hii ' . $name . ' your record is already present<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                //}
                
            }

        ?>
    </head>
    <body>
        
        <header>
            <h2>Welcome to Institute of knowledge and progress</h2>
        </header>
        
        <marquee><h1> TEST ACCOUNCEMENTS</h1></marquee>
        
        <nav>
            <a href="#class 9th" style="margin-left: 250px;">Class 9th</a>
            <a href="#class 10th">Class 10th</a>
            <a href="#class 11th">Class 11th</a>
            <a href="#class 12th">Class 12th</a>
        </nav>



        <a name="class9th"></a><br><br><br><br>
        <section style="clear: left;">
            <h2>class 9th</h2><hr style="height: 3px; background-color: black;">
            <div class="n1" style="margin-left: 150px;" onclick="open_content_Science_class9th()">Science Notes</div>
            <div class="n1" onclick="open_content_Maths_class9th()">Maths Notes</div>
            <div class="n1"><a href="https://us04web.zoom.us/j/957526965?pwd=ZTJSdWdrYm04WmZqUUMxcmpkcXMrZz09" style="text-decoration: none; color: darkred;">Join Zoom Classes</a></div>
            <div class="n1" onclick="comment_class9th()">Query Box</div><br><br><br><br>
            <div id="Science_notes_class9th" style="clear: left; text-decoration: none;"></div>
            <div id="Maths_notes_class9th"></div>
            <form onsubmit="return validate()" method = "POST" action = "/phpfiles/Students.php">
                <div id="class9th_comment"></div>
            </form>
        </section>



        <a name="class 10th"></a><br><br><br><br>
        <section style="clear: left;">
            <h2>class 10th</h2><hr style="height: 3px; background-color: black;">
            <div class="n1" style="margin-left: 150px;" onclick="open_content_Science_class10th()">Science Notes</div>
            <div class="n1" onclick="open_content_Maths_class10th()">Maths Notes</div>
            <div class="n1"><a href="https://us04web.zoom.us/j/957526965?pwd=ZTJSdWdrYm04WmZqUUMxcmpkcXMrZz09" style="text-decoration: none; color: darkred;">Join Zoom Classes</a></div>
            <div class="n1" onclick="comment_class10th()">Query Box</div><br><br><br><br>
            <div id="Science_notes_class10th" style="clear: left; text-decoration: none;"></div>
            <div id="Maths_notes_class10th"></div>
            <form onsubmit="return validate_10th()" method = "POST">
                <div id="class10th_comment"></div>
            </form>
        </section>



        <a name="class 11th"></a><br><br><br><br>
        <section style="clear: left;">
            <h2>class 11th</h2><hr style="height: 3px; background-color: black;">
            <div class="n1" onclick="open_content_Science_class11th()">Physics Notes</div>
            <div class="n1" onclick="open_content_Maths_class11th()">Chemistry Notes</div>
            <div class="n1" onclick="open_content_Maths_class11th()">Biology Notes</div>
            <div class="n1"><a href="https://us04web.zoom.us/j/957526965?pwd=ZTJSdWdrYm04WmZqUUMxcmpkcXMrZz09" style="text-decoration: none; color: darkred;">Join Zoom Classes</a></div>
            <div class="n1" onclick="comment_class11th()">Query Box</div><br><br><br><br>
            <div id="Science_notes_class11th" style="clear: left;"></div>
            <div id="Maths_notes_class11th"></div>
            <div id="class11th_comment"></div>
        </section>
        
        
        
        <a name="class 12th"></a><br><br><br><br>
        <section style="clear: left;">
            <h2>class 12th</h2><hr style="height: 3px; background-color: black;">
            <div class="n1" onclick="open_content_Science_class12th()">Physics Notes</div>
            <div class="n1" onclick="open_content_Maths_class12th()">Chemistry Notes</div>
            <div class="n1" onclick="open_content_Maths()">Biology Notes</div>
            <div class="n1"><a href="https://us04web.zoom.us/j/957526965?pwd=ZTJSdWdrYm04WmZqUUMxcmpkcXMrZz09" style="text-decoration: none; color: darkred;">Zoom Classes</a></div>
            <div class="n1" onclick="comment_class12th()">Query Box</div><br><br><br><br>
            <div id="Science_notes_class12th" style="clear: left;"></div>
            <div id="Maths_notes_class12th"></div>
            <div id="class12th_comment"></div>
        </section>


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
                <li><a href="signup form.php">Sign up</a></li>
                <li><a href="login.php">Login</a></li>
            </ol>
        </footer>
        <!--<script>
            setTimeout(function(){alert("Location: E-55/56 First floor of kalra store near Mangalam hospital bus stop, opposite Tarang Appartment\n\nCall us: 8448154110\n\nMail us at: vishalkapoor525@gmail.com")},5000);
        </script>-->
    </body>
</html>