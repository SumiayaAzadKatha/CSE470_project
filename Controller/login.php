<?php 
    
    session_start();

    $db = mysqli_connect("localhost", "root", "", "user_activity"); //connect db

    if (isset($_POST['log_btn'])) {
        $username = $_POST['username'];
        
        $password = $_POST['password'];
        
        $select_user = "select * from user_details where username='$username' AND password='$password'";
        
        $run_user = mysqli_query($db,$select_user);
        
        
        $check_user = mysqli_num_rows($run_user);
        
        
        
        
        
        if($check_user==1){
            
            $_SESSION['username']=$username;
            
            echo "<script>alert('Logged in successfully!')</script>";
            
            echo "<script>window.open('index.php', '_self')</script>";
            
        }
        else{
            
            echo "<script>alert('Your username or password is wrong')</script>";
            echo "<script>window.open('login.php', '_self')</script>";
        }
    }
    if (isset($_POST['goReg_btn'])) {
        header("location: sign_up.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="login_admin.php">Login as Admin</a></li>
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
    <div id="block"></div>
    <center>
    <form class="box" method="post" action="login.php">
            <table>
                <tr>
                    
                    <td>Username: </td>
                    <td><input type="text" name="username" class="textInput" required></td>
                </tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" class="textInput" required></td>
                </tr>
                <tr>
                    <td> </td>
                    <td><input type="submit" name="log_btn" value="Log in"></td>
                    
                </tr>
                
            </table>
            
    </form>
    <form class="box2" method="post" action="login.php">
        <table>
            <tr><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                <td>
                    <input type="submit" name="goReg_btn" value="Don't have an account?">
                </td>
            </tr>
        </table>
    </form>
    </center>
    
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