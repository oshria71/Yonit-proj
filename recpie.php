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

$_GET["flag"]; // name of the food that we need to search in SQL and create the page for 


echo '<!DOCTYPE html>
<html>
    <head>
        <title>Oshri & Asaf</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/style2.css">
    </head>
    <body id="mainS" class="wrapper">
        <header>
            <section class="top">
              <div class="LeftTop">
                  <div class="bold-line"></div>
                  <div class="container" id="containerID">
                    <div class="window">
                      <div class="overlay"></div>
                      <div class="content">
                        <div class="welcome">Hello There!</div>
                        <div class="subtitle">Were almost done. Before using our services you need to create an account.</div>
                        <form action="browse.php" method="GET">
                          <div class="input-fields">
                              <input type="hidden" name="flag" value="register"></input>
                              <input type="text" name="username" placeholder="Username" class="input-line full-width"></input>
                              <input type="email" name="email" placeholder="Email" class="input-line full-width"></input>
                              <input type="password" name="password" placeholder="Password" class="input-line full-width"></input>
                    
                              </div>
                            <div><input type="submit" class="ghost-round full-width" onclick="signUP()" value="Register"></button></div>
                        </form> 
                      </div>
                    </div>
                  </div>
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
                          <a href="settings.html">Account Settings</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                <div class="pagename" id="test">'.$_GET["flag"].'</div>
            </section>
        </header>
        <section class="textArea">
            <p>';
            echo //here we need to pull the description of the food and echo it to the page
            '</p>
        </section>        <section class="textArea">
        <p>';
            echo //here we need to pull the ingreidants and instrucations of the food and echo it to the page
        '</p>
        </section>
        <footer>

        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="script/scritps.js"></script>
    </body>
</html>';

?>