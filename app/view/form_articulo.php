<section class="seccion contenedor">
  <h2>Crea tu articulo</h2>
  <form id="articulo" class="registro" action="inc/modelos/modelo-articulos.php" method="post">
    <div id="datos_usuario" class="registro caja clearfix">
      <div class="campo">
        <label for="titulo">titulo:</label>
        <input type="textarea" id="titulo" name="titulo" placeholder="Ingresa tu titulo">
      </div>
      <div class="campo">
        <label for="descripcion">Descripción:</label>
        <input type="textarea" id="descripcion" name="descripcion" placeholder="Descripción">
      </div>
      <div class="campo enviar">
        <input type="hidden" id="accion" name ="accion" value="crear">
        <button id="cargar" type="submit" class="btn btn-primary" value="Añadir">Añadir</button>
      </div>
    </div>
    <!--#datos_usuario-->
  </form>
</section>