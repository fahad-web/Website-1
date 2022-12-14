<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../Css/profile.css">
    <title>ONLINE FOOD ORDADING SYSTEM</title>
  </head>
  <body>
  <?php
include("../Model/mysql.php");

    $p = $_REQUEST["usersearch"];
    
    $mydb = new db();
    $conobj = $mydb->Opencon();
    $result= $mydb->Search($conobj,'admin',$p);

    if($result-> num_rows > 0)
    {
        echo "<table class='cn' border=1><tr>";
        echo "<tr class='cov'><th>ID</th><th>UserName</th><th>FastName</th><th>LastName</th><th>Number</th><th>Password</th><th>Mail</th><th>Photo</th><th>Update</th><th>Remove</th></tr>";
        while($data = mysqli_fetch_assoc($result))
        {
        $img = $data['img'];
        $id=$data['ID'];
        $username = $data['username'];
        $fastname = $data['fastname'];
        $lastname = $data['lastname'];
        $mail = $data['mail'];
        $password = $data['password'];
        $number = $data['phone'];

        echo "<td>".$id."</td>";
        echo "<td>".$username."</td>";
        echo "<td>".$fastname."</td>";
    
        echo "<td>".$lastname."</td>";
        echo "<td>".$number."</td>";
        echo "<td>".$password."</td>";
        echo "<td>".$mail."</td>";
        echo "<td ><img src='../img/$img' class='img'></td>";
        echo "<td><a class='yy' href='dataupdate.php?id=$id'>Update</a></td>";
        echo "<td><a class='yy' href='delete.php?id=$id'>Delete</a></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "<h5>data not found!</h5>";
    }
?>


    
  </body>
</html>