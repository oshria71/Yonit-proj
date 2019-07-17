<?php
session_start();

if($_SESSION["usr"]== NULL){
  echo 'Ops you are not authorized to accsses this page! <br> Please nevgiate to <a href="index.php">this page</a> and login or signup';
}else {
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
                    </section>
        </header>
        <section id="container2">
          <sectoin class="text1">
              <br><h3>Hello User</h3>
              <h4>Select your preferences</h4>
          </sectoin>
          <section class="text2">
              <h4>what is your level?</h4><br>
          </section>
          <form class="formS" action="settings_update.php" method="GET">
            <div class="levels">
              <input type="radio" name="level"  id="Beginner" class="input-hidden" value="1"/>
            <label for="Beginner">
              <img src="pic/Lbaby.png" alt="Beginner" />
            </label>
            
            <input type="radio" name="level" id="Average" class="input-hidden" value="2"/>
            <label for="Average">
              <img src="pic/Lma.png" alt="Average" />
            </label>

            <input type="radio" name="level" id="Pro" class="input-hidden" value="3"/>
            <label for="Pro">
              <img src="pic/Lking.png" alt="Pro" />
            </label>
            </div>
            <section class="diffbutton">
            <h2 class="text3">Ingredients you love</h2>
            <label>
                <input type="checkbox" name="Ingredients" value="Beef"  />
                <span>Beef</span>
            </label>
            <label>
                <input type="checkbox" name="Ingredients" value="Chicken" />
                <span>Chicken</span>
            </label>
            <label>
                <input type="checkbox" name="Ingredients" value="Fish" />
                <span>Fish</span>
            </label>
            <label>
                <input type="checkbox" name="Ingredients" value="Milk" />
                <span>Milk</span>
            </label>
            <label>
                <input type="checkbox" name="Ingredients" value="Egg" />
                <span>Egg</span>
            </label>
            <label>
                <input type="checkbox" name="Ingredients" value="Vegetarian" />
                <span>Vegetarian</span>
            </label>

            <h2 class="text4">dietary restrictions</h2>
            <section class="alrgic">
            <label>
                <input type="checkbox" name="Ingredients" value="peanut" />
                <span>peanut</span>
            </label>
            <label>
                <input type="checkbox" name="Ingredients" value="Milk" />
                <span>Milk</span>
            </label>
            <label>
                <input type="checkbox" name="Ingredients" value="Gluten" />
                <span>Gluten</span>
            </label>
            <label>
                <input type="checkbox" name="Ingredients" value="Eggs" />
                <span>Eggs</span>
            </label>
          </section>
        </section>
          <section class="submitbox">
            <input type="submit" class="submitB">
          </section>
      </section>
        </form>
        <footer>

        </footer>
        <script src="script/scritps.js"></script>
    </body>
</html>';
}

?>