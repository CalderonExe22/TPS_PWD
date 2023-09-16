
addEventListener("submit",function(e){

    //asigno el valor del input
    var patente = document.getElementById("patente").value
    //convierto el string a mayuscula y quito los espacios
    patenteModif = patente.toUpperCase().split(' ').join('')
    //variable para concatenar
    var patenteOk = ""
    var validPatente = /^[a-zA-Z]{3}[0-9]{3}$/
    
    //verifico que el string sea de 6 caracteres
    if(!validPatente.test(patenteModif)){

        e.preventDefault()
        document.getElementById("patente").style.border = "1px solid red"
        document.getElementById("alert").style.color = "red"
        document.getElementById("alert").textContent = "Ingrese una patente valida"

    }else{

        //parto el string en 2 partes para agregar el espacio 
        parte1patente = patenteModif.substring(0, 3)
        parte2patente = patenteModif.substring(3, 6)
        patenteOk = patenteOk+parte1patente+" "+parte2patente
        document.getElementById("patente").value = patenteOk
        document.getElementById("alert").textContent = ""
        document.getElementById("patente").style.border = "1px solid black"
    }

    
})