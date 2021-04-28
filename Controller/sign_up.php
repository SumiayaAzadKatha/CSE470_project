<?php
    session_start();

    //database connect
    $db = mysqli_connect("localhost", "root", "", "user_activity"); //connect db

    if (isset($_POST['reg_btn'])) {
        //saving input in variable
        $username = $_POST['username'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        
        $password = $_POST['password'];
        
        //sql insert command
        $reg = "INSERT INTO user_details(username,full_name, email, contact, password) VALUES('$username', '$fullname', '$email', '$contact', '$password')";
        $run_reg = mysqli_query($db, $reg);
        //alert
        echo "<script>alert('Registered successfully!')</script>";
            
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else{
        
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
    <div id="block"></div>
    <center>
    <form class="box" method="post" action="sign_up.php">
        <table>
            
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" class="textInput" required></td>
            </tr>
            <tr>
                <td>Full Name: </td>
                <td><input type="text" name="fullname" class="textInput" required></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" class="textInput" required></td>
            </tr>
            <tr>
                <td>Contact: </td>
                <td><input type="text" name="contact" class="textInput" required></td>
            </tr>
            
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" class="textInput" required></td>
            </tr>
            
            
            
            <tr>
                <td></td>
                <td><input type="submit" name="reg_btn" value="Register"></td>
            </tr>

            
        </table>
    </form>
    <form class="box1" method="post" action="sign_up.php">
        <table>
            <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                <td>
                    <input type="submit" name="acc_btn" value="Already have an account?">
                </td>
            </tr>
        </table>
    </form>
    </center>
    <div id="block"></div>
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
    <div id="msg">
        <div id="block"></div>
        
        <center>
            
            <div id="block"></div>
            <h2 style="color: blue"><font size="30">Contact Informtation</font></h2>
            <div id="block"></div>
            <div id="l1"><font size="7">Call us: 0123456789</font></div>
            <div id="block"></div>
            <div id="l2"><font size="7">Email us: help@bashachai.com</div>
        </center>
    </div>
</body>
</html>