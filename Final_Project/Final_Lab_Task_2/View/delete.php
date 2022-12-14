<?php
include("../Model/mysql.php");

$getId=$_REQUEST['id'];


$mydb = new db();
$conobj=$mydb->Opencon();

$result=$mydb->Deletedata($conobj,'admin',$getId);
if($result== TRUE)
{
    header("location:Admindata.php?usersearch");
}
?>