
addEventListener("submit",function(e){

    var dni = document.getElementById("NroDni").value

    if(parseInt(dni) < 1000000 ||parseInt(dni) > 99999999 ){
        e.preventDefault()
        document.getElementById("NroDni").style.border = "1px solid red"
        document.getElementById("dnino").textContent = "Ingrese un dni valido"
        document.getElementById("dnino").style.color = "red"
    }else{
        document.getElementById("dnino").textContent = ""
        document.getElementById("NroDni").style.border = "1px solid black"
    }

})