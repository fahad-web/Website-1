<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../Css/style.css">

    <title>Sin Up</title>
  </head>
  <body>
  <?php
    include("../Controller/Validation.php");
  ?>




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

            <h2 class="rgform">REGISTRETION FORM</h2>
            <div class="regForm">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" onsubmit="return checkForm()">
                    <table>
                        <tr>
                            <td>User Name </td>
                            <td class="jj"><input type="text" id="uname"  name="uname" ></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><p class="text-denger" id="usernameError"></p></td>
                        </tr>

                        <tr>

                        <td>Fast Name </td>
                        <td class="jj"><input type="text"  name="fname" id="fname" ></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><p class="text-denger" id="nameError"></p></td>
                        </tr>

                        <tr>

                        <td>Last Name</td>
                        <td class="jj"><input type="text" id="lastname" name="lname"></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td><p class="text-denger" id="lastnameError"></p></td>
                        </tr>
                        <tr>

                            <td>E-mail </td>
                            <td class="jj"><input type="email" id="email" name="mail"></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td><p class="text-denger" id="mailError"></p></td>
                        </tr>
                        <tr>
                            <td>Phone </td>
                            <td class="jj"><input type="number" id="number" name="number"<td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><p class="text-denger" id="numberError"></p></td>
                        </tr>
                        <tr>
                            <td>Password </td>
                            <td class="jj"><input type="password" id="password" name="pass"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><p class="text-denger" id="passError"></p></td>
                        </tr>
                        <tr>
                            <td>Re-Password </td>
                            <td class="jj"><input type="password" id="password1" name="pass1"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><p class="text-denger" id="passError2"></p></td>
                        </tr>
                       
                        <tr>
                            <td>Your Photo</td>
                            <td>
                                <input class="fileup" type="file" id="upfile" name="upfile">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><p class="text-denger" id="fileError"></p></td>
                        </tr>
                        <tr>
                            <td>Gender </td>
                            <td class="jj">
                                <input type="radio" id="ml" name="gender" value="Male">Male
                                <input type="radio" id="fl" name="gender" value="Female">Female 
                                <input type="radio" id="ot" name="gender" value="Other">Other 
                            </td>
                        </tr>
                    </table>
                    <span class="subbtn"><input type="submit" class="btn-primary" name="sbtn" value="Sin Up"></span>

                    <h5 class="kk">You have a account <a href="Login.php">Login</a></h5>

                </form>
            </div>
        </div>
       
    </div>
  </div>
  </div>
  

<script src="../Javascript/FormValidation.js"></script>
  

  </body>
</html>