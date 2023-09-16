

addEventListener("submit",function(e){

    var marca = document.getElementById("Marca")
    var modelo = document.getElementById("Modelo")
    var ModeloNumber = document.getElementById("Modelo").value
    var dni = document.getElementById("DniDuenio")
    var dniValue = dni.value
    //asigno el valor del input
    var patente = document.getElementById("Patente").value
    //convierto el string a mayuscula y quito los espacios
    patenteModif = patente.toUpperCase().split(' ').join('')
    //variable para concatenar
    var patenteOk = ""
    var validPatente = /^[a-zA-Z]{3}[0-9]{3}$/
    //exprecion regular solo letras
    var soloLetras = new RegExp('^[A-Z]+$', 'i');
    var date = new Date();

    //verifico que el string sea de 6 caracteres
    if(!validPatente.test(patenteModif)){

        e.preventDefault()
        document.getElementById("Patente").style.border = "1px solid red"
        document.getElementById("patenteno").style.color = "red"
        document.getElementById("patenteno").textContent = "Ingrese una patente valida"

    }else{

        //parto el string en 2 partes para agregar el espacio 
        parte1patente = patenteModif.substring(0, 3)
        parte2patente = patenteModif.substring(3, 6)
        patenteOk = patenteOk+parte1patente+" "+parte2patente
        document.getElementById("Patente").value = patenteOk
        document.getElementById("Patente").style.border = "1px solid black"
        document.getElementById("patenteno").textContent = ""

    }

    //verificar que la marca sea solo letras
    if(!soloLetras.test(marca.value)){
        e.preventDefault()
        marca.style.border = "1px solid red"
        document.getElementById("marcano").textContent = "Ingrese solo letras"
        document.getElementById("marcano").style.color = "red"
    }else{
        marca.style.border = "1px solid black"
        document.getElementById("marcano").textContent = ""
    }

    //verifico que el modelo sea valido
    if((ModeloNumber.length > 4 || ModeloNumber.length < 4) || (parseInt(ModeloNumber) > date.getFullYear())){
        e.preventDefault()
        modelo.style.border = "1px solid red"
        document.getElementById("modelono").textContent = "Ingrese un modelo valido:xxxx"
        document.getElementById("modelono").style.color = "red"
    }else{
        modelo.style.border = "1px solid black"
        document.getElementById("modelono").textContent = ""
    }

    //verifico dni 

    if((parseInt(dniValue) > 99999999 || parseInt(dniValue) < 1000000 )){
        e.preventDefault()
        dni.style.border = "1px solid red"
        document.getElementById("dnino").textContent = "Ingrese un modelo valido: xx o xxxx"
        document.getElementById("dnino").style.color = "red"
    }else{
        dni.style.border = "1px solid black"
        document.getElementById("dnino").textContent = ""
    }
    
})

