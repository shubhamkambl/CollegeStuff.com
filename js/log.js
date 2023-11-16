function userform(){
    
   if($("#FN").val()=='' || $("#LN").val()==''){alert ("Kindly enter your first name and last name");}
    else{
        if($("#e1").val()==''){alert ("Enter the email id");}
        else{
            if($("#un").val()==''){alert("Enter an unique username");}
            else{
                if($("#p1").val()==''){alert("Enter the password");}
                else{
                    if($("#p1").val()!=$("#p2").val()){alert ("password does not match")}
                    else{
                        alert("Log In successfully");
                    }
                }
            }
        }
    }
}
