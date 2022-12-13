<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="../Css/login.css">
   


    <title>Log in </title>
  </head>
  <body>

  <?php include("../Controller/LoginV.php"); ?>


    <div class="loginpage">
      <div class="container">
        <div class="row">
          <div class="webname">
              <h1>ONLINE FOOD ORDARING SYSTEM</h1>
              <h4>We create future</h4>
          </div>
          <div class="headersec sticky-start">
              <ul>
                  <li><a href="http://localhost/Sec_h/Final_Lab_Task_2/View/Sinup.php">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Shop</a></li>
              </ul>
          </div>

            <h2 class="rgform">LOGIN FORM</h2>
          
          <div class="col-lg-120">
              <?php
              if(isset($error))
              {
                echo "<h4 class='rr'>".$error."</h4>";
              }
              ?>
              <?php
                  if(isset($_GET["created"]))
                  {
                    echo "<h2 class='rr' align='center'>User Created succesfully</h2>";
                  }
              ?>
                  <div class="fpage">
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <table align="center">
                      
                      <h4 align='center' class="mb-4">Login</h4>
                      
                      <tr>
                        <td>E-mail </td>
                        <td class="jj"><input type="email" class="form-control" name="lmail" require></td>
                      </tr>
                      <tr>
                        <td>Password </td>
                        <td class="jj"><input type="password" class="form-control" name="lpass" require></td>
                      </tr>
                      
                    </table>
                    <span class="logbtn"><input type="submit" class="btn-primary" name="lsbtn" value="Log in"></span>


                    <h5 class="ss">Don't have an account <a href="Sinup.php"> Sin Up</a></h5>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  

  </body>
</html>