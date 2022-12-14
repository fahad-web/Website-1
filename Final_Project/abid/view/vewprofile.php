<?php
session_start();
include("../control/vew_profile_control.php")

?>

<html>
    <head>
        <meta charset="utf-8">
        <mrta name="viewpoint" content="width=device-width,initial-scale=1">
            <link rel="stylesheet" href="../css/mystyle.css">
            <title></title>
</head>
<body>
    <div class="silder">
        <div class="container-fluid">
            <div class="row">
                <div class=webname>
                    <h2> Manager Update Information</h2>
                </div>
        <div class="universal">
        <h2 class="p-info"><i>Update Profile Information </i></h2>
        <div class="regform">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <table>

        <tr>
        <td>Name </td>
        <td class="nm"><input type="text" placeholder="Name please" name="name" value="<?php echo $name;?>" ></td>
        </tr>

        <tr>
        <td>Email</td>
        <td class="nm"><input type="email" placeholder="Email" name="email" value="<?php echo $mail;?>"></td>
        </tr>
        
        <tr>
        <td>Password</td>
        <td class="nm"><input type="password" placeholder="Password" name="password" value="<?php echo $password;?>"></td>
        </tr>

        <tr>
        <td>Confirm Password</td>
        <td class="nm"><input type="password" placeholder="Password" name="confirm_password" value="<?php echo $confirm_password;?>"></td>
        </tr>
        <input type="number" name="id" value="<?php echo $Id;?>"hidden>
        <tr>
        <td>Phone Number</td>
        <td class="nm"><input type="tel" id="phone" placeholder="Phone Number"  name="phone_number" value="<?php echo $phone_number;?>"></td>
        </tr>

        <tr>
        <td>Address</td>
        <td class="nm"><input type="text" name= "address" cols="20" rows="5" placeholder="Address" name="address" value="<?php echo $address;?>"></textarea></td>
        </tr>

        <tr>
        <td>Gender</td>
        <td class="nm"><input type="radio" name="gender" value="male"<?php echo $male;?>>Male
        <input type="radio" name="gender" value="female"<?php echo $female;?>>Female
        <input type="radio" name="gender" value="other" <?php echo $other;?>>Other </td>
        </tr>

        <tr>    
        <td>NID Number</td>
        <td class="nm"><input type ="number" name="nid_number" placeholder="Number"maxlength="10" value="<?php echo $nid_number;?>"></td>
        </tr>

        <tr>
        <td>Date Of Birth</td>
        <td><input type ="date" name="date_of_birth" value="<?php echo $date;?>"></td>
        </tr>
        
        <tr>
        <td>City</td>
        <td class="nm"><select name="city" id="">
        <option value="Dhaka" <?php echo $dhaka;?>>Dhaka</option>
        <option value="Rajshahi"<?php echo $rajshahi;?>>Rajshahi</option>
        <option value="Barisal"<?php echo $barisal;?>>Barisal</option>
        <option value="Chittagong"<?php echo $chittagong;?>>Chittagong</option>
        <option value="Khulna"<?php echo $khulna;?>>Khulna</option>
        <option value="Mymensingh"<?php echo $mymensingh;?>>Mymensingh</option>
        <option value="Rangpur"<?php echo $rangpur;?>>Rangpur</option>
        
        </td>
        </tr>

 
</table>
<span class="update"><input type = "submit" class="btn-update" name="update"></span>
</form>



</body>

</html>
