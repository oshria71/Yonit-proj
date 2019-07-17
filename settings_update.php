<?php
session_start();
//signgup
$servername = "182.50.133.168";
$username = "studDB19a";
$password = "stud19DB1!";
$dbname = "studDB19a";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

//need to update the right tables with the user preffances! 
//level 1-3
//Ingredients- Beef,Chicken,Fish,Milk,Egg,Vegetarian,peanut,Milk,Gluten,Eggs
$sql3 = "SELECT * FROM tb_user_222 WHERE Name= ".$_SESSION['usr']."";
$sql2 = 'DELETE FROM connection_tb_222 where connection_tb_222.id_user = ('.$sql3.' )';
$sql5 = 'SELECT FROM  tb_user_222_products where tb_user_222_products.name = '.$_GET['Ingredients'].'';

$sql = 'INSERT INTO connection_tb_222 (id_user,id_sub) VALUES (('.$sql3.'),('.$sql5.'))';
$conn->query($sql);

echo '<!DOCTYPE html>
<html>
    <head>
        <title>Oshri & Asaf</title>
        <link rel="stylesheet" type="text/css" href="style/style2.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id="settingPage" class="wrapper">
        <header>
                <section class="top">
                <div class="LeftTop">
                <a href="index.php" class="homepage"></a>
                </div>
                        <div class="nev">
                            <button id="burger" class="open-main-nav">
                              <span class="burger"></span>
                              <span class="burger-text">Menu</span>
                            </button>
                            <nav class="main-nav" id="main-nav">
                              <ul>
                                <li>
                                  <a href="index2.php">Browse</a>
                                </li>
                                <li>
                                  <a href="favi.php">Favorites</a>
                                </li>
                                <li>
                                  <a href="settings.php">Account Settings</a>
                                </li>
                              </ul>
                            </nav>
                          </div>
                          <h1 class="inhead">Account Settings</h1>
                          <h3 class="inhead">success</h3>
                    </section>
        </header>
        <script src="script/scritps.js"></script>
    </body>
</html>';


?>