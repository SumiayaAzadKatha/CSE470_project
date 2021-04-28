<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
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
                <font size="60" color="black" style="background-color: #80ced6;">Contact Informtation<br> Call us: 0123456789 <br> Email us: help@bashachai.com</font>
            </center>
            </div>
            <div id="banner"></div>
        </div>
    </div>
    <div id="msg">
        <div id="block"></div>
        
        <center>
            
            
        </center>
    </div>
    
        
    
    
</body>
</html>