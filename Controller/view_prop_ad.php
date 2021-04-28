<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Properties (Admin)</title>
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
                    <li><a href="add.php">Add Properties</a></li>
                    <li><a href="login.php">Sign Out</a></li>
                </ul>
            </div>
        </div>
        <div id="block"></div>
        
       

        <div id="banner">
        
            
            <div>
            <h1 align="center"><font color="blue" size="30">Properties</font></h1>
                <center>
                
                <table>
                    <tr>
                        <th width="10%" height="50%">Apartment Name</th>
                        <th width="10%" height="50%">Builders Name</th>
                        <th width="10%" height="50%">Location</th>
                        <th width="10%" height="50%">Available Flat(s)</th>
                        <th width="10%" height="50%">Price(per flat)</th>
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