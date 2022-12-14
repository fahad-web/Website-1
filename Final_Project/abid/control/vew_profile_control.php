<?php

include("../model/db.php");

$Id=$_GET["id"];
$mydb=new db();
$conobj=$mydb->openCon();
$result = $mydb->fetchUserByID($conobj,"user",$id=$_GET["id"]);

$male=$female=$other=" ";
$dhaka=$rajshahi=$barisal=$chittagong=$khulna=$mymensingh=$rangpur=" ";

  foreach($result as $row)
    {
      $name=$row["name"];
      $mail=$row["email"];
      $password=$row["password"];
      $confirm_password=$row["confirm_password"];
      $phone_number=$row["phone_number"];
      $address=$row["address"];
      $gender=$row["gender"];
      if($gender=="male")
      {
        $male="checked";
      }
      else if($gender=="female")
      {
        $female="checked";
      }
      else
      {
        $other="checked";
      }

      $nid_number=$row["nid_number"];    
      $date=$row["date_of_birth"];
      $city=$row["city"];
      if($city=="Dhaka")
      {
        $dhaka="checked";
      }
      else if($city=="Rajshahi")
      {
        $rajshahi="checked";
      }
      else if($city=="Barisal")
      {
        $barisal="checked";
      }
      else if($city=="Chittagong")
      {
        $chittagong="checked";
      }
      else if($city=="Khulna")
      {
        $khulna="checked"; 
      }
      else if($city=="Mymensingh")
      {
        $mymensingh="checked";
      }
      else 
      {
        $rangpur="checked";
      }
      
    }
  
    

?>
<?php
    if(isset($_POST["update"]))
    {
     //   $id=$_GET["id"];
        $Id=$_POST["id"];
        $mydb=new db();
        $conobj=$mydb->openCon();
        $result=$mydb->updateUser($conobj,"user",$_POST["name"],$_POST["email"],$_POST["password"],$_POST["confirm_password"],$_POST["phone_number"],$_POST["address"],$_POST["gender"],$_POST["nid_number"],$_POST["date_of_birth"],$_POST["city"],$Id);
    }
          
?>