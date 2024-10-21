

        </header>


        <section class="price container">
            <div class="integrante" data-count="1">
                <div class="container price__table  sign-in">
                    <div class="price__element">
                        <h1 class="subtitle">Registrar Nuevo Miembro</h1>
                        <form action="?controller=clap&action=persona" method="post">



                            <div id="div1">
                                <input type="text" id="Cedula_person" name="Cedula_person" placeholder="Cedula">
                                <input type="text" id="Nombre_person" name="Nombre_person" placeholder="Nombre y Apellido">
                                <label for="">Nacionalidad</label>
                                <select name="Naci_person" id="Naci_person">
                                    <option value="V">Venezolano</option>
                                    <option value="E">Extranjero</option>
                                </select>
                                <input type="date" name="Fnaci_person" id="Fnaci_person" placeholder="Fecha de Nacimiento">
                                <div class="control-radio">
                                    <label style="color: black;">Sexo</label>
                                    <div class="layout-full">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="sexoM" name="sexo" value="Masculino" class="form-check-input">
                                            <label style="color: black;" for="sexoM" class="form-check-label">Masculino</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="sexoF" name="sexo" value="Femenino" class="form-check-input">
                                            <label style="color: black;" for="sexoF" class="form-check-label">Femenino</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="Email" name="Correo_person" id="Correo_person" placeholder="Correo electronico">
                                <label for="">Tipo de familiar</label>
                                <select name="Tipo_person" id="Tipo_person">
                                    <option value="">Seleccionar</option>
                                    <option value="Jefe de Familia">Jefe de Familia</option>
                                    <option value="Conyugue">Conyugue</option>
                                    <option value="Concubinato">Concubinato</option>
                                    <option value="Hijo">Hijo</option>
                                    <option value="Primos">Primos</option>
                                    <option value="Tios">Tios</option>
                                    <option value="Abuelos">Abuelos</option>
                                    <option value="Sobrino">Sobrino</option>
                                    <option value="Nieto">Nieto</option>
                                    <option value="Otro">Otro</option>
                                </select>
                                <label for="">Estado Civil</label>
                                <select name="Ecivil_person" id="Ecivil_person">
                                    <option value="">Seleccionar</option>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Viudo">Viudo</option>
                                    <option value="Divorciado">Divorciado</option>
                                </select>
                                <input type="button" id="btn1" class="btn" value="Siguiente">
                            </div>



                            <div id="div2" style="display: none;">
                                <input type="text" name="Cvota_person" id="Cvota_person" placeholder="Centro de Votacion">
                                <input type="text" name="Cod_patria" id="Cod_patria" placeholder="codigo patria">
                                <input type="text" name="Ser_patria" id="Ser_patria" placeholder="serial patria">
                                <div class="control-radio">
                                    <label style="color: black;">¿Recibe bonos patria?</label>
                                    <div class="layout-full">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="Rec_bono_si" name="Rec_bono" value="Si" class="form-check-input">
                                            <label style="color: black;" for="Rec_bono_si" class="form-check-label">si</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="Rec_bono_no" name="Rec_bono" value="No" class="form-check-input">
                                            <label style="color: black;" for="Rec_bono_no" class="form-check-label">no</label>
                                        </div>
                                    </div>

                                </div>

                                <label for="">Nivel de Estudios</label>
                                <select name="Nestudi_person" id="Nestudi_person">
                                    <option value="">Seleccionar</option>
                                    <option value="Sin Estudios">Sin Estudios</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Bachiller">Bachiller</option>
                                    <option value="Tecnico Medio">Tecnico Medio</option>
                                    <option value="TSU">TSU</option>
                                    <option value="Superior">Superior</option>
                                    <option value="Especializacion">Especializacion</option>
                                </select>
                                <input type="text" id="prof_person" name="prof_person" placeholder="Profesion">
                                <input type="button" id="btn2" class="btn" value="Siguiente">
                            </div>


                            <div id="div3" style="display: none;">
                                <div class="control-radio">
                                    <label style="color: black;">¿Posee alguna Enfermedad?</label>
                                    <div class="layout-full">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="Enf_person_si" name="Enf_persona" value="Si" class="form-check-input">
                                            <label style="color: black;" for="Enf_person_si" class="form-check-label">si</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="Enf_person_no" name="Enf_persona" value="No" class="form-check-input">
                                            <label style="color: black;" for="Enf_person_no" class="form-check-label">no</label>
                                        </div>
                                    </div>
                                    <input type="text" id="Enf_person" name="Enf_person" placeholder="Especifique Cual">
                                </div>
                                <input type="text" id="Peso_person" name="Peso_person" placeholder="Peso">
                                <input type="text" id="Talla_person" name="Talla_person" placeholder="Talla">
                                <input type="text" id="CBI_person" name="CBI_person" placeholder="Circunferencia del brazo izquierdo">
                                <input type="button" id="btn3" class="btn" value="Agregar Nuevo Integrante">
                                <input type="button" id="reg" class="btn" value="Registrar">
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        const btn1 = document.getElementById("btn1");
        const btn2 = document.getElementById("btn2");
        const btn3 = document.getElementById("btn3");
        const Cedula_person = document.getElementById("Cedula_person");
        const Nombre_person = document.getElementById("Nombre_person");
        const Naci_person = document.getElementById("Naci_person");
        const Fnaci_person = document.getElementById("Fnaci_person");
        const sexoM = document.getElementById("sexoM");
        const sexoF = document.getElementById("sexoF");
        const Correo_person = document.getElementById("Correo_person");
        const Tipo_person = document.getElementById("Tipo_person");
        const Ecivil_person = document.getElementById("Ecivil_person");
        const Cvota_person = document.getElementById("Cvota_person");
        const Cod_patria = document.getElementById("Cod_patria");
        const Ser_patria = document.getElementById("Ser_patria");
        const Rec_bono_si = document.getElementById("Rec_bono_si");
        const Rec_bono_no = document.getElementById("Rec_bono_no");
        const Nestudi_person = document.getElementById("Nestudi_person");
        const prof_person = document.getElementById("prof_person");
        const Enf_person_si = document.getElementById("Enf_person_si");
        const Enf_person_no = document.getElementById("Enf_person_no");
        const Enf_person = document.getElementById("Enf_person");
        const Peso_person = document.getElementById("Peso_person");
        const Talla_person = document.getElementById("Talla_person");
        const CBI_person = document.getElementById("CBI_person");

        

        // Inicializa el array para almacenar la información de la familia
        var Familia = [];

        // Verifica si hay una sesión existente al cargar la página


        function agregarMiembro() {
            // Obtén los valores de los campos del formulario
            var cedula = Cedula_person.value;
            var nombre = Nombre_person.value;
            var nacionalidad = Naci_person.value;
            var fechaNacimiento = Fnaci_person.value;
            var genero = sexoM.checked ? "Masculino" : "Femenino";
            var correo = Correo_person.value;
            var tipo = Tipo_person.value;
            var estadoCivil = Ecivil_person.value;
            var cvota = Cvota_person.value;
            var codPatria = Cod_patria.value;
            var serPatria = Ser_patria.value;
            var recibeBono = Rec_bono_si.checked ? "Sí" : "No";
            var nivelEstudio = Nestudi_person.value;
            var profesion = prof_person.value;
            var enfermedad = Enf_person_si.checked ? "Sí" : "No";
            var enfepersona = Enf_person.value;
            var peso = Peso_person.value;
            var talla = Talla_person.value;
            var cbi = CBI_person.value;
            
            // Agrega un nuevo miembro al array con más propiedades
            Familia.push({
                ced_per: cedula,
                nom_per: nombre,
                nac_per: nacionalidad,
                fsm_per: fechaNacimiento,
                sex_per: genero,
                cor_per: correo,
                tip_fam: tipo,
                est_civ: estadoCivil,
                cen_vot: cvota,
                cod_pat: codPatria,
                ser_pat: serPatria,
                rec_bon: recibeBono,
                est_per: nivelEstudio,
                tra_per: profesion,
                enf_per: enfermedad,
                tip_enf: enfepersona,
                pes_per: peso,
                tall_per: talla,
                cbi_per: cbi
                // Puedes agregar el resto de las variables aquí...
            });

            // Limpia los valores del formulario para permitir el ingreso de nuevos datos
            Cedula_person.value = '';
            Nombre_person.value = '';
            Naci_person.value = '';
            Fnaci_person.value = '';
            sexoM.value = '';
            sexoF.value = '';
            Correo_person.value = '';
            Tipo_person.value = '';
            Ecivil_person.value = '';
            Cvota_person.value = '';
            Cod_patria.value = '';
            Ser_patria.value = '';
            Rec_bono_si.value = '';
            Rec_bono_no.value = '';
            Nestudi_person.value = '';
            prof_person.value = '';
            console.log(Familia);
            // Limpia los valores de las demás variables...
        }

        // ... (código anterior)

        function enviardatos() {
            if (Familia.length > 0) {
                var datos = JSON.stringify(Familia);
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "?controller=clap&action=incertar_Gfamiliar", true);
                xhr.setRequestHeader("Content-Type", "application/json"); // Establecer el tipo de contenido a JSON
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {

                            // Resto de tu código...
                            if (xhr.responseText == "1") {
                                console.log("exito");
                                // Resto de tu código...
                            } else if (xhr.responseText == "2") {
                                console.log("fracaso");
                                // Resto de tu código...
                            } else {
                                console.log("fracaso3");
                                console.log("Respuesta del servidor:", xhr.responseText);
                            }

                        } else {
                            // Manejar errores específicos si es necesario
                            if (xhr.status === 500) {
                                console.log("fracaso1");
                                formularioUtils.mostrarExito('?controller=clap&action=index&timestamp=');
                            } else {
                                console.log("fracaso2");
                                formularioUtils.mostrarError();
                            }
                        }
                    }
                }
                xhr.send(datos);

            } else {
                console.log("No hay datos para enviar");
            }
        }

        // Resto del código...


        btn3.addEventListener('click', () => {
            agregarMiembro();
            div3.style.display = "none";
            div1.style.display = "block";
        });
        reg.addEventListener('click', () => {
            enviardatos();
        });

        btn1.addEventListener('click', () => {
            div1.style.display = "none";
            div2.style.display = "block";
        });
        btn2.addEventListener('click', () => {
            div2.style.display = "none";
            div3.style.display = "block";
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