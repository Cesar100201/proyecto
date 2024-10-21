<script>
// Verifica que los elementos HTML existan antes de ejecutar la función
if ($('#Rclap').length && $('#Rcomunidad').length && $('#Rcalle').length && $('#Rfamilia').length) {
    $.ajax({
        url: '?controller=clap&action=enviarNivUsuario',
        method: 'POST',
        success: function(response) {
            // Maneja la respuesta y actualiza el contenido de miElemento
            const tipousuario = parseInt(response); // Asegúrate de que la respuesta sea un número
            if (tipousuario === 1) {
                Rclap.style.display = "none";
                Rcomunidad.style.display = "none";
            } else if (tipousuario === 2) {
                Rclap.style.display = "none";
                Rcalle.style.display = "none";
                Rfamilia.style.display = "none";
            } else if (tipousuario === 3) {
                Rcomunidad.style.display = "none";
                Rcalle.style.display = "none";
                Rfamilia.style.display = "none";
            }
        },
        error: function() {
            // Maneja los errores si la solicitud AJAX falla
            console.log("Error al traer la variable");
        }
    });
} else {
    console.log("Alguno de los elementos no existe. La función no se ejecutará.");
}

</script>

    <script src="view/js/questions.js"></script>

</body>

</html>