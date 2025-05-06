<?php include 'layout.php'; ?>

<section class="section">
  <div class="container">
    <h1 class="title">Registro de Cuenta</h1>
    <form action="../controller/usuariocontrol.php" method="POST">
      <div class="field">
        <label class="label">Nombre de Usuario</label>
        <div class="control">
          <input class="input" type="text" name="usuario" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Correo Electrónico</label>
        <div class="control">
          <input class="input" type="email" name="correo" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Contraseña</label>
        <div class="control">
          <input class="input" type="password" name="clave" required>
        </div>
      </div>

      <div class="control">
        <button class="button is-primary" type="submit">Registrarse</button>
      </div>
    </form>
  </div>
</section>
<?php include 'layoutfooter.php'; ?>