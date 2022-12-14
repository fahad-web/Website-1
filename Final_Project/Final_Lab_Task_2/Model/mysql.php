<?php
class db
{
    function Opencon()
    {
        $conn = new mysqli("localhost","root","","sec_h");
        return $conn;
    }

    function CheckUser($conn,$tablename,$email,$password)
    {
        $result = $conn->query("SELECT * FROM  $tablename WHERE mail= '$email' AND password='$password'");
        return $result;
    }

    function ShowAll($conn, $tablename)
    {
        $result = $conn->query("SELECT * FROM $tablename");
        return $result;
    }
    function showupdate($conn, $tablename,$Id)
    {
        $result = $conn->query("SELECT * FROM $tablename WHERE ID ='$Id' ");
        return $result;
    }
    function Deletedata($conn, $tablename,$getId)
    {
        $result = $conn->query("DELETE FROM $tablename WHERE $tablename.`ID` = $getId");
        return $result;
    }

    function update($conn,$tablename,$username,$fastname,$lastname,$email,$phone,$password,$folder,$gender,$Id)
    {
        $sql = "UPDATE $tablename SET username='$username', fastname='$fastname',lastname='$lastname',phone='$phone',password='$password', mail='$email', img='$folder',gender='$gender' WHERE ID = '$Id' ";

        if ($conn->query($sql) == TRUE) 
        {
            header("location:Admindata.php?usersearch");
            
        } 
        else{
            echo $sql;
        }
    }

    function Search($conn, $tablename,$p)
    {
        $result= $conn->query("SELECT * FROM $tablename WHERE lastname LIKE '%$p%'");
        return $result;
    }


    function insertUser($conn,$tablename,$username,$fastname,$lastname,$email,$phone,$password,$gender,$myfile)
    {
        $sql= "INSERT INTO $tablename (username,fastname,lastname,mail,phone,password,gender,img) VALUES ('$username','$fastname','$lastname','$email','$phone','$password','$gender','$myfile')";
        if($conn -> query($sql) === TRUE)
        {
            header("location:Login.php? created");
        }
        
    }
    function Closecon()
    {
        $conn->close();
    }
}

?>