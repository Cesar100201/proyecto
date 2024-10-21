<div class="container" id="container" style="display: flex;">
    <div id="pregun-1" class="form-container sign-in" style="margin-top: 0px;">

        <h1>Preguntas de seguridad</h1>

        <span>Selecciona las PReguntas que Usaras para Recuperar tu Cuenta</span>
        <select id="pregunta1" name="pregunta1">
            <option value="">Pregunta de seguridad 1</option>
            <option value="01">¿Cuando es tu cumpleaños?</option>
            <option value="02">¿Como se llamaba tu mama?</option>
            <option value="03">¿Como se llamaba tu papa?</option>
            <option value="04">¿A qué escuela fuiste?</option>
            <option value="05">¿Cual es la fecha de nacimiento de tu padre?</option>
            <option value="06">¿Cual es la fecha de nacimiento de tu madre?</option>
            <option value="07">¿En que mes naciste?</option>
            <option value="08">¿Como se llamo tu primera mascota?</option>
        </select>
        <input type="text" placeholder="Respuesta 1" id="Respuesta1" name="respuesta1">
        <select id="pregunta2" name="pregunta2">
            <option value="">Pregunta de seguridad 2</option>
            <option value="01">¿Cuando es tu cumpleaños?</option>
            <option value="02">¿Como se llamaba tu mama?</option>
            <option value="03">¿Como se llamaba tu papa?</option>
            <option value="04">¿A qué escuela fuiste?</option>
            <option value="05">¿Cual es la fecha de nacimiento de tu padre?</option>
            <option value="06">¿Cual es la fecha de nacimiento de tu madre?</option>
            <option value="07">¿En que mes naciste?</option>
            <option value="08">¿Como se llamo tu primera mascota?</option>
        </select>
        <input type="text" placeholder="Respuesta 2" id="Respuesta2" name="respuesta2">


        <input id="Bot-Pre-1" type="button" value="Siguiente" class="btn">

    </div>

    <div id="pregun-2" class="form-container sign-in register" style="display: none;">

        <h1>Preguntas de seguridad</h1>

        <span>Selecciona las Preguntas que Usaras para Recuperar tu Cuenta</span>
        <select id="pregunta3" name="pregunta3">
            <option value="">Pregunta de seguridad 3</option>
            <option value="01">¿Cuando es tu cumpleaños?</option>
            <option value="02">¿Como se llamaba tu mama?</option>
            <option value="03">¿Como se llamaba tu papa?</option>
            <option value="04">¿A qué escuela fuiste?</option>
            <option value="05">¿Cual es la fecha de nacimiento de tu padre?</option>
            <option value="06">¿Cual es la fecha de nacimiento de tu madre?</option>
            <option value="07">¿En que mes naciste?</option>
            <option value="08">¿Como se llamo tu primera mascota?</option>
        </select>
        <input type="text" placeholder="Respuesta 3" id="Respuesta3" name="respuesta3">
        <select id="pregunta4" name="pregunta4">
            <option value="">Pregunta de seguridad 4</option>
            <option value="01">¿Cuando es tu cumpleaños?</option>
            <option value="02">¿Como se llamaba tu mama?</option>
            <option value="03">¿Como se llamaba tu papa?</option>
            <option value="04">¿A qué escuela fuiste?</option>
            <option value="05">¿Cual es la fecha de nacimiento de tu padre?</option>
            <option value="06">¿Cual es la fecha de nacimiento de tu madre?</option>
            <option value="07">¿En que mes naciste?</option>
            <option value="08">¿Como se llamo tu primera mascota?</option>
        </select>
        <input type="text" placeholder="Respuesta 4" id="Respuesta4" name="respuesta4">
        <input id="Bot-Pre-2" type="button" value="Registrar" class="btn">

    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <h1>Selecciona las preguntas de seguridad</h1>
                <p>Ingresa tus datos personales para ingresar!</p>
            </div>
        </div>
    </div>
</div>
<div>
    <script>
        const pregunta1 = document.getElementById("pregun-1");
        const pregunta2 = document.getElementById("pregun-2");
        const siguienteBoton4 = document.getElementById("Bot-Pre-1");



        siguienteBoton4.addEventListener("click", function() {
            pregunta1.style.animation = "blur-in 0.5s linear both"; // Aplica la animación
            pregunta1.style.display = "none";

            setTimeout(() => {
                pregunta1.style.animation = ""; // Limpia la animación
                pregunta2.style.display = "";
            }, 500); // Espera 500ms (duración de la animación) antes de mostrar reg1
        });
        document.addEventListener("DOMContentLoaded", function() {
            const miBoton = document.getElementById("Bot-Pre-2");

            miBoton.addEventListener("click", function() {
                const camposPreguntas = {
                    pregunta1: "pregunta1",
                    pregunta2: "pregunta2",
                    pregunta3: "pregunta3",
                    pregunta4: "pregunta4",
                    respuesta1: "Respuesta1",
                    respuesta2: "Respuesta2",
                    respuesta3: "Respuesta3",
                    respuesta4: "Respuesta4",
                };

                const url = "?controller=clap&action=insertar_pre&timestamp=" + new Date().getTime();
                const valores = formularioUtils.obtenerValores(camposPreguntas);

                formularioUtils.RegistrarUsuario(url, valores);
            });
        });
    </script>
</div>