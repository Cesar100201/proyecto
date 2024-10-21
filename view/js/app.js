const formularioUtils = {
    mostrarError: function () {
        Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: 'Se ha producido un error. Por favor, inténtalo de nuevo.',
            confirmButtonText: 'OK'
        });
    },
    mostrarExito: function (Url) {
        Swal.fire({
            icon: 'success',
            title: '¡Registro exitoso!',
            text: 'El usuario se ha registrado con éxito.',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = Url;
            }
        });
    },
    enviarDatos: function (url, datos, resultado) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    if (url.includes("?controller=clap&action=cargar_CLAP&timestamp=")) {
                        if (xhr.responseText !== "fracaso") {
                            console.log(xhr.responseText);
                        } else if (xhr.responseText === "fracaso") {
                            console.log(xhr.responseText);
                            formularioUtils.mostrarError();
                        }
                    } else if(url.includes("?controller=clap&action=confirmar_contraseña&")){
                        if (xhr.responseText !== "fracaso") {
                            formularioUtils.mostrarExito('?controller=clap&action=index&timestamp=');
                        } else if (xhr.responseText === "fracaso") {
                            console.log("fracaso2");
                            formularioUtils.mostrarError();
                        }
                    }else {
                        if (xhr.responseText !== "fracaso") {
                            resultado.innerHTML = xhr.responseText;
                            console.log(url);
                        } else if (xhr.responseText === "fracaso") {
                            console.log("fracaso3");
                            formularioUtils.mostrarError();
                        } else {
                            if (xhr.status === 500) {
                                formularioUtils.mostrarExito('?controller=clap&action=index&timestamp=');
                            } else {
                                formularioUtils.mostrarExito('?controller=clap&action=index&timestamp=');
                            }
                        }
                    }
                }
            }
        };
        
        xhr.send(datos);
    },
    enviarDatos2: function (url, datos, resultado) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    if (url.includes("?controller=clap&action=cargar_CLAP&timestamp=")) {
                        if (xhr.responseText !== "fracaso") {
                            formularioUtils.mostrarExito('?controller=clap&action=home&timestamp=');
                        } else if (xhr.responseText === "fracaso") {
                            console.log(xhr.responseText);
                            formularioUtils.mostrarError();
                        }
                    } else if(url.includes("?controller=clap&action=confirmar_contraseña&")){
                        if (xhr.responseText !== "fracaso") {
                            formularioUtils.mostrarExito('?controller=clap&action=index&timestamp=');
                        } else if (xhr.responseText === "fracaso") {
                            console.log("fracaso2");
                            formularioUtils.mostrarError();
                        }
                    }else {
                        if (xhr.responseText !== "fracaso") {
                            resultado.innerHTML = xhr.responseText;
                            console.log(url);
                        } else if (xhr.responseText === "fracaso") {
                            console.log("fracaso3");
                            formularioUtils.mostrarError();
                        } else {
                            if (xhr.status === 500) {
                                formularioUtils.mostrarExito('?controller=clap&action=index&timestamp=');
                            } else {
                                formularioUtils.mostrarExito('?controller=clap&action=index&timestamp=');
                            }
                        }
                    }
                }
            }
        };
        
        xhr.send(JSON.stringify(datos));
    },
    enviarDatosfin: function (url, datos, resultado) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    if (innerHTML = xhr.responseText ==! "fracaso") {
                        formularioUtils.mostrarExito("?controller=clap&action=pre_usu&timestamp=");
                    } else if (innerHTML = xhr.responseText == "fracaso") {
                        formularioUtils.mostrarError();
                    }
                } else {
                    // Manejar errores específicos si es necesario
                    if (xhr.status === 500) {
                        formularioUtils.mostrarExito('?controller=clap&action=index&timestamp=');
                    } else {
                        formularioUtils.mostrarError();
                    }
                }
            }
        }
        
        xhr.send(datos);
    },
    RegistrarUsuario: function (url, datos) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    formularioUtils.mostrarExito("?controller=clap&action=index&timestamp=");
                } else {
                    // Manejar errores específicos si es necesario
                    if (xhr.status === 500) {
                        formularioUtils.mostrarErrorPersonalizado();
                    } else {
                        formularioUtils.mostrarError();
                    }
                }
            }
        };

        xhr.send(formularioUtils.construirDatos(datos));
    },
    obtenerValores: function (campos) {
        const valores = {};
        for (const campo in campos) {
            if (campos.hasOwnProperty(campo)) {
                valores[campo] = document.getElementById(campos[campo]).value;
            }
        }
        return valores;
    },
    construirDatos: function (valores) {
        const datos = [];
        for (const key in valores) {
            if (valores.hasOwnProperty(key)) {
                datos.push(`${key}=${valores[key]}`);
            }
        }
        return datos.join("&");
    },
    enviarCedula: function (resultado) {
        // Obtener el valor de la cédula desde el formulario
        const cedula = document.getElementById("Cedula").value;
        // Construir la URL para la solicitud AJAX
        const url = "?controller=clap&action=recibir_preguntas&timestamp=" + new Date().getTime();

        // Construir los datos a enviar en el cuerpo de la solicitud
        const datos = "cedula=" + encodeURIComponent(cedula);

        // Utilizar la función genérica para enviar datos y manejar la respuesta
        formularioUtils.enviarDatos(url, datos, resultado);
    },
    VerificarCedula: function (resultado) {
        // Obtener el valor de la cédula desde el formulario
        const cedula = document.getElementById("cedula").value;
        // Construir la URL para la solicitud AJAX
        const url = "?controller=clap&action=VerificarCedula&timestamp=" + new Date().getTime();

        // Construir los datos a enviar en el cuerpo de la solicitud
        const datos = "usuario=" + encodeURIComponent(cedula);

        // Utilizar la función genérica para enviar datos y manejar la respuesta
        formularioUtils.enviarDatos(url, datos, resultado);
    },
    compararRespuestas: function (resultado) {
        // Obtener las respuestas ingresadas por el usuario desde el formulario
        const respuestaUsuario1 = document.getElementById("respuestaUsuario1").value;
        const respuestaUsuario2 = document.getElementById("respuestaUsuario2").value;
        // Construir la URL para la solicitud AJAX
        const url = "?controller=clap&action=comparar_respuesta&timestamp=" + new Date().getTime();

        // Construir los datos a enviar en el cuerpo de la solicitud
        const datos = "respuestaUsuario1=" + encodeURIComponent(respuestaUsuario1) + "&respuestaUsuario2=" + encodeURIComponent(respuestaUsuario2);

        // Utilizar la función genérica para enviar datos y manejar la respuesta
        formularioUtils.enviarDatos(url, datos, resultado);
    },
    verificarContraseña: function (resultado) {
        // Obtener las contraseñas ingresadas por el usuario desde el formulario
        const contraseña = document.getElementById("contraseña").value;
        const confirmarcontraseña = document.getElementById("confirmarcontraseña").value;
        const cedula = document.getElementById("Cedula").value;

        // Construir la URL para la solicitud AJAX
        const url = "?controller=clap&action=confirmar_contraseña&timestamp=" + new Date().getTime();

        // Construir los datos a enviar en el cuerpo de la solicitud
        const datos = "ced_usu=" + encodeURIComponent(cedula) + "&contraseña=" + encodeURIComponent(contraseña) + "&confirmarcontraseña=" + encodeURIComponent(confirmarcontraseña);

        // Utilizar la función genérica para enviar datos y manejar la respuesta
        formularioUtils.enviarDatos(url, datos, resultado);
    },
    registrarUsuario: function (resultado, datos) {
        // Obtener los valores ingresados por el usuario desde el formulario

        
        // Construir la URL para la solicitud AJAX
        const url = "?controller=clap&action=insertar_usu&timestamp=" + new Date().getTime();
    
        // Construir los datos a enviar en el cuerpo de la solicitud
         
        // Utilizar la función genérica para enviar datos y manejar la respuesta
        formularioUtils.enviarDatosfin(url, datos, resultado);
        
        console.log()

    },
    
    enviarClap: function (resultado) {
        // Convierte el objeto datosFormulario en una cadena de parámetros
        console.log("prueba")
            const ID_CLAP= document.getElementById("ID_CLAP").value;
            const nombre_CLAP= document.getElementById("nombre_CLAP").value;
            const cedula_CLAP= document.getElementById("cedula_CLAP").value;
        const datos = {
            ID_CLAP: ID_CLAP,
            nombre_CLAP: nombre_CLAP,
            cedula_CLAP: cedula_CLAP,
            
        };
        const url = "?controller=clap&action=cargar_CLAP&timestamp=";
        
        console.log(datos)
        // Utiliza la función formularioUtils.enviarDatos para enviar los datos a la URL con el resultado proporcionado
        formularioUtils.enviarDatos2(url, datos, resultado);
    }
    
    
};







