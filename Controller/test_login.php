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
            
            
            
            echo "<script>alert('Logged in successfully!')</script>";
            
            
            
        }
        else{
            
            echo "<script>alert('Your username or password is wrong')</script>";
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="box" method="post" action="test_login.php">
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
</body>
</html>