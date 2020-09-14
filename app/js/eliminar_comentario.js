$(function() {
    console.log( "ready!" );
});

$( "#comentario_eliminar" ).submit(function( event ) {
    event.preventDefault();
    // Se pasan a TODAS las variables de los datos del formulario
    const data = $( this ).serialize();
    console.log(data);
    $.ajax({
        type:"POST", // la variable type guarda el tipo de la peticion GET,POST,..
        url:"../funciones/comentario_eliminar.php", //url guarda la ruta hacia donde se hace la peticion
        data: data, // data recibe un objeto con la informacion que se enviara al servidor
        success:function(datos){ //success es una funcion que se utiliza si el servidor retorna informacion
            window.location.replace(`../view/articulo.php?id=${$("#id_articulo").val()}`);
            
        },
         // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
    })

});
