<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
    .sign-in {
        margin-top: 0em;
    }

    table.rounded {
        border-spacing: 0;
        border-radius: 10px;
        /* Ajusta el valor según sea necesario */
        overflow: hidden;
    }

    table.rounded th,
    table.rounded td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }

    table.rounded thead th {
        background-color: #f2f2f2;
    }

    table.rounded tfoot td {
        background-color: #f2f2f2;
    }
</style>
</header>


<section class="container price__table form-container sign-in">
    <div class="table" id="1"></div>
</section>
</div>


</body>









<script>
    // Función para realizar la solicitud AJAX

    $.ajax({
        type: 'POST',
        url: '?controller=clap&action=mostrarTablaComunidad', // Ajuste en la acción
        data: {
            tabla: 'comunidad'
        },
        success: function(response) {
            // Actualizar el contenido del div con la tabla
            console.log(response);
            $('#1').html(response);
        },
        error: function(error) {
            console.error('Error en la solicitud AJAX:', error);
        },
        dataType: 'html' // Especificar el tipo de dato esperado en la respuesta
    });
</script>