
<form method="post" action="crear-cuenta.php" name="signup-form" >
    <div class="form-element">
        <label>Nombre Usuario</label>
        <input type="text" name="nombre_usuario" pattern="[a-zA-Z0-9]+" required />
        <input type="text" name="registro" value= "nuevo" hidden>
    </div>
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="registro" value="nuevo">Registrar</button>
</form>