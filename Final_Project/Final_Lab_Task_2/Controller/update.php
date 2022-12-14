<?php
include("../Model/mysql.php");
if(isset($_POST["supbtn"]))
{
    $myfile = $_FILES["upfile"]["name"];
    $temfile = $_FILES["upfile"]["tmp_name"];
    $folder = '../img/'.$myfile;

    if(empty($temfile))
    {
        $uploadfileErr = "Please upload JPG or PNG";
    }
    else
    {
        move_uploaded_file($temfile, $folder);
    }
        $Id = $_POST["id"];

        echo $Id;
        $username = $_POST["uname"];
        $fastname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $email = $_POST["mail"];
        $phone = $_POST["number"];
        $password = md5($_POST["pass"]);
        $gender = $_POST["gender"];
    $mydb = new db();
    $conobj=$mydb->Opencon();

    $result=$mydb->update($conobj,'admin',$username,$fastname,$lastname,$email,$phone,$password,$folder,$gender,$Id);
}


?>