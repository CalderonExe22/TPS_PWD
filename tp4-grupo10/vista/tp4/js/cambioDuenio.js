

addEventListener("submit",function(e){

    //asigno el valor del input
    var patente = document.getElementById("Patente").value
    //convierto el string a mayuscula y quito los espacios
    patenteModif = patente.toUpperCase().split(' ').join('')
    //variable para concatenar
    var patenteOk = ""
    var validPatente = /^[a-zA-Z]{3}[0-9]{3}$/

    var dni = document.getElementById("DniDuenio")
    var dniValue = dni.value
    
    //verifico que el string sea de 6 caracteres
    if(!validPatente.test(patenteModif)){

        e.preventDefault()
        document.getElementById("Patente").style.border = "2px solid red"
        document.getElementById("patenteno").style.color = "red"
        document.getElementById("patenteno").textContent = "Ingrese una patente valida"

    }else{

        //parto el string en 2 partes para agregar el espacio 
        parte1patente = patenteModif.substring(0, 3)
        parte2patente = patenteModif.substring(3, 6)
        patenteOk = patenteOk+parte1patente+" "+parte2patente
        document.getElementById("Patente").value = patenteOk
        document.getElementById("patenteno").textContent = ""
        document.getElementById("Patente").style.border = "2px solid black"
    }

    if((parseInt(dniValue) > 99999999 || parseInt(dniValue) < 1000000 )){
        e.preventDefault()
        dni.style.border = "1px solid red"
        document.getElementById("dnino").textContent = "Ingrese un dni valido"
        document.getElementById("dnino").style.color = "red"
    }else{
        dni.style.border = "1px solid black"
        document.getElementById("dnino").textContent = ""
    }

})