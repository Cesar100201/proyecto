
        </header>


        <section class="price container">

            <div class="container price__table  sign-in">
                <div class="price__element">
                    <h1 class="subtitle">Registrar Nueva Comunidad</h1>
                    <form action="?controller=clap&action=cargar_CLAP" method="post">
                        <div id="1"></div>
                        <input type="text" id="nombre_Comunidad" name="nombre_Comunidad" placeholder="Nombre de la Comunidad">
                        <input type="text" id="cedula_Comunidad" name="cedula_Comunidad" placeholder="Cedula del Lider Comunidad">
                        <input type="number" id="cant_parques" name="cant_parques" placeholder="Cantidad de parques">
                        <input type="number" id="cant_canchas" name="cant_canchas" placeholder="Cantidad de canchas">
                        <input type="number" id="cant_modulos" name="cant_modulos" placeholder="Cantidad de modulos">
                        <input id="Rcomunidad" type="button" value="Registrar">
                        <button>Registrar</button>
                    </form>
                </div>



            </div>
        </section>

        <script>



            $(document).ready(function() {
                // Manejar clic en el botón
                $("#Rcomunidad").click(function() {
                    // Obtener los datos necesarios desde tu formulario o de donde sea necesario
                    var nombre_Comunidad = $("#nombre_Comunidad").val();
                    var cedula_Comunidad = $("#cedula_Comunidad").val();
                    var cant_parques = $("#cant_parques").val();
                    var cant_canchas = $("#cant_canchas").val();
                    var cant_modulos = $("#cant_modulos").val();

                    // Realizar la solicitud AJAX
                    $.ajax({
                        type: "POST",
                        url: "?controller=clap&action=cargar_comunidad", // Reemplaza con la ruta correcta
                        data: {
                            nombre_Comunidad: nombre_Comunidad,
                            cedula_Comunidad: cedula_Comunidad,
                            cant_parques: cant_parques,
                            cant_canchas: cant_canchas,
                            cant_modulos: cant_modulos
                        },
                        success: function(response) {
                            // Manejar la respuesta del servidor
                            if (response === "Exito") {
                                alert("Comunidad cargada exitosamente");
                            } else {
                                console.log(response)
                            }
                        },
                        error: function(error) {
                            console.error("Error en la solicitud AJAX:", error);
                        }
                    });
                });
            });
        </script>
    </div>




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