<?php
include("../Model/mysql.php");

    $p = $_GET["usersearch"];
    
    $mydb = new db();
    $conobj = $mydb->Opencon();
    $result= $mydb->Search($conobj,'admin',$p);

    if($result-> num_rows > 0)
    {
        echo "<table class='cn' border=1><tr>";
        echo "<tr><td>ID</td><td>UserName</td><td>FastName</td><td>LastName</td><td>Number</td><td>Password</td><td>Mail</td><td>Photo</td></tr>";
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
        echo "<td ><img src='../img/$img' class='img'></td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "data not found!";
    }
?>
