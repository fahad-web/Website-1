function checkForm()
{
    var uname = document.getElementById("uname").value;
    var fastname = document.getElementById("fname").value;
    var lastname = document.getElementById("lastname").value;
    var mail = document.getElementById("email").value;
    var num = document.getElementById("number").value;
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("password1").value;
    var upload = document.getElementById("upfile").value;



    if(uname == "")
    {
        document.getElementById("usernameError").innerHTML="** Fill up field";
        return false;
    }
    if((uname.length<4) || (uname.length>12))
    {
        document.getElementById("usernameError").innerHTML="** Name Length 4 to 12.";
        return false;
    }
    if(fastname == "")
    {
        document.getElementById("nameError").innerHTML="** Fill up field";
        return false;
    }
    if(lastname == "")
    {
        document.getElementById("lastnameError").innerHTML="** Fill up field";
        return false;
    }
    if(mail == "")
    {
        document.getElementById("mailError").innerHTML="** Fill up field";
        return false;
    }
    if(num == "")
    {
        document.getElementById("numberError").innerHTML="** Fill up field";
        return false;
    }
    
    if(pass1 == "")
    {
        document.getElementById("passError").innerHTML="** Fill up field";
        return false;
    }
    if(pass1.length<8 )
    {
        document.getElementById("passError").innerHTML="** Password must be 8 digit";
        return false;
    }

    
    if(pass2 == "")
    {
        document.getElementById("passError2").innerHTML="** Fill up field";
        return false;
    }
    if(pass1!= pass2)
    {
        document.getElementById("passError2").innerHTML="** Password not Mach";
        return false;
    }


    if(upload == "")
    {
        document.getElementById("fileError").innerHTML="** Fill up field";
        return false;
    }
}