
        </header>


        <section class="price container">

            <div class="container price__table form-container sign-in">
                <div class="price__element">
                    <h1 class="subtitle">Registrar Nuevo CLAP</h1>
                    <form action="?controller=clap&action=cargar_CLAP" method="post">
                        <input type="text" id="ID_CLAP" name="ID_CLAP" placeholder="ID CLAP">
                        <input type="text" id="nombre_CLAP" name="nombre_CLAP" placeholder="Nombre del CLAP">
                        <input type="text" id="cedula_CLAP" name="cedula_CLAP" placeholder="Cedula del Lider CLAP">
                        <input id="botonSiguiente2" type="button" value="Registrar" class="btn">
                    </form>
                </div>



            </div>
        </section>
    </div>
    <div id="1"></div>
    <script>
        const botonSiguiente2 = document.getElementById("botonSiguiente2");


        // Puedes cambiar esto a la URL que desees




        botonSiguiente2.addEventListener("click", function() {
            formularioUtils.enviarClap(document.getElementById("1"));

        });
    </script>


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