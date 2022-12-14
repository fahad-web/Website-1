<?php
session_start();
?>
<?php
include("../Controller/ProfileV.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <link rel="stylesheet" href="../Css/profile.css">
    <title>Online food ordaring system</title>
  </head>
  <body>
  <div class="profilepage">
    <div class="container">
      <div class="row">
        <div class="webname">
            <h1>ONLINE FOOD ORDARING SYSTEM</h1>
            <h4>We create future</h4>

        </div>
        <div class="headersec">
            <ul>
                <li><a href="http://localhost/Final_Project/Home.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Shop</a></li>
                <span class="logg"><?php echo $_SESSION["username"]; ?></span>
                <span class="log"><i class="fa-solid fa-user"></i></span>
            </ul>
        </div>


        <div class="propage">
          <div class="col-lg-12">
            <p>If you logout <a href="Logout.php"> Logout</a></p>

            

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="submit" id="logout" value="Show admin Data" name="pbtn">
                
                
              </form>
              
          </div>
        </div>
      </div>
    </div>
  </div>


  <script type="text/javascript" src="../Javascript/jquery.js"></script>
  <script type="text/javascript" src="../Javascript/ajax.js"></script>
  </body>
</html>