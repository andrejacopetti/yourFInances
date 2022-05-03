function ValidateEmail(){
    email = document.getElementById("Email")
    password= document.getElementById("Password")
    okpassword = document.getElementById("OKPassword")
    phone = document.getElementById("Phone")

    var regexEmail = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/

    var regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{8,}$/

    if(console.log(regexEmail.test(email.value)) == true && console.log(regexPassword.test(password.value)) == true){
        
    }else{
        
    }
    
}