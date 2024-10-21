<div class="container" id="container" style="display: flex;">

        <div class="form-container sign-in" id="sign-in-1">

            <h1>Recuperar Contraseña</h1>

            <span>¡Ingresa tu cedula!</span>
            <input id="Cedula" name="Cedula" type="number" placeholder="Cedula">
            <input id="continuar" type="button" value="Siguiente" class="btn">

        </div>
        <div id="preguntas" style="display: none; margin-top: 20px;" class="form-container sign-in">

            <h1>Recuperar contraseña</h1>

            <span>¡Responde las preguntas de seguridad!</span>
            <div id="sign-in-2">
                <!-- Aquí deberías agregar los campos para las respuestas de seguridad -->
            </div>

            <input id="pregunta" type="button" value="Siguiente" class="btn">

        </div>
        <div id="confirmarContraseña" style="display: none; margin-top: 20px;" class="form-container sign-in">

            <h1>Recuperar contraseña</h1>

            <span>¡Ingresa tu nueva contraseña!</span>
            <div id="Contraseña">
                <!-- Aquí deberías agregar los campos para las respuestas de seguridad -->
            </div>

            <input id="confirmar" type="button" value="Siguiente" class="btn">

        </div>

    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <h1>Recupera tu contraseña</h1>
                <p>Ingresa tus datos para recuperar tu contraseña</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cedulaButton = document.getElementById("continuar");
        const compararRespuestasButton = document.getElementById("pregunta");
        const verificarContraseñaButton = document.getElementById("confirmar");
        cedulaButton.addEventListener("click", () => formularioUtils.enviarCedula(document.getElementById("sign-in-2")));
        compararRespuestasButton.addEventListener("click", () => formularioUtils.compararRespuestas(document.getElementById("Contraseña")));
        verificarContraseñaButton.addEventListener("click", () => formularioUtils.verificarContraseña(document.getElementById("Contraseña")));
        const cajaError = document.getElementsByClassName("swal2-actions");


        const div1 = document.getElementById("sign-in-1");
        const div2 = document.getElementById("preguntas");

        cedulaButton.addEventListener("click", function() {
            // Oculta el primer div por defecto
            div1.style.display = "none";
            // Muestra el segundo div por defecto
            div2.style.display = "block";

            formularioUtils.enviarCedula(document.getElementById("sign-in-2"));

            // Esperar 0.5 segundos antes de verificar si hay un mensaje de error
            setTimeout(function() {
                const cajaError = document.getElementsByClassName("swal2-actions");
                if (cajaError.length > 0) {
                    // Se encontró un mensaje de error, revertir los cambios
                    div1.style.display = "block";
                    div2.style.display = "none";
                }
            }, 100); // 500 milisegundos (0.5 segundos)
        });



        const div3 = document.getElementById("confirmarContraseña");

        compararRespuestasButton.addEventListener("click", function() {
            // Oculta el primer div por defecto
            div2.style.display = "none";
            // Muestra el segundo div por defecto
            div3.style.display = "block";

            formularioUtils.enviarCedula(document.getElementById("sign-in-2"));

            // Esperar 0.5 segundos antes de verificar si hay un mensaje de error
            setTimeout(function() {
                const cajaError = document.getElementsByClassName("swal2-actions");
                if (cajaError.length > 0) {
                    // Se encontró un mensaje de error, revertir los cambios
                    div2.style.display = "block";
                    div3.style.display = "none";
                    // Redirigir a la página de recuperación de contraseña después de 1 segundo
                    setTimeout(function() {
                        window.location.href = "?controller=clap&action=recuperar_contraseña";
                    }, 3000);
                }
            }, 100); // 100 milisegundos (0.1 segundos) de espera antes de verificar el mensaje de error

        });




    });
</script>