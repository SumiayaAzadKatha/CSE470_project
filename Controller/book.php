<?php
    session_start();

    $db = mysqli_connect("localhost", "root", "", "user_activity"); //connect database

    
    if (isset($_POST['book_btn'])) {
        
        $apartment_name = $_POST['aname'];
        $amount = $_POST['amount'];
        $password = $_POST['password'];
        
        $select_user = "select * from user_details where username='$_SESSION[username]' AND password='$password'";
        
        $run_user = mysqli_query($db,$select_user);
        
        //check password
        $check_user = mysqli_num_rows($run_user);
        
        
        
        
        
        if($check_user==1){
            
            
            $av_flat = "SELECT flat FROM properties WHERE apartment_name = '$apartment_name'";
            $run_av_flat = mysqli_query($db,$av_flat);
            while($row = mysqli_fetch_array($run_av_flat)) {
                //storing balance
                $num = $row['flat'];
                //check balance
                if($num<1) {
                    echo "<script>alert('Not Available')</script>";
                    echo "<script>window.open('view_prop.php', '_self')</script>";
                }
    
                else{
                    $reg = "INSERT INTO booking_confrim(booked_by, ap_name, num_flat) VALUES('$_SESSION[username]', '$apartment_name', '$amount')";
                    $run_reg = mysqli_query($db, $reg);
                    $update = "UPDATE properties SET flat=(flat - '$amount') WHERE apartment_name = '$apartment_name'";
                    $run_update = mysqli_query($db, $update);
                    
                    echo "<script>alert('Booked Succesfully!')</script>";
                    if($_SESSION["username"]==true) {
                        echo "<script>window.open('view_prop.php', '_self')</script>";
                    }
                }
            }
            
            
        }
        else{
            echo "<script>alert('Your password is incorrect')</script>";
            echo "<script>window.open('login.php', '_self')</script>";
        }
    }
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Property</title>
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
            <font size="60" color="black" style="background-color: #80ced6;">BOOK<br> PROPERTIES</font>
            </center>
            </div>
            <div id="banner"></div>
        </div>
    </div>
    <div id="block"></div>
    <div id="banner">
        
            
            <div>
            
                <center>
                <form class="box" method="post" action="book.php">
        <table>
            
            <tr>
                <td><p align="left">User: 
                        
                    </p>
                </td>
                <td><p>
                        <?php
                            

                            $db = mysqli_connect("localhost", "root", "", "user_activity"); //connect db
                            
                            if($_SESSION["username"]==true) {
                                echo $_SESSION["username"];
                            }
                        ?>
                    </p>
                </td>
                
            </tr>
            <tr>
                <td>Apartment Name: </td>
                <td><input type="text" name="aname" class="textInput" required></td>
            </tr>
            <tr>
                <td>Number of Flat(s): </td>
                <td><input type="number" name="amount" class="textInput" required></td>
            </tr>
            
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" class="textInput" required></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="book_btn" value="Book"></td>
            </tr>
        </table>
    </form>
                </center>
            </div>
        </div>
    
        
    </div>
    <div id="block"></div>
</body>
</html>