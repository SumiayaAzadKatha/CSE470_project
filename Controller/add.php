<?php
    session_start();

    //database connect
    $db = mysqli_connect("localhost", "root", "", "user_activity"); //connect db

    if (isset($_POST['add_btn'])) {
        //saving input in variable
        $aname = $_POST['aname'];
        $builders = $_POST['build'];
        
        $location = $_POST['loc'];
        $fl = $_POST['flat'];
        $pr = $_POST['price'];
        
        
        //sql insert command
        $add = "INSERT INTO properties(apartment_name,builder, location, flat, price) VALUES('$aname', '$builders', '$location', '$fl', '$pr')";
        $run_add = mysqli_query($db, $add);
        //alert
        echo "<script>alert('Added successfully!')</script>";
            
        echo "<script>window.open('add.php', '_self')</script>";
    }
    else{
        
    }
    if (isset($_POST['acc_btn'])) {
        echo "<script>alert('Something wrong happened!')</script>";
        echo "<script>window.open('add.php', '_self')</script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
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
                        <li><a href="index_admin.php">Admin Home</a></li>
                        
                        
                        <li><a href="view_prop_ad.php">View Properties</a></li>
                        <li><a href="add.php">Add Property</a></li>
                        <li><a href="login.php">Sign Out</a></li>
                    </ul>
                </div>
                
            </div>
            
        </div>
    </div>
    <div id="block"></div>
    <center>
    <form class="box" method="post" action="add.php">
        <table>
            
            <tr>
                <td>Apartment Name: </td>
                <td><input type="text" name="aname" class="textInput" required></td>
            </tr>
            <tr>
                <td>Builders Name: </td>
                <td><input type="text" name="build" class="textInput" required></td>
            </tr>
            <tr>
                <td>Location: </td>
                <td><input type="text" name="loc" class="textInput" required></td>
            </tr>
            <tr>
                <td>Available Flat(s): </td>
                <td><input type="number" name="flat" class="textInput" required></td>
            </tr>
            <tr>
                <td>Price(per flat): </td>
                <td><input type="number" name="price" class="textInput" required></td>
            </tr>
            
            
            
            
            <tr>
                <td></td>
                <td><input type="submit" name="add_btn" value="Add"></td>
            </tr>

            
        </table>
    </form>
    
    
    </div>
</body>
</html>