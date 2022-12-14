<?php
include("../control/login_validate.php");
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width,initial-scale=1">
    
    <link rel="stylesheet" href="../css/login.css">
    <title>Manager Log in </title>
  </head>
  <body>

  <div class="silder">
  <div class="container-fluid">
    <div class="row">
      <div calss="webname">
        <h2>Manager Log In Form</h2>
      </div>

      <div class="universal">
      <h3 class="l-info"><i>Log In Information</i></h3>
      <div class="logform">
    
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      
      <table>
        
      <tr>
        <td>Name </td>
        <td class="nm"><input type="text" name="name"><?php echo $name; ?></td>

      </tr>
      
      <tr>
        <td>E-mail </td>
        <td class="nm"><input type="email" name="email"><?php echo $email; ?></td>

      </tr>
      <tr>
        <td>Password </td>
        <td class="nm"><input type="password" name="password"><?php echo $password ?></td>
      </tr>
      </table>
      
        <span class="log-btn"><input type="submit" class="btn-primary" name="submit" value="Log in"></span>
      
        <h4 class="man-regi">Don't have an account <a href="managerregi.php"> Register</a></h5>

  </form>
</div>
</div>
</div>
</div>
</div>
  </body>
</html>