$(function() {
    console.log( "ready!" );
});

$( "#articulo" ).submit(function( event ) {
    event.preventDefault();
    // Se pasan a TODAS las variables de los datos del formulario
    const data = $( this ).serialize();
    $.ajax({
        type:"POST", // la variable type guarda el tipo de la peticion GET,POST,..
        url:"../modelos/modelo-articulos.php", //url guarda la ruta hacia donde se hace la peticion
        data: data, // data recibe un objeto con la informacion que se enviara al servidor
        success:function(datos){ //success es una funcion que se utiliza si el servidor retorna informacion
            var response = JSON.parse(datos); 
            if(response.code == '400'){
                 alert(response.respuesta);
            }
            window.location.replace("../view/index.php");
        },
         // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
    })

});
