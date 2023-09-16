

addEventListener("submit",function(e){

    var nombre = document.getElementById("Nombre")
    var apellido = document.getElementById("Apellido")
    var dni = document.getElementById("NroDni")
    var dniValor = dni.value
    var fechaNac = document.getElementById("FechaNac")
    var telefono = document.getElementById("Telefono")
    
    var date = new Date()
    var soloLetras = new RegExp('^[A-Z]+$', 'i');

    if(dniValor < 1000000 || dniValor > 99999999){
        e.preventDefault()
        dni.style.border = "1px solid red"
        document.getElementById("dnino").style.color = "red"
        document.getElementById("dnino").textContent = "Ingrese un dni valido"
    }else{
        document.getElementById("dnino").textContent = ""
        dni.style.border = "1px solid black"
    }

    if(!soloLetras.test(nombre.value)){
        e.preventDefault()
        nombre.style.border = "1px solid red"
        document.getElementById("nombreno").style.color = "red"
        document.getElementById("nombreno").textContent = "Ingrese solo letras"
    }else{
        document.getElementById("nombreno").textContent = ""
        nombre.style.border = "1px solid black"

    }

    if(!soloLetras.test(apellido.value)){
        e.preventDefault()
        apellido.style.border = "1px solid red"
        document.getElementById("apellidono").style.color = "red"
        document.getElementById("apellidono").textContent = "Ingrese solo letras"
    }else{
        document.getElementById("apellidono").textContent = ""
        nombre.style.border = "1px solid black"

    }

    if(parseInt(fechaNac.value) > date.getFullYear()- 18 ){
        e.preventDefault()
        fechaNac.style.border = "1px solid red"
        document.getElementById("fechano").style.color = "red"
        document.getElementById("fechano").textContent = "Fecha no valida (solo mayores de edad)"
    }else{
        document.getElementById("fechano").textContent = ""
        fechaNac.style.border = "1px solid black"
    }

    if((telefono.value).length < 10 || (telefono.value).length > 10 ){
        e.preventDefault()
        telefono.style.border = "1px solid red"
        document.getElementById("telefonono").style.color = "red"
        document.getElementById("telefonono").textContent = "Ingrese un telefono valido"
    }else{
        telefono.style.border = "1px solid black"
        document.getElementById("telefonono").textContent = ""
    }

})

