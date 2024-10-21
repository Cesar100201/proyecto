<div class="container" id="container" style="display: flex;">
    <form action="?controller=clap&action=insertar_usu" method="post">
        <div class="form-container sign-up" id="reg-1">

            <h1>Registrate</h1>

            <span>Ingresa tus datos para registrarte</span><br>
            <div id="1"></div>
            <input id="siguiente-1" type="button" value="Siguiente" class="btn">

        </div>
        <div class="form-container sign-up" style="visibility: hidden;" id="reg-2">

            <h1>Registrate</h1>

            <span>Ingresa tus datos para registrarte</span><br>
            <input id="cedula" type="number" placeholder="Cedula" name="cedula_usuario">
            <input id="NombreCompleto" type="text" placeholder="Nombre" name="Nombre_usuario">
            <label for="">Tipo de usuario</label>
            <select name="tipo_usuario" id="tipoUsuario">
                <option value="">Seleccionar</option>
                <option value="1">Lider de Calle</option>
                <option value="2">Lider de Comunidad</option>
            </select>
            <input id="siguiente-2" type="button" value="Siguiente" class="btn">

        </div>
        <div class="form-container sign-up" style="display: none;" id="reg-3">

            <h1>Registrate</h1>

            <span>Ingresa tus datos para registrarte</span><br>
            <input id="contraseña" type="password" placeholder="Contraseña" name="contrasena1_usuario"><br>
            <input id="confirmarContraseña" type="password" placeholder="Confirmar Contraseña" name="contrasena2_usuario">
            <input id="siguiente-3" type="button" value="Siguiente" class="btn">

        </div>

    </form>
    <form action="?controller=clap&action=validar_usu" method="post">
        <div id="sign-in" class="form-container sign-in">

            <h1>Inicia Sesion</h1>

            <span>¡Ingresa tu usuario y contraseña!</span>
            <input name="Usuario" type="number" placeholder="Cedula">
            <input name="Contraseña" type="password" placeholder="Contraseña">
            <a href="?controller=clap&action=recuperar_contraseña">Olvido su contraseña?</a>
            <button>Inicia Sesion</button>

        </div>
    </form>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Bienvenido de regreso!</h1>
                <p>Ingresa tus datos personales para ingresar!</p>
                <button class="hidden" id="login">Iniciar Sesion</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Hola compañero!</h1>
                <p>Registra tus datos personales para ingresar!</p>
                <button class="hidden" id="register">Registrate</button>
            </div>
        </div>
    </div>
    <div id="1" style="display: none;"></div>
</div>

<script>
    $(document).ready(function() {
        // Realizar la solicitud AJAX al cargar la página
        actualizarSelect();

        // Función para realizar la solicitud AJAX
        function actualizarSelect() {
            $.ajax({
                type: 'POST',
                url: '?controller=clap&action=obtenerCLAPs', // Reemplaza 'tu_archivo.php' con la ruta a tu archivo PHP
                success: function(response) {
                    // Actualizar el contenido del div con el nuevo select
                    $('#1').html(response);
                },
                error: function(error) {
                    console.error('Error en la solicitud AJAX:', error);
                }
            });
        }

        // Puedes llamar a la función actualizarSelect() en respuesta a algún evento, por ejemplo, un clic en un botón.
        // $('#miBoton').click(function() {
        //     actualizarSelect();
        // });
    });
    const botonSiguiente1 = document.getElementById("siguiente-1");
    const botonSiguiente2 = document.getElementById("siguiente-2");
    const botonSiguiente3 = document.getElementById("siguiente-3");

    if (botonSiguiente2) {
        
        botonSiguiente2.addEventListener("click", function() {
            cod_clap = document.getElementById("cod_clap").value;
            console.log(cod_clap)
            // Llamada a la función VerificarCedula
            formularioUtils.VerificarCedula(document.getElementById("1"));

            // Esperar 0.5 segundos antes de verificar si hay un mensaje de error
            setTimeout(function() {
                const cajaError = document.getElementsByClassName("swal2-actions");

                // Verificar si se encontró un mensaje de error
                if (cajaError.length > 0) {
                    // Se encontró un mensaje de error, mostrar div2 y ocultar div3
                    const div3 = document.getElementById("reg-3");
                    const div2 = document.getElementById("reg-2");

                    if (div3 && div2) {
                        div3.style.display = "none";
                        div2.style.display = "block";
                    }
                } else {
                    // No se encontró un mensaje de error, mostrar div3 y ocultar div2 con animación
                    const div3 = document.getElementById("reg-3");
                    const div2 = document.getElementById("reg-2");

                    if (div3 && div2) {
                        // Aplica la animación a div2
                        div2.style.animation = "blur-in 0.5s linear both";

                        // Oculta div2 y muestra div3 después de la duración de la animación
                        setTimeout(() => {
                            div2.style.animation = ""; // Limpia la animación
                            div2.style.display = "none";
                            div3.style.display = "block";
                        }, 500); // Espera 500ms (duración de la animación) antes de mostrar reg3
                    }
                }
            }, 100); // 500 milisegundos (0.5 segundos)
        });
    }
    botonSiguiente3.addEventListener("click", function() {
        console.log(cod_clap)
        const cedula = document.getElementById("cedula").value;
        const nom_usu = document.getElementById("NombreCompleto").value;
        const tipo_usu = document.getElementById("tipoUsuario").value;
        const contrasena = document.getElementById("contraseña").value;
        const confirmarcontraseña = document.getElementById("confirmarContraseña").value;
        const datos = "cod_clap=" + encodeURIComponent(cod_clap) +
                      "&ced_usu=" + encodeURIComponent(cedula) +
                      "&nom_usu=" + encodeURIComponent(nom_usu) +
                      "&tipo_usu=" + encodeURIComponent(tipo_usu) +
                      "&contraseña=" + encodeURIComponent(contrasena) +
                      "&confirmarcontraseña=" + encodeURIComponent(confirmarcontraseña);
        console.log(cod_clap);   
        formularioUtils.registrarUsuario(document.getElementById("1"), datos);
    });

    
</script>