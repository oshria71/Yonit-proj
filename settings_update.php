<?php
session_start();

//need to update the right tables with the user preffances! 

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
                    </section>
        </header>
        <script src="script/scritps.js"></script>
    </body>
</html>';


?>