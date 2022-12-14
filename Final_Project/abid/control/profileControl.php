<?php
include("../model/db.php");


$mydb =new db();
$conobj=$mydb->openCon();
$result= $mydb->showAll($conobj,"user");
$rows = mysqli_num_rows($result);
//$link="../view/vewporfile.php";
if($rows>0)
   {
    echo"<table>";
    echo"<tr><td> Id </td><td> Name </td><td> Email </td><td> Phone Number </td><td> Address </td><td> Gender </td><td> National Id Card </td><td> Date of Birth </td><td> City </td> ";
    foreach($result as $row)
    {
      $id = $row["id"];
      echo"<tr>";
      echo "<td>".$row["id"]."</td>";
      echo "<td>".$row["name"]."</td>";
      echo "<td>".$row["email"]."</td>";
      echo "<td>".$row["phone_number"]."</td>";
      echo "<td>".$row["address"]."</td>";
      echo "<td>".$row["gender"]."</td>";
      echo "<td>".$row["nid_number"]."</td>";    
      echo "<td>".$row["date_of_birth"]."</td>";
      echo "<td>".$row["city"]."</td>";
      //echo "<td> <button>Update</button>".$link."</td>";
      echo"<td><button><a href='vewprofile.php?id=$id'>Update</a></button></td>";
      echo"</tr>";
    }
     echo"</table>";
   }

?>
