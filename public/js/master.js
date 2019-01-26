window.onload=function(){
    
    // ---------------- VALIDACION REGISTER.BLADE.PHP ------------------ //


    var formulario = document.querySelector("#formulario")

    formulario.elements.name.focus()

    formulario.onsubmit=function(evento){
        if(!validaciones()){
            evento.preventDefault()
        }else {
            formulario.submit()
        }
    }


    function validaciones() {

        var name = formulario.elements.name
        var email = formulario.elements.email
        var password = formulario.elements.password
        var password_confirmation = formulario.elements.password_confirmation

        if(!validarName(name.value)) return false
        if(!validarEmail(email.value)) return false
        if(!validarPassword(password.value)) return false
        if(!validarPassword_confirmation(password_confirmation.value)) return false
                
        return true
    }




    function validarName(name){
        var re_name = /^[a-zA-ZáÁéÉíÍóÓúÚñÑüÜ\s]+$/
        var error = document.getElementById("errorName")
        if (!re_name.test(name)){
            error.innerHTML="Nombre y Apellido Inválido"
            error.setAttribute("class","alert alert-danger")
            return false
        }else{
            error.innerHTML=" "
            error.removeAttribute("class","alert alert-danger")
            formulario.elements.email.focus()
            return true
        }
    }


    function validarEmail(email){
        var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/
        var error = document.getElementById("errorEmail")
        if (!re.test(email)){
            error.innerHTML="Email Inválido"
            error.setAttribute("class","alert alert-danger")
            return false
        }else{
            error.innerHTML=" "
            error.removeAttribute("class","alert alert-danger")
            formulario.elements.password.focus()
            return true
        }
    }


    function validarPassword(password){
       var re_pwd = /^(?=[^A-Z]*[A-Z])(?=[^a-z]*[a-z])(?=[^0-9]*[0-9]).{4,12}$/
       error = document.getElementById("errorPassword")
       if (!re_pwd.test(password)){
        error.innerHTML="Contraseña Inválida"
        error.setAttribute("class","alert alert-danger")
        return false
       }else{
        error.innerHTML=" "
        error.removeAttribute("class","alert alert-danger")
        formulario.elements.password_confirmation.focus()
        return true
        }
    }


    function validarPassword_confirmation(password_confirmation){
        var re_pwd2 = /^(?=[^A-Z]*[A-Z])(?=[^a-z]*[a-z])(?=[^0-9]*[0-9]).{4,12}$/
        error = document.getElementById("errorPassword_confirmation")
        if (!re_pwd2.test(password_confirmation)){
         error.innerHTML="Contraseña Inválida"
         error.setAttribute("class","alert alert-danger")
         return false
        }else{
         error.innerHTML=" "
         error.removeAttribute("class","alert alert-danger")
         return true
         }
     }



    // ---------------- VALIDACION REGISTER.BLADE.PHP ------------------ //

    
    var formularioLogin = document.querySelector("#formularioLogin")

    formularioLogin.elements.email.focus()

    formularioLogin.onsubmit=function(evento){
        if(!validaciones2()){
            evento.preventDefault()
        }else {
            formularioLogin.submit()
        }
    }



    function validaciones2() {

        var email = formularioLogin.elements.email
        var password = formularioLogin.elements.password

        if(!validarEmail2(email.value)) return false
        if(!validarPassword2(password.value)) return false
                
        return true
    }



    function validarEmail2(email){
        var re2 = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/
        var error = document.getElementById("errorEmailLogin")
        if (!re2.test(email)){
            error.innerHTML="Email Inválido"
            error.getAttribute("class","alert alert-danger")
            return false
        }else{
            error.innerHTML=" "
            error.removeAttribute("class","alert alert-danger")
            formularioLogin.elements.password.focus()
            return true
        }
    }


    function validarPassword2(password){
       var re_pwd2 = /^(?=[^A-Z]*[A-Z])(?=[^a-z]*[a-z])(?=[^0-9]*[0-9]).{4,12}$/
       error = document.getElementById("errorPasswordLogin")
       if (!re_pwd2.test(password)){
        error.innerHTML="Contraseña Inválida"
        error.getAttribute("class","alert alert-danger")
        return false
       }else{
        error.innerHTML=" "
        error.removeAttribute("class","alert alert-danger")
        return true
        }
    }

    //  ----------------- UPDATE ITEM CART ---------------------- //

    $(document).ready(function () {    
        
        $('.btn-update-item').on('click', function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            var href = $(this).data('href');
            var cantidad = $('#product_' + id).val();

            window.location.href = href + '/' + cantidad;
        });
    });
}
