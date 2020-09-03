$(function() {
    console.log( "ready!" );
});

$( "#comentario" ).submit(function( event ) {
    event.preventDefault();
    // Se pasan a TODAS las variables de los datos del formulario
    const data = $( this ).serialize();
    console.log(data);
    $.ajax({
        type:"POST", // la variable type guarda el tipo de la peticion GET,POST,..
        url:"../funciones/comentario.php", //url guarda la ruta hacia donde se hace la peticion
        data: data, // data recibe un objeto con la informacion que se enviara al servidor
        success:function(datos){ //success es una funcion que se utiliza si el servidor retorna informacion
            console.log(datos);
            var response = JSON.parse(datos); 
            if(response.code == '400'){
                 alert(response.respuesta);
            }
            alert(response.respuesta);
            history.go(0);
            
        },
         // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
    })

});
