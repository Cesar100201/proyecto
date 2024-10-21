<section class="hero__container container">
    <h1 class="hero__title">Bienvenidos.</h1>
    <a href="?controller=clap&action=registro_familia" class="cta">Registrar Nucleo Familiar</a>
</section>
</header>

<main>



    <section class="price container" id="price-container">
        <h2 class="subtitle">Registra un nuevo integrante de Sistema clap</h2>

        <div  class="price__table">
            <div id="Rfamilia" class="price__element">
                <p class="price__name">nucleo familiar</p>
                <h3 class="price__price">Familia</h3>

                <div class="price__items">
                    <p class="price__features">Registra</p>
                    <p class="price__features">un nuevo</p>
                    <p class="price__features">Nucleo familiar</p>
                </div>

                <a href="?controller=clap&action=registro_familia" class="price__cta">Registrar</a>
            </div>


            <div id="Rcalle" class="price__element price__element--best">
                <p class="price__name">Estructura Clap</p>
                <h3 class="price__price">Calle</h3>

                <div  class="price__items">
                    <p class="price__features">Registra</p>
                    <p class="price__features">una nueva</p>
                    <p class="price__features">Calle</p>
                </div>

                <a href="?controller=clap&action=registro_calle" class="price__cta">Registrar</a>
            </div>


            <div id="Rcomunidad" class="price__element">
                <p class="price__name">Estructura Clap</p>
                <h3 class="price__price">Comunidad</h3>

                <div  class="price__items">
                    <p class="price__features">Registra</p>
                    <p class="price__features">una nueva</p>
                    <p class="price__features">Comunidad</p>
                </div>

                <a href="?controller=clap&action=registro_comunidad" class="price__cta">Registrar</a>
            </div>
            <div id="Rclap" class="price__element">
                <p class="price__name">Registrar nuevo </p>
                <h3 class="price__price">CLAP</h3>

                <div class="price__items">
                    <p class="price__features">Registra</p>
                    <p class="price__features">un nuevo</p>
                    <p class="price__features">CLAP</p>
                </div>

                <a href="?controller=clap&action=registro_clap" class="price__cta">Registrar</a>
            </div>


        </div>
    </section>


</main>

<footer class="footer">
    <section class="footer__container container">
        <nav class="nav nav--footer">
            <h2 class="footer__title">CLAP</h2>

            <ul class="nav__link nav__link--footer">
                <li class="nav__items">
                    <a href="#" class="nav__links">Registos</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Consultas</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Salir</a>
                </li>

            </ul>
        </nav>


    </section>

    <section class="footer__copy container">


        <h3 class="footer__copyright">copyright &copy; 2023</h3>
    </section>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Selecciona el enlace de "Registros"
        var link = document.querySelector("a[href='#price-container']");

        // Maneja el evento de clic en el enlace
        link.addEventListener("click", function(event) {
            event.preventDefault(); // Evita la navegación predeterminada

            // Obtiene la posición de la sección "price container"
            var targetSection = document.querySelector("#price-container");
            var targetPosition = targetSection.offsetTop;

            // Realiza el desplazamiento suave
            window.scrollTo({
                top: targetPosition,
                behavior: "smooth"
            });
        });
    });
</script>