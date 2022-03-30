function validate(){
    email = document.getElementById("Email")
    password= document.getElementById("Password")
    okpassword = document.getElementById("OKPassword")
    phone = document.getElementById("Phone")

    var regexEmail = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/

    var regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{8,}$/

    var regexPhone = /^\(?(?:[14689][1-9]|2[12478]|3[1234578]|5[1345]|7[134579])\)? ?(?:[2-8]|9[1-9])[0-9]{3}\-?[0-9]{4}$/



    console.log(regexEmail.test(email))
    console.log(regexPassword.test(password))
    console.log(regexPhone.test(phone))

    if(okpassword != password){
        return (false)
    }else{
        return (true)
    }

    // deve conter ao menos um dígito
    // deve conter ao menos uma letra minúscula
    // deve conter ao menos uma letra maiúscula
    // deve conter ao menos um caractere especial
    //deve conter ao menos 8 dos caracteres mencionados
    
    

}