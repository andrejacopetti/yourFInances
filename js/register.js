import ldadosregister from "./dadosregister.js";

    const email = document.getElementById("EmailCad")
    const password = document.getElementById("PasswordCad")
    const okpassword = document.getElementById("OKPassword")
    const phone = document.getElementById("PhoneCad")

    function validate() {
        ldadosregister();
    
        var dados = $("form-login").serialize()
    
        
        var regexEmail = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/
    
        var regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{8,}$/
        // deve conter ao menos um dígito
        // deve conter ao menos uma letra minúscula
        // deve conter ao menos uma letra maiúscula
        // deve conter ao menos um caractere especial
        //deve conter ao menos 8 dos caracteres mencionados
        var regexPhone = /^\(?(?:[14689][1-9]|2[12478]|3[1234578]|5[1345]|7[134579])\)? ?(?:[2-8]|9[1-9])[0-9]{3}\-?[0-9]{4}$/
    
    
    
        var confirmregexEmail = console.log(regexEmail.test(email.value))
        var confirmregexSenha = console.log(regexPassword.test(password.value))
        var confirmregexPhone = console.log(regexPhone.test(phone.value))
    
        var confirmSenha = false
    
        if(password == okpassword){
            confirmSenha == true
        }else{
            confirmSenha == false
        }
    
    
        if(confirmregexEmail == true && confirmregexSenha == true && confirmregexPhone == true &&
        confirmSenha == true){
            $.ajax({
    
                type: "POST",
                data: dados,
                url: "../php/Two-Factores.php",
        
        
            })
        }else{
            alert("Erro! Algum dados invalido!")
        }
    }

    const buttonValidate = document.querySelector(".button-registro")

buttonValidate.onclick = validate()

