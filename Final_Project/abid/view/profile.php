<?php
session_start();

?>



<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/profile.css">
        <title>Online Food Order System</title>

    </head>
    <body>
        <div class="profilepage">
          <div class="container">
            <div class="row">
              <div class="webname">
                <h1>Online Food Order System</h1>
              </div>
              <?php
                echo "<h3>Welcome Back :".$_SESSION["name"]."</h3>";
                ?>
            <div class="link">
            <h5>Do you Want to<a href="../control/logout.php"> Logout</a></h5>
            <h5>Do you Want to<a href="delprofile.php"> DeleteProfile</a></h5>
            </div>
            <div>Search<input type="text" id="search"></div>

            <div id="feedback">
            <?php
            include("../control/profileControl.php");

            ?>
            </div>
            </div>
          </div>
        </div>

        <script type="text/javascript" src="../js/jquery.js"></script>
       <script type="text/javascript" src="../js/ajax.js"></script>
    </body>
</html>