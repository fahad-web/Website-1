<?php
 include("../Controller/update.php");
?>
<?php
    $tablename = 'admin';
    $mydb = new db();
    $conobj=$mydb->Opencon();

    $result = $mydb->ShowAll($conobj,$tablename);
    while($data = mysqli_fetch_assoc($result))
    {
      $img = $data['img'];
      $id=$data['ID'];
      $username = $data['username'];
      $fastname = $data['fastname'];
      $lastname = $data['lastname'];
      $password = $data['password'];
      $number = $data['phone'];
      $mail = $data['mail'];
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
                <li><a href="http://localhost/Sec_h/Final_Lab_Task_2/View/Sinup.php">Home</a></li>
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
                            <td class="jj"><input type="password"  name="pass" value="<?php echo $password;  ?>"></td>
                        </tr>
                        
                        
                       
                        <tr>
                            <td>Your Photo</td>
                            <td>
                                <input class="fileup" type="file" name="upfile">
                                
                            </td>
                        </tr>
                    </table>
                    <span class="subbtn"><input type="submit" class="btn-primary" name="supbtn" value="Update"></span>

                    <h5 class="kk">If you not update data<a href="Admindata.php">Back</a></h5>

                </form>
            </div>
        </div>
       
    </div>
  </div>
  </div>
    

  </body>
</html>


