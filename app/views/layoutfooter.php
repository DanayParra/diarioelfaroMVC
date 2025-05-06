<!-- 📞 Footer -->
<footer class="footer has-background-dark has-text-white-ter">
    <div class="content has-text-centered">
        <figure class="image is-128x128 is-inline-block">
            <img src="/public/img/logo-blanco.png" />
        </figure>
      <p><strong>Diario El Faro</strong> Moyano - Parra — Todos los derechos reservados © 2025</p>
      <p>Correo: contacto@diarioelfaro.cl | Redes: @diarioelfaro</p>
    </div>
  </footer>

  <!-- Script para el menú hamburguesa -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const burger = document.querySelector('.navbar-burger');
      const menu = document.querySelector('#navbarMenu');

      burger.addEventListener('click', () => {
        burger.classList.toggle('is-active');
        menu.classList.toggle('is-active');
      });
    });
  </script>