<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Diario El Faro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<!-- 🔔 Aviso superior -->
<section class="notification is-link has-text-centered mb-0 has-background-warning has-text-danger has-text-weight-bold">
    ⚠️ Última hora: Se esperan lluvias intensas esta semana en la región.
  </section>

  <!-- 🧭 Navbar -->
  <nav class="navbar is-light" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <figure class="image is-128x128">
            <img src="/public/img/logo.png" />
          </figure>
      <a class="navbar-item" href="/app/views/index.php">
        <strong>Diario El Faro</strong>
      </a>
      
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarMenu" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/app/views/noticias.php">Noticias</a>
        <a class="navbar-item" href="/app/views/deportes.php">Deportes</a>
        <a class="navbar-item" href="/app/views/negocios.php">Negocios</a>
        <a class="navbar-item" href="/app/views/contacto.php">Contacto</a>
        <a class="navbar-item" href="/app/views/registro.php">Registro</a>
      </div>
    </div>
  </nav>

</body>
</html>