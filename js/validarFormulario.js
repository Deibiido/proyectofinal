var campos = document.getElementsByClassName("control")

for(var i = 0;i<campos.length;i++){
    campos[i].onblur = function(){
        console.log("Has salido de un campo");
        validarFormulario()
    }
}
function validarFormulario(){
    console.log("En el nombre pone: ")
    console.log(document.getElementById("nombre").value)
    console.log("La longitd del campo es: ")
    console.log(document.getElementById("nombre").value.length)

    
    console.log("En el nombre pone: ")
    console.log(document.getElementById("asunto").value)
    console.log("La longitd del campo es: ")
    console.log(document.getElementById("asunto").value.length)

    console.log("En el nombre pone: ")
    console.log(document.getElementById("email").value)
    console.log("La longitd del campo es: ")
    console.log(document.getElementById("email").value.length)

    console.log("En el nombre pone: ")
    console.log(document.getElementById("mensaje").value)
    console.log("La longitd del campo es: ")
    console.log(document.getElementById("mensaje").value.length)
    if(
        document.getElementById("nombre").value.length > 5
        &&
        document.getElementById("asunto").value.length > 5
        &&
        document.getElementById("email").value.length > 5
        &&
        document.getElementById("mensaje").value.length > 5
    ){
        console.log("Te voy a dejar enviar el mensaje")
        document.getElementById("botonEnviar").removeAttribute("disabled")
    }else{
        console.log("Aun no")
        document.getElementById("botonEnviar").setAttribute("disabled","true")

    }
    
    
}
