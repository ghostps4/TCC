function validar() {
    var usuario     = cadastro.usuario.value;
    var email    = cadastro.email.value;
    var estado   = cadastro.estado.value;
    var Genero      = cadastro.Genero.value;
    var senha    = cadastro.senha.value;

    if (usuario == "") {
        alert('preencha o campo de usuario')
        cadastro.usuario.focus()
        return false  
    }
    if (email == "" ) {
        alert('preencha o campo de email corretamente')
        cadastro.email.focus()
        return false
    }
    if (email.indexOf(".") <0) {
        alert('preencha o campo de email corretamente1')
        cadastro.email.focus()
        return false
    }
    if (email.indexOf("@") <0) {
        alert('preencha o campo de email corretamente1')
        cadastro.email.focus()
        return false
    }
    if (estado == "") {
        alert('preencha o campo de estado')
        cadastro.estado.focus()
        return false
    }
    if (Genero == "") {
        alert('preencha o campo de Genero')
        cadastro.Genero.focus()
        return false
        
    }
    if (senha == "" || senha.length <5) {
        alert('preencha o campo da senha com pelo menos 6 caracteres')
        cadastro.senha.focus()
        return false 
    }
    
}