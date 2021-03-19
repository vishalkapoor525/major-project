
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Front page</title>
        <style>
            *{
                box-sizing: border-box;
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
            a{
                text-decoration: none;
            }
            nav{
                background-color: black;
                height: 30px;
            }
            a>h2{
                text-align: center;
                float: left;
                width: 200px;
                height: 30px;
                margin-left: 12px;
                color:yellow;
                padding-bottom: 6px;
                margin-top: 0%;
            }
            a>h2:hover{
                color: white;
                background-color: green;
                border: 3px solid lightseagreen;
            }
            section{
                width: 60%;
                height: 350px;
                margin-bottom: 10px;
                background-color: cornflowerblue;
                float: left;
                margin-right: 30px;
            }
            section:hover{
                background-color: azure;
            }
            section>p{
                text-align: center;
                font-weight: bold;
                font-size: 20px;
                font-family: cursive;
            }
            section>div{
                font-size: 18px;
                font-weight: bold;
                color: maroon;
            }
            img{
                margin-bottom: 10px;
                position: relative;
                opacity: 1;
            }
            footer{
                background-color: teal;
                height: 200px;
                margin-top: 20px;
                border: 4px solid black;
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
            footer>a{
                text-decoration: none;
                font-size: 20px;
                color: black;
                margin-left: 180px;
                font-weight: bold;
                font-family: serif;
                text-align: center;
            }
            footer>a:hover{
                font-size: 26px;
                color: white;
            }
            footer>div{
                font-size: 20px;
                float: left;
                font-weight: bold;
            }
            
            #image{
                margin-left: 150px;
            }
        </style>
        <script>
            function set_time()
            {
                setInterval(change_image,2000);
            }
            var start = 1;
            function change_image()
            {
                var link;
                if(start==1)
                {
                    link = "img1.jpg";
                }
                else if(start==2)
                {
                    link = "img2.jpg";
                }
                else if(start==3)
                {
                    link = "img4.jpg";
                }
                else if(start==4)
                {
                    link = "img5.jpg";
                }
                else if(start==5)
                {
                    link = "img6.jpg";
                }
                else if(start==6)
                {
                    link = "img7.jpg";
                }
                else if(start==7)
                {
                    link = "img8.jpg";
                }
                else
                {
                    start=1;
                    link="img1.jpg";
                }
                document.getElementById("image").src=""+link;
                start++;
            }
            /*function change()
            {
                var x = document.getElementById("homepage");
                x.style.backgroundColor = "green";
                x.style.color = "white";
            }

            function reset()
            {
                var x = document.getElementById("homepage");
                x.style.backgroundColor = "black";
                x.style.color = "yellow";
            }*/
        </script>
    </head>
    <body onload="set_time()">
        <header>
            <h2>Welcome to Institute of knowledge and progress</h2>
            <nav>
                <a href="#home_page"><h2 id="homepage" style="margin-left: 100px;"> Home Page</h2></a> 
                <a href="teachers.php" id="teacher"><h2>Teacher's Corner</h2></a>  
                <a href="Students.php" id="student"><h2>Student's Corner</h2></a>
                <a href="contact_us.php" id="contact"><h2>Contact us</h2></a>
                <a href="signup form.php" id="contact"><h2>Sign up</h2></a>
                <a href="login.php" id="contact"><h2>Login</h2></a>
            </nav>
        </header>

        <img src="img1.jpg" id="image" width="75%" height="400px">

        <section>
            <p>
                FOUNDER<br> Mr. Ghanshyam Verma
            </p>
            <div> Hiiii Everyone,<br> I hope tou all are feeling well in this pandemic situation <br> About Ghanshyam Verma in this box</div>
        </section>
        <img src="Peacock Wallpapers.jpg" width="35%" height="350px" alt="ghanshyam verma">
        <section>
            <p>
                Co-FOUNDER<br> Mr. Sumit
            </p>
            <div> Hiiii Everyone,<br> I hope tou all are feeling well in this pandemic situation <br> About Sumit in this box</div>
            
        </section>
        <img src="Peacock Wallpapers.jpg" width="35%" height="350px" alt="ghanshyam verma">
        <section>
            <p>
                Faculty members<br> Mr. Vishal Kapoor
            </p>
            <div> Hiiii Everyone,<br> I hope tou all are feeling well in this pandemic situation <br> About Vishal in this box</div>
        </section>
        <img src="image.jpg" width="35%" height="350px" alt="ghanshyam verma">
 
        <footer>
            <address>Location: E-55/56 First floor of kalra store near Mangalam hospital bus stop, opposite Tarang Appartment<br>Call us: 8448154110<br>
                Mail us at: vishalkapoor525@gmail.com<br><a href="https://maps.app.goo.gl/9DxZ7ARc6AFMYyz68">Reach to us</a>
            </address><br><br>
            <div style="font-size: 26px;"> Follow us on social media</div>
            <a href="https://www.facebook.com/C-un-by-vishal-Kapoo-102855435000914">Facebook</a>
            <a href="facebook page link" target="_blank">Instagram</a>
            <a href="facebook page link" target="_blank">Telegram</a>
            <a href="https://chat.whatsapp.com/K41C6Q6YI00DJUi3BNIasB" target="_blank">WhatsApp group</a>
            <br><br>
            <div>
                            </div>
        </footer>
    </body>
</html>