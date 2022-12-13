<?php
 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="../Css/profile.css">
   

    <title>ONLINE FOOD ORDADING SYSTEM</title>
  </head>
  <body>
  <div class="webname">
            <h1>ONLINE FOOD ORDARING SYSTEM</h1>
            <h4>We create future</h4>

        </div>
        <div class="headersec">
            <ul>
                <li><a href="http://localhost/Sec_h/Final_Lab_Task_2/View/Sinup.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Shop</a></li>
                <span class="logg"><?php echo $_SESSION["username"]; ?></span>
                <span class="log"><i class="fa-solid fa-user"></i></span>
                
            </ul>
        </div>
        <h2 class="rgform">All Admin data are show</h2>
        <div class="serch">
            Search <input type="text" id="sr" class="sr" placeholder="search"><br><br>
            <div class="fedback" id="feedback">
              <?php
              include("search.php");
              ?>
            </div>
          </div>

  <script type="text/javascript" src="../Javascript/jquery.js"></script>
  <script type="text/javascript" src="../Javascript/ajax.js"></script>
  </body>
</html>