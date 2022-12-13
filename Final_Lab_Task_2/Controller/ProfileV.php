<?php
include("../Model/mysql.php");

?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="../Css/profile_page.css">
    
  </head>
  <body>
    <?php

    if(isset($_POST["pbtn"]))
    {
      header("location:../View/Admindata.php"); 
    }
    if(isset($_POST["edbtn"]))
    {
      header("location:../View/dataupdate.php"); 
    }
    ?>
    

  </body>
</html>