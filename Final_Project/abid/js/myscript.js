
function checkNameEmpty()
{
    if(document.getElementById("name").value=="")
    {
        document.getElementById("nameerr").innerHTML="Please Enter Your Name";
        return true;
    }
}
function checkNameLength()
{
    var name =document.getElementById("name").value;
    if(name.length<4)
    {
        document.getElementById("nameerr").innerHTML="Please Enter Full Name";
        return true;
    }
}
function checkEmail()
{
    if(document.getElementById("email").value=="")
    {
        document.getElementById("emailerr").innerHTML="Please Enter Your Email";
        return true;
    }

}
function checkValidEmail()
{
    var validemail = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3}+$/)";
    if(inputText.getElementById("email").value.match(validemail))
    {
        document.getElementById("emailerr").innerHTML="Please @ and .com to Your Email";
        return true;
    }

}

function checkPassword()
{
    if(document.getElementById("password").value=="")
    {
        document.getElementById("emailerr").innerHTML="Please Enter Your Password";
        return true;
    }

}
function checkPasswordLength()
{
    var password = document.getElementById("password").value;
    if(password.length<8)
    {
        document.getElementById("passworderr").innerHTML="Please Enter 8 Bit Password";
        return true;
    }

}
function checkConfirmPassword()
{
    var confirmPassword=document.getElementById("confirm_password").value;
    
    var passwordLength = document.getElementById("password").value.length;
    if(confirmPassword.length==passwordLength)
    {
        return true;
    }
    else
    {
        document.getElementById("confirm_passworderr").innerHTML="Please Match With Password";
        return true;        
    }
}
function checkPhoneNumber()
{
    var phonenumber=document.getElementById("phone_number").value;
    if(document.getElementById("phone_number").value=="")
    {
        document.getElementById("phone_numbererr").innerHTML="Please Enter Your Number";
        return true;
    }
    else if(phonenumber.length<11)
    {
        document.getElementById("phone_numbererr").innerHTML="Please Enter your Correct Phone Number ";
        return true;
    }

}
function checkAddress()
{
    if(document.getElementById("address").value=="")
    {
        document.getElementById("addresserr").innerHTML="Plesase Enter Your Address";
        return true;
    }
}
function checkGender()
{
    //document.getElementById("submit").addEventListener("click",checkGender())
    var m=document.getElementById("male").value;
    var f=document.getElementById("femaile").value;
    var o=document.getElementById("other").value;
    if(!m.checked && !f.checked && !o.checked)
    {
        alert("Please Select one");
    }
    
}
function checkNIDNumber()
{
    var nidnumber=document.getElementById("nid_number").value;
    if(document.getElementById("nid_number").value=="")
    {
        document.getElementById("nid_numbererr").innerHTML="Please Enter Your Number";
        return true;
    }
    else if(nidnumber.length<11)
    {
        document.getElementById("nid_numbererr").innerHTML="Please Enter your Correct NID Number ";
        return true;
    }

}
function checkDateOfBirth()
{
    if(document.getElementById("date_of_birth").value=="")
    {
        document.getElementById("date_of_birtherr").innerHTML="Plesase Enter Your Date Of Birth";
        return true;
    }
}








function checkForm()
{
   if(checkNameEmpty()==true|| checkNameLength()==true||checkEmail()==true||checkValidEmail()==true||checkPassword()==true||checkPasswordLength()==true||checkConfirmPassword()==true||checkPhoneNumber()==true||checkAddress()==true||checkGender()==true||checkNIDNumber()==true||checkDateOfBirth()==true||checkCity()==true)
   {
    
    return false;
   }
}
