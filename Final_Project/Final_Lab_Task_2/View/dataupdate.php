<?php
 include("../Controller/update.php");
?>
<?php

    $Id = $_GET["id"];
    

    $mydb = new db();
    $conobj=$mydb->Opencon();

    $result = $mydb->showupdate($conobj,'admin',$Id);
    while($data = mysqli_fetch_assoc($result))
    {
      $img = $data['img'];
      $username = $data['username'];
      $fastname = $data['fastname'];
      $lastname = $data['lastname'];
      $password = md5($data['password']);
      $number = $data['phone'];
      $mail = $data['mail'];
      $gender = $data["gender"];
    } 
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../Css/style.css">

    <title>DATA UPDATE</title>
  </head>
  <body>




  <div class="silder ">
  <div class="container-fluid">
    <div class="row">
        <div class="webname">
            <h1>ONLINE FOOD ORDARING SYSTEM</h1>
            <h4>We create future</h4>

        </div>
        <div class="headersec">
            <ul>
                <li><a href="http://localhost/Final_Project/Home.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Shop</a></li>
                
            </ul>
        </div>
        <div class="col-lg-120">

            <h2 class="rgform">DATA UPDATE</h2>
            <div class="regForm">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                    <table>
                        <tr>
                            
                            <td>User Name </td>
                            <td class="jj"><input type="text"  name="uname" value="<?php echo $username;  ?>"></td>
                        </tr>

                        <tr>

                        <td>Fast Name </td>
                        <td class="jj"><input type="text"  name="fname" value="<?php echo $fastname;  ?>"></td>
                        </tr>

                        <tr>

                        <td>Last Name</td>
                        <td class="jj"><input type="text"  name="lname" value="<?php echo $lastname;  ?>"></td>

                        </tr>
                        <tr>

                            <td>E-mail </td>
                            <td class="jj"><input type="email"  name="mail" value="<?php echo $mail;  ?>"></td>

                        </tr>
                        <tr>
                            <td>Phone </td>
                            <td class="jj"><input type="number"  name="number" value="<?php echo $number; ?>"></td>
                        </tr>
                        <tr>
                            <td>Password </td>
                            <td class="jj"><input type="text"  name="pass" value="<?php echo $password;  ?>"></td>
                        </tr>
                        
                        <input type="number"  name="id" value="<?php echo $Id; ?>" hidden>
                        
                        
                       
                        <tr>
                            <td>Your Photo</td>
                            <td>
                                <input class="fileup" type="file" name="upfile">
                                
                            </td>
                        </tr>
                        <tr>
                            <td>Gender </td>
                            <td class="jj">
                                <input type="radio" id="ml" name="gender" value="Male"
                                <?php
                                if($gender=="Male")
                                    {
                                        echo "checked";
                                    }
                                    ?>
                                >Male
                                <input type="radio" id="fl" name="gender" value="Female"
                                <?php
                                if($gender=="Female")
                                    {
                                        echo "checked";
                                    }
                                    ?>
                                >Female 
                                <input type="radio" id="ot" name="gender" value="Other"
                                <?php
                                if($gender=="Other")
                                    {
                                        echo "checked";
                                    }
                                    ?>
                                >Other 
                                
                            </td>
                        </tr>
                    </table>
                    <span class="subbtn"><input type="submit" class="btn-primary" name="supbtn" value="Update"></span>

                    <h5 class="kk">If you not update data<a href="Admindata.php?usersearch">Back</a></h5>

                </form>
            </div>
        </div>
       
    </div>
  </div>
  </div>

  </body>
</html>


