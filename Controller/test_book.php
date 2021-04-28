<?php 
    
    session_start();

    $db = mysqli_connect("localhost", "root", "", "user_activity"); //connect db

    if (isset($_POST['log_btn'])) {
        $username = $_POST['username'];
        
        
        
        $select_user = "select * from booking_confrim where booked_by='$username'";
        
        $run_user = mysqli_query($db,$select_user);
        
        
        $check_user = mysqli_num_rows($run_user);
        
        
        
        
        
        if($check_user==1){
            
            
            
            echo "<script>alert('User found successfully!')</script>";
            
            
            
        }
        else{
            
            echo "<script>alert('Wrong query!')</script>";
            
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
<form class="box" method="post" action="test_book.php">
            <table>
                <tr>
                    
                    <td>Username: </td>
                    <td><input type="text" name="username" class="textInput" required></td>
                
                <tr>
                    <td> </td>
                    <td><input type="submit" name="log_btn" value="Log in"></td>
                    
                </tr>
                
            </table>
            
    </form>
</body>
</html>