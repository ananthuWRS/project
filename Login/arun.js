function validate(){
    var username=document.forms["form2"]["name"].value;
   
    var password= document.forms["form2"]["pass"].value;

    if(username==null || username=="" )
    {
        document.getElementById('username1').innerHTML =" * please enter the username";
        return false;
    }
 
    else if(!isNaN(username)){
        document.getElementById('username1').innerHTML =" * only character are allowed";
        return false;
      }
      else if (password ==""){
        document.getElementById('password1').innerHTML =" *Please fill the password field";
        return false;
      }
      else if((password.length<=5) || (password.length >20)){
        document.getElementById('password1').innerHTML =" *Password length must be between 5 and 20 ";
        return false;
      }
}