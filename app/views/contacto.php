<?php include 'layout.php'; ?>

  <!-- formulario -->
  <section class="section">
  <div class="container">
    <h1 class="title">Formulario de Contacto</h1>
    <form action="../controller/contactocontrol.php" method="POST">
      <div class="field">
        <label class="label">Nombre</label>
        <div class="control">
          <input class="input" type="text" name="nombre" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Correo</label>
        <div class="control">
          <input class="input" type="email" name="correo" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Mensaje</label>
        <div class="control">
          <textarea class="textarea" name="mensaje" required></textarea>
        </div>
      </div>

      <div class="control">
        <button class="button is-link" type="submit">Enviar</button>
      </div>
    </form>
  </div>
</section>
<?php include 'layoutfooter.php'; ?>
