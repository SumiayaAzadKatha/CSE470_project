<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home (Property Management)</title>
    <link href="../View/css/style.css" type="text/css" rel="stylesheet">
    <link href="../View/img/icon.png" type="img/icon" rel="icon">
</head>
<body>
    <div id="full">
        <div style="background-image: url('../View/img/bg1.jpg'); width: 100%; height: 625px;">
            <div id="header" style="background: rgb(51, 51, 96);">
                <div id="logo">
                    <h1><font color="white"> GetProperty.com </font></h1>
                </div>
                <div id="nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        
                        
                        <li><a href="view_prop.php">View Properties</a></li>
                        <li><a href="book.php">Book Properties</a></li>
                        <li><a href="login.php">Sign Out</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="user.php"><font color="red">User: 
                                <?php
                                    session_start();

                                    $db = mysqli_connect("localhost", "root", "", "user_activity"); //connect db
                                    
                                    if($_SESSION["username"]==true) {
                                        echo $_SESSION["username"];
                                    }
                                ?></font>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="block"></div>
            <div id="heading">
            <center>
            <font size="60" color="black" style="background-color: #80ced6;">YOU DESERVE A BETTER WAY<br> TO INVEST IN YOUR DREAM HOME</font>
            </center>
            </div>
            <div id="banner"></div>
        </div>
    </div>
    <div id="msg">
        <div id="block"></div>
        <h1 align="center"><font color="red" size="40">Welcome to GetProperty.com</font></h1>
        <center>
            <font size="5"Book your dream home from anywhere from the world. <br> We offer you the most desirable projects. <br>We live by these principles to create great experiences for people, now and in the future. <br>The experiences, lifestyles and communities that we create are not only innovative,<br> efficient and cost effective places, they are so much more. </font>
            <div id="block"></div>
            <h2 style="color: blue"><font size="30">Our Brands</font></h2>
            <div id="i1"><img src="../View/img/i1.jpg" width="100%"></div>
            <div id="i2"><img src="../View/img/i2.jpg" width="100%"></div>
            <div id="i3"><img src="../View/img/i3.jpg" width="100%"></div>
        </center>
    </div>
    
        
    </div>
    <div id="block"></div>
</body>
</html>