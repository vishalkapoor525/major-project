<!DOCTYPE html>
<html>
    <head>
        <title>
            Contact us
        </title>
        <meta charset="utf-8">
        <style>
            body{
                background-color: cadetblue;
            }
            header > h2{
                text-align: center;
                color:black
                font-weight: bold;
                font-family: 'Times New Roman', Times, serif;
                font-size: 38px;
                text-transform: capitalize;
                height: 30px;
            }
            hr{
                height: 3px;
                background-color: crimson;
            }
            #map_image{
                margin-top: 100px;
                width: 45%;
                margin-left: 400px;
                border: 3px solid black;
                border-radius: 10px ;
            }
            #map_image:hover{
                border: 3px solid red;
            }
            #display{
                position: absolute;
                margin-top: 100px;
                margin-left: 400px;
                font-size: 40px;
                color: black;
            }
            footer{
                height: 400px;
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
            function dispaly_form()
            {
                var data = "<br><br><br>Name : <br><input id = 'class9th_name' type='text' name='Name' placeholder='Enter your Name'><label id='name_labe'>Fill it</label> <br><br> Mobile Number : <br><input type='tel' name='Mobile_number' placeholder='Mobile Number'> <br><br> Comment : <br><textarea name='message' rows='5' cols='80' placeholder='Enter your message'></textarea> <br><br> <input type='submit' value='submit'>";
                document.getElementById("query_form").innerHTML=data;
                var x = document.getElementById("name_labe");
                x.style.visibility = "hidden";
                var a = document.getElementById("display");
                a.style.visibility="hidden";
            }
            function validate()
            {
                var x = document.getElementById("class9th_name");
                var y = document.getElementById("name_labe");
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
        </script>
    </head>
    <body>
        <header>
            <h2>Welcome to Institute of knowledge and progress</h2><hr>
        </header>
        <a href="https://maps.app.goo.gl/9DxZ7ARc6AFMYyz68"><img id="map_image" src="map.png" height="400px"></a>
        <div id="display" onclick="dispaly_form()">Click here to give your Valuable Feedback</div>
        <form onsubmit="return validate()">
            <div id="query_form"></div>
        </form>
            <br><br><br><br><br><br><br>
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
    </body>
</html>