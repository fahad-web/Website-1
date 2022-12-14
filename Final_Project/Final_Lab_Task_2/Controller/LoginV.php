<?php
session_start();
include("../Model/mysql.php");

if(!empty($_SESSION["username"]))
{
  header("location:Profile.php");
}
    $message =" ";
    $error =" ";

    
    if(isset($_POST["lsbtn"]))
    {
      $email = $_POST["lmail"];
      $password = md5($_POST["lpass"]);
			
      $lgdb= new db();
      $fahad = $lgdb->Opencon();

      $result = $lgdb->CheckUser($fahad,'admin',$email,$password);

      
      if($result-> num_rows > 0)
      {
        $_SESSION["username"]=$email;
        $_SESSION["password"]=$password;
        setcookie('username', 'true', time()+3600, '/');
        header("location:Profile.php");
		  } 
        
      else
      {
        $error = "<h2 align='center' class='redc'>Incorrect password and mail</h2>";
      }
          
    }
    
?>