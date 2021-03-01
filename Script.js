var Username = document.getElementById('Username') 
var password = document.getElementById('password')
var form = document.getElementById('form')
var error = document.getElementById('error')

Username.addEventListener('textInput', Username_Verify);
password.addEventListener('textInput', password_Verify);

function validated(){
    if(Username.Value.length <9) {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    if(password.Value.length <6) {
        password.style.border = "1px solid red";
        password_error.style.display = "block";
        password.focus();
        return false;
    }
}