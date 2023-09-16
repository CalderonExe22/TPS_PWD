
var limpiar = document.getElementById("limpiar")

limpiar.addEventListener("click",function(){

    document.getElementById("Apellido").value = ""
    document.getElementById("Nombre").value = ""
    document.getElementById("fechaNac").value = ""
    document.getElementById("Telefono").value = ""
    document.getElementById("Domicilio").value = ""

    document.getElementById("apellidono").textContent = ""
    document.getElementById("nombreno").textContent = ""
    document.getElementById("fechano").textContent = ""
    document.getElementById("telefonono").textContent = ""
    document.getElementById("domiciliono").textContent = ""

    document.getElementById("Apellido").style.border = "1px solid white"
    document.getElementById("Nombre").style.border = "1px solid white"
    document.getElementById("fechaNac").style.border = "1px solid white"
    document.getElementById("Telefono").style.border = "1px solid white"
    document.getElementById("Domicilio").style.border = "1px solid white"

})


addEventListener("submit",function(e){

    var nombre = document.getElementById("Nombre")
    var apellido = document.getElementById("Apellido")
    var fechaNac = document.getElementById("fechaNac")
    var telefono = document.getElementById("Telefono")
    var date = new Date()
    var soloLetras = new RegExp('^[A-Z]+$', 'i');

    //validar que el nombre sea solo letras
    if(!soloLetras.test(nombre.value)){
        e.preventDefault()
        nombre.style.border = "1px solid red"
        document.getElementById("nombreno").style.color = "red"
        document.getElementById("nombreno").textContent = "Ingrese solo letras"
    }else{
        document.getElementById("nombreno").textContent = ""
        nombre.style.border = "1px solid white"

    }

    //validar que el apellido sea solo letras
    if(!soloLetras.test(apellido.value)){
        e.preventDefault()
        apellido.style.border = "1px solid red"
        document.getElementById("apellidono").style.color = "red"
        document.getElementById("apellidono").textContent = "Ingrese solo letras"
    }else{
        document.getElementById("apellidono").textContent = ""
        nombre.style.border = "1px solid white"

    }

    //validar que la fecha sea correcta
    if(parseInt(fechaNac.value) > date.getFullYear()- 18 ){
        e.preventDefault()
        fechaNac.style.border = "1px solid red"
        document.getElementById("fechano").style.color = "red"
        document.getElementById("fechano").textContent = "Fecha no valida"
    }else{
        document.getElementById("fechano").textContent = ""
        fechaNac.style.border = "1px solid white"
    }


    //validar un telefono 
    if((telefono.value).length < 10 || (telefono.value).length > 10){
        e.preventDefault()
        telefono.style.border = "1px solid red"
        document.getElementById("telefonono").style.color = "red"
        document.getElementById("telefonono").textContent = "Ingrese un telefono valido"
    }else{
        telefono.style.border = "1px solid white"
        document.getElementById("telefonono").textContent = ""
    }

})