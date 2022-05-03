function ValidateEmail(){

    var dados = $("form-login").serialize()

    $.ajax({

        type: "POST",
        data: dados,
        url: "../php/Email-Confirm.php",
    
        
    })
    
}