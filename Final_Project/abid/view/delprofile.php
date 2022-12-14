<?php
session_start();
include("../control/del_profile_control.php");
?>

<html>
    <form action="" method="POST"> 
<body>
    <input type="text" name="delete_id" >
    <button type="submit" name="delete">Delete</button>
</body>
</form>
</html>
<?php
if(isset($_POST["delete"]))
{
    $mydb=new db();
    $conobj=$mydb->openCon();
    $result=$mydb->deleteUser($conobj,"user", $id=$_POST["delete_id"]);
    

    if($result==true)
    {
        echo "Deleted";
    }
    else
    {
        echo "Not Deleted";
    }
}


?>