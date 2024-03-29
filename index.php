<?php
session_start();
$_SESSION["usr"] = NULL;

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
              <div class="loginBox" id="loginBox-id">
                                    <button id="Login" class="btn btn-outline-success" onclick="signUP(';echo "2"; echo')">Login</button>
                                    <button id="SignUp" class="btn btn-outline-primary" onclick="signUP(';echo "1";echo')">SignUp</button></div>
              <div class="LeftTop">
                  <div class="bold-line"></div>
                  <div class="container" id="containerID">
                    <div class="window">
                      <div class="overlay"></div>
                      <div class="content">
                        <div class="welcome">Hello There!</div>
                        <div class="subtitle">We"re almost done. Before using our services you need to create an account.</div>
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
                  <div class="bold-line"></div>
                  <div class="container" id="containerIDD">
                    <div class="window">
                      <div class="overlay"></div>
                      <div class="content">
                        <div class="welcome">Hello There!</div>
                        <form action="browse.php" method="GET">
                          <div class="input-fields">
                              <input type="hidden" name="flag" value="login"></input>
                              <input type="text" name="username" placeholder="Username" class="input-line full-width"></input>
                              <input type="password" name="password" placeholder="Password" class="input-line full-width"></input>
                              </div>
                            <div><input type="submit" class="ghost-round full-width" onclick="signUPp()" value="Login"></button></div>
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
                          <a href="settings.php">Account Settings</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                <div class="pagename" id="test">Welcome to Cookit</div>
            </section>
        </header>
        <section class="textArea">
            <p>
                Welcome to our website, here you can find recipes to all cooking levels.<br><br>
                Go to "<a href="index2.php">Browse</a>"" page and select a meal to cook.<br><br>
                Please note that only premium user can save recipes and to view recipes by type. 
            </p>
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