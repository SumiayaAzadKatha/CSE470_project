<?php 
    
    session_start();

    $db = mysqli_connect("localhost", "root", "", "user_activity"); //connect db

    if (isset($_POST['log_btn'])) {
        $username = $_POST['username'];
        
        $password = $_POST['password'];
        
        if($username = "admin" && $password = "admin") {
            
            
            echo "<script>alert('Logged in successfully!')</script>";
            
            header("Location: index_admin.php");
            
        }
        else{
            
            echo "<script>alert('Your username or password is wrong')</script>";
            header("Location: login_admin.php");
        }
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="../View/css/style.css" type="text/css" rel="stylesheet">
    <link href="../View/img/icon.png" type="img/icon" rel="icon">
</head>
<body>
    <div id="full">
        
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
                        <li><a href="login.php">Login as User</a></li>
                    </ul>
                </div>
                
            </div>
            <div id="block"></div>
            <div id="heading">
            <center>
                
            </center>
            </div>
            
        
    </div>
    <div id="msg">
        
        
        <div class="header">
        <h1 align="center"><font color="green">Admin Login</font></h1>
    </div>
    
    <center>
    <form class="box" method="post" action="login_admin.php">
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
    
    </center>
    <div id="block"></div>
</body>
</html>