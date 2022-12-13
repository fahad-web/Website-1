<?php
include("../Model/mysql.php");
$error = "";

$getId = $_REQUEST["id"];
    
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
    $mydb = new db();
    $conobj=$mydb->Opencon();

    $result=$mydb->update($conobj,'admin',$username,$fastname,$lastname,$number,$password,$email,$folder,$getId);
    
}

?>