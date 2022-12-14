<?php
include("../control/manager_regi_validate.php")
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="../css/mystyle.css">
        <title>Registration</title>
    </head>
    <body>
    <div class="silder">
    <div class="container-fluid">
        <div class="row">
        <div class="webname">
            <h2>Manager Registration Form</h2>
        </div>
    
    <div class="universal">
        <h3 class="p-info"><i>Personal Information</i></h3>
    <div class="regform">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return checkForm()">
    <table>

    <tr>
        <td>Name </td>
        <td class="nm"><input type="text" placeholder="Name please" name="name" id="name"><span><?php echo $name;?></span> </td>
    </tr>
    <tr>
        <td></td>
        <td><p class="text-danger" id="nameerr"></p></td>
    </tr>

    <tr>
        <td>Email</td>
        <td class="nm"><input type="email" placeholder="Email" name="email" id="email" ><span><?php echo $mail;?></span> </td>
    </tr>
    <tr>
        <td></td>
        <td><p class="text-danger" id="emailerr"></p></td>
    </tr>


    <tr>
        <td>Password</td>
        <td class="nm"><input type="password" placeholder="Password" name="password" id="password"><span><?php echo $password;?></span></td>
    </tr>
    <tr>
        <td></td>
        <td><p class="text-danger" id="passworderr"></p></td>
    </tr>

    <tr>
        <td>Confirm Password</td>
        <td class="nm"><input type="password" placeholder="Password" name="confirm_password" id="confirm_password"><span><?php echo $confirm_password;?></span></td>
    </tr>
    <tr>
        <td></td>
        <td><p class="text-danger" id="confirm_passworderr"></p></td>
    </tr>

    <tr>
        <td>Phone Number</td>
        <td class="nm"><input type="tel" id="phone" placeholder="Phone Number"  name="phone_number" id="phone_number"><span><?php echo $phone_number;?></span></td>
    </tr>
    <tr>
        <td></td>
        <td><p class="text-danger" id="phone_numbererr"></p></td>
    </tr>
    <tr>
        <td>Address</td>
        <td class="nm"><textarea name= "address" cols="20" rows="5" placeholder="Address" name="address" id="address"></textarea><span><?php echo $address;?></span></td>
    </tr>
    <tr>
        <td></td>
        <td><p class="text-danger" id="addresserr"></p></td>
    </tr>

    <tr>
        <td>Gender</td>
        <td class="nm"><input type="radio" id="male"name="gender" value="male">Male
        <input type="radio" id="female"name="gender" value="female">Female
        <input type="radio" id="other"name="gender" value="other">Other <span><?php echo $gender;?></span></td>
    </tr>
    
    <tr>    
        <td>NID Number</td>
        <td class="nm"><input type ="number" name="nid_number" placeholder="Number"maxlength="10" id="nid_number"><span><?php echo $nid_number;?></span></td>
    </tr>
    <tr>
        <td></td>
        <td><p class="text-danger" id="nid_numbererr"></p></td>
    </tr>
    
    <tr>
    <td>Date Of Birth</td>
    <td><input type ="date" name="date_of_birth" id="date_of_birth"><span><?php echo $date;?></span></td>
    </tr>
    <tr>
        <td></td>
        <td><p class="text-danger"id="date_of_birtherr"></p></td>
    </tr>

    <tr>
    <td>City</td>
    <td class="nm"><select name="city" id="city">
        <option value="Dhaka">Dhaka</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Barisal">Barisal</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Khulna">Khulna</option>
        <option value="Mymensingh">Mymensingh</option>
        <option value="Rangpur">Rangpur</option>
        <span><?php echo $city;?></span>
    </td>
    </tr>
    <tr>
        <td></td>
        <td><p class="text-danger"id="cityerr"></p></td>
    </tr>
</table>
    <tr>
    <td></td>
    
    <span class="submitbtn"><input type = "submit" class="btn-primary" name="submit" id="submit"value="Confirm Registration"></span>
    
    

    <h4 class="log">Already Have an Account?<a href ="login.php">  Login</a></h4>


</form>
</div>
</div>
</div>
</div>
</div>
<script src="../js/myscript.js"></script>
</body>

</html>
