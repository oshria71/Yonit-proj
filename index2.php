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
if($_SESSION["usr"] != NULL){
  $sql = 'SELECT * from tb_user_222_products WHERE EXISTS (select id_sub from connection_tb_222 where id_user = (select id from tb_user_222 where name = "'.$_SESSION["usr"].'"))';
}else {
  $sql = 'SELECT * from tb_user_222_products'; //in case no user is connected it will show all options
}
$result = $conn->query($sql);

echo "<!DOCTYPE html>
<html>
    <head>
        <title>Oshri & Asaf</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'> 
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' type='text/css' href='style/style2.css'>
      </head>
    <body class='wrapper'>
      <header>
        <section class='top'>
              <div class='LeftTop'>
              <a href='index.php' class='homepage'></a>
              <div class='bold-line'></div>
                  <div class='container' id='containerID'>
                    <div class='window'>
                      <div class='overlay'></div>
                      <div class='content'>
                        <div class='welcome'>Hello There!</div>
                        <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div>
                        <form action='browse.php' method='GET'>
                          <div class='input-fields'>
                              <input type='hidden' name='flag' value='register'></input>
                              <input type='text' name='username' placeholder='Username' class='input-line full-width'></input>
                              <input type='email' name='email' placeholder='Email' class='input-line full-width'></input>
                              <input type='password' name='password' placeholder='Password' class='input-line full-width'></input>
                              </div>
                            <div><input type='submit' class='ghost-round full-width' onclick='signUP()' value='Register'></button></div>
                        </form> 
                      </div>
                    </div>
                  </div>
                  
                  <div class='bold-line'></div>
                  <div class='container' id='containerIDD'>
                    <div class='window'>
                      <div class='overlay'></div>
                      <div class='content'>
                        <div class='welcome'>Hello There!</div>
                        <form action='browse.php' method='GET'>
                          <div class='input-fields'>
                              <input type='hidden' name='flag' value='login'></input>
                              <input type='text' name='username' placeholder='Username' class='input-line full-width'></input>
                              <input type='password' name='password' placeholder='Password' class='input-line full-width'></input>
                              </div>
                            <div><input type='submit' class='ghost-round full-width' onclick='signUPp()' value='Login'></button></div>
                        </form> 
                      </div>
                    </div>
                  </div>
              </div>
            <div class='nev'>
                <button id='burger' class='open-main-nav'>
                  <span class='burger'></span>
                  <span class='burger-text'>Menu</span>
                </button>
                <nav class='main-nav' id='main-nav'>
                  <ul>
                    <li>
                      <a href='index2.php'>Browse</a>
                    </li>
                    <li>
                      <a href='favi.php'>Favorites</a>
                    </li>
                    <li>
                      <a href='settings.php'>Account Settings</a>
                    </li>
                  </ul>
                </nav>
              </div>
            <div class='pagename'><h1>Browse Meals</h1></div>
        </section>
      </header>
      <section id='con'>";
      if($result != NULL)
        if ($result->num_rows > 0) {
          if($_SESSION["usr"] != NULL)
            for ($x = 0; $x <= 4; $x++) {
              $row = $result->fetch_assoc();
              echo "<div class='mealbox'><form action='recpie.php' method='GET'><img src=". $row["imagePath"]." alt=". $row["nameOfP"].">  <div class='text-block' (".$row["nameOfP"].")'><h4><input type='hidden' name='flag' value=".$row["nameOfP"]."></input><input type='submit' value=".$row["nameOfP"]."></button></h4></div></form></div> ";
            } 
          else
            while($row = $result->fetch_assoc()) {
              echo "<div class='mealbox'><form action='recpie.php' method='GET'><img src=". $row["imagePath"]." alt=". $row["nameOfP"].">  <div class='text-block' (".$row["nameOfP"].")'><h4><input type='hidden' name='flag' value=".$row["nameOfP"]."></input><input type='submit' value=".$row["nameOfP"]."></button></h4></div></form></div> ";
            }
          } else {     
                    echo "0 results";
                }
        else{
          echo '<section class="textArea">You need to configure your user preffances in order<br> to view meals that suit you, please visit <a href="settings.php">this link</a> to set up your user</section>';
        }  
          echo "</section>
        <script src='script/scritps.js'></script>

</body>
</html>";

$conn->close();
?>