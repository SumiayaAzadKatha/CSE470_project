<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Property</title>
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
            <font size="60" color="black" style="background-color: #80ced6;">AVAILABLE<br> PROPERTIES</font>
            </center>
            </div>
            <div id="banner"></div>
        </div>
    </div>
    <div id="block"></div>
    <div id="banner">
        
            
            <div>
            
                <center>
                
                <table>
                    <tr>
                        <th width="10%" height="50%"><font color="blue">Apartment Name</font></th>
                        <th width="10%" height="50%"><font color="blue">Builders Name</font></th>
                        <th width="10%" height="50%"><font color="blue">Location</font></th>
                        <th width="10%" height="50%"><font color="blue">Available Flat(s)</font></th>
                        <th width="10%" height="50%"><font color="blue">Price(per flat)</font></th>
                    </tr>
                    <?php 
                        $db = mysqli_connect("localhost", "root", "", "user_activity"); //connect db
                        if($db -> connect_error) {
                            die("Connection failed:" . $db -> correct_error);
                            
                        }
                        $sql = "SELECT apartment_name, builder, location, flat, price FROM properties";
                        $result = mysqli_query($db, $sql);
                        if(mysqli_num_rows($result) > 0){
				
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr><td><center>" . $row["apartment_name"] . "</center></td><td><center>". $row["builder"] . "</center></td><td><center>"
                                . $row["location"] . "</center></td><td><center>". $row["flat"] . "</center></td><td><center>"
                                . $row["price"] . "</center></td></tr>";
                            }
                        }
                            
                        
                    ?>
                </table>
                </center>
            </div>
        </div>
    
        
    </div>
    <div id="block"></div>
</body>
</html>