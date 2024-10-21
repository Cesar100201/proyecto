<?php
require_once "model/clap.model.php";

class ClapController
{

	private $model;

	public function __construct()
	{
		$this->model = new ClapModel();
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	}
	public function cerrarSesion()
	{
		// Lógica para cerrar la sesión
		session_destroy();

		// Redirige a la página de inicio
		require_once "view/header.php";
		require_once "view/index.php";
		require_once "view/footer.php";
		exit();
	}
	public function index()
	{
		require_once "view/header.php";
		require_once "view/index.php";
		require_once "view/footer.php";
	}
	public function home()
	{
		if (!isset($_SESSION['ced_usu'])) {
			require_once "view/header.php";
			require_once "view/index.php";
			require_once "view/footer.php";
			exit();
		} else {
			require_once "view/head.php";
			require_once "view/home.php";
			require_once "view/foot.php";
		}
	}
	public function pre_usu()
	{

		require_once "view/header.php";
		require_once "view/register.php";
		require_once "view/footer.php";
	}
	public function recuperar_contraseña()
	{
		require_once "view/header.php";
		require_once "view/rec_contra.php";
		require_once "view/footer.php";
	}
	public function registro_clap()
	{
		if (!isset($_SESSION['ced_usu'])) {
			require_once "view/header.php";
			require_once "view/index.php";
			require_once "view/footer.php";
			exit();
		} else {
			require_once "view/head.php";
			require_once "view/reg_clap.php";
			require_once "view/foot.php";
		}
	}
	public function registro_familia()
	{
		if (!isset($_SESSION['ced_usu'])) {
			require_once "view/header.php";
			require_once "view/index.php";
			require_once "view/footer.php";
			exit();
		} else {
			require_once "view/head.php";
			require_once "view/reg_familia.php";
			require_once "view/foot.php";
		}
	}
	public function persona()
	{
		if (!isset($_SESSION['ced_usu'])) {
			require_once "view/header.php";
			require_once "view/index.php";
			require_once "view/footer.php";
			exit();
		} else {
			require_once "view/head.php";
			require_once "view/reg_persona.php";
			require_once "view/foot.php";
		}
	}
	public function con_clap()
	{
		if (!isset($_SESSION['ced_usu'])) {
			require_once "view/header.php";
			require_once "view/index.php";
			require_once "view/footer.php";
			exit();
		} else {
			require_once "view/head.php";
			require_once "view/Con_clap.php";
			require_once "view/foot.php";
		}
	}
	public function con_comunidad()
	{
		if (!isset($_SESSION['ced_usu'])) {
			require_once "view/header.php";
			require_once "view/index.php";
			require_once "view/footer.php";
			exit();
		} else {
			require_once "view/head.php";
			require_once "view/Con_comunidad.php";
			require_once "view/foot.php";
		}
	}
	public function con_calle()
	{
		if (!isset($_SESSION['ced_usu'])) {
			require_once "view/header.php";
			require_once "view/index.php";
			require_once "view/footer.php";
			exit();
		} else {
			require_once "view/head.php";
			require_once "view/Con_calle.php";
			require_once "view/foot.php";
		}
	}
	public function con_nucleo()
	{
		if (!isset($_SESSION['ced_usu'])) {
			require_once "view/header.php";
			require_once "view/index.php";
			require_once "view/footer.php";
			exit();
		} else {
			require_once "view/head.php";
			require_once "view/Con_nucleo.php";
			require_once "view/foot.php";
		}
	}
	public function registro_calle()
	{
		if (!isset($_SESSION['ced_usu'])) {
			require_once "view/header.php";
			require_once "view/index.php";
			require_once "view/footer.php";
			exit();
		} else {
			require_once "view/head.php";
			require_once "view/reg_calle.php";
			require_once "view/foot.php";
		}
	}
	public function registro_Comunidad()
	{
		if (!isset($_SESSION['ced_usu'])) {
			require_once "view/header.php";
			require_once "view/index.php";
			require_once "view/footer.php";
			exit();
		} else {
			require_once "view/head.php";
			require_once "view/reg_comunidad.php";
			require_once "view/foot.php";
		}
	}
	public function insertar_usu()
	{

		$clap = isset($_POST["cod_clap"]) ? $_POST["cod_clap"] : "";
		$cedula = isset($_POST["ced_usu"]) ? $_POST["ced_usu"] : "";
		$nombre = isset($_POST["nom_usu"]) ? $_POST["nom_usu"] : "";
		$tipo = isset($_POST["tipo_usu"]) ? $_POST["tipo_usu"] : "";
		$contraseña = isset($_POST["contraseña"]) ? $_POST["contraseña"] : "";

		if (!empty($clap) && !empty($cedula) && !empty($tipo) && !empty($contraseña)) {
			$_SESSION["cod_clap"] = $clap;
			$_SESSION["ced_usu"] = $cedula;
			$_SESSION["nom_usu"] = $nombre;
			$_SESSION["tipo_usu"] = $tipo;
			$_SESSION["contraseña"] = $contraseña;

			exit();
		} else {
			echo "fracaso";
		}
	}
	public function insertar_pre()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$pregunta1 = isset($_POST["pregunta1"]) ? $_POST["pregunta1"] : "";
			$pregunta2 = isset($_POST["pregunta2"]) ? $_POST["pregunta2"] : "";
			$pregunta3 = isset($_POST["pregunta3"]) ? $_POST["pregunta3"] : "";
			$pregunta4 = isset($_POST["pregunta4"]) ? $_POST["pregunta4"] : "";
			$respuesta1 = isset($_POST["respuesta1"]) ? $_POST["respuesta1"] : "";
			$respuesta2 = isset($_POST["respuesta2"]) ? $_POST["respuesta2"] : "";
			$respuesta3 = isset($_POST["respuesta3"]) ? $_POST["respuesta3"] : "";
			$respuesta4 = isset($_POST["respuesta4"]) ? $_POST["respuesta4"] : "";

			if (!empty($pregunta1) && !empty($pregunta2) && !empty($pregunta3) && !empty($pregunta4) && !empty($respuesta1) && !empty($respuesta2) && !empty($respuesta3) && !empty($respuesta4)) {
				$clap = $_SESSION["cod_clap"];
				$cedula = $_SESSION["ced_usu"];
				$nombre = $_SESSION["nom_usu"];
				$tipo = $_SESSION["tipo_usu"];
				$contraseña = $_SESSION["contraseña"];
				$hash = password_hash($contraseña, PASSWORD_DEFAULT);

				$model = new clapmodel();

				$datos_a_insertar = array(
					'id_clap' => $clap,
					'ced_usu' => $cedula,
					'nombre' => $nombre,
					'tip_usu' => $tipo,
					'clave' => $hash,
					'pregunta1' => $pregunta1,
					'respuesta1' => $respuesta1,
					'pregunta2' => $pregunta2,
					'respuesta2' => $respuesta2,
					'pregunta3' => $pregunta3,
					'respuesta3' => $respuesta3,
					'pregunta4' => $pregunta4,
					'respuesta4' => $respuesta4
				);

				$nombreTabla = 'usuarios';


				$resultado = $model->insertar_datos($nombreTabla, $datos_a_insertar);

				if ($resultado) {
					exit();
				} else {
					echo "Error al insertar en la base de datos.";
				}
			} else {
				echo "Por favor, completa todos los campos del formulario de preguntas.";
			}
		} else {
			echo "Error: El formulario solo debe enviarse mediante POST.";
		}
	}
	public function validar_usu()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$usuario = isset($_POST["Usuario"]) ? $_POST["Usuario"] : "";
			$contraseña = isset($_POST["Contraseña"]) ? $_POST["Contraseña"] : "";
			if (!empty($usuario) && !empty($contraseña)) {

				$usuarioValidado = $this->model->validar_usu($usuario, $contraseña);

				if ($usuarioValidado) {
					$nivel_usu = $this->model->obtenerInfoUsuario($usuario);
					$_SESSION['tip_usu'] = $nivel_usu['tip_usu'];
					$_SESSION['id_clap'] = $nivel_usu['id_clap'];
					$_SESSION['ced_usu'] = $usuario;
					require_once "view/head.php";
					require_once "view/home.php";
					require_once "view/foot.php";
					exit();
				} else {
					echo "Usuario o contraseña incorrectos";
				}
			} else {
				echo "Por favor, completa los campos de usuario y contraseña.";
			}
		} else {
			echo "Error: El formulario solo debe enviarse mediante POST.";
		}
	}
	public function cargar_CLAP()
	{
		$data = json_decode(file_get_contents('php://input'), true);

		$id_clap = isset($data["ID_CLAP"]) ? $data["ID_CLAP"] : "";
		$nom_clap = isset($data["nombre_CLAP"]) ? $data["nombre_CLAP"] : "";
		$ced_clap = isset($data["cedula_CLAP"]) ? $data["cedula_CLAP"] : "";
		$id_clap = "CLAPS-TAC-" . $id_clap;

		$datos_a_insertar = array(
			'id_clap' => $id_clap,
			'nom_clap' => $nom_clap,
			'clap_lid' => $ced_clap,
		);

		if (!empty($id_clap) && !empty($nom_clap) && !empty($ced_clap)) {
			$model = new clapmodel();
			$nombreTabla = 'clap';

			$resultado = $model->insertar_datos($nombreTabla, $datos_a_insertar);

			if ($resultado) {
				echo "Exito";
				exit();
			} else {
				var_dump($datos_a_insertar);
			}
		} else {
			var_dump($datos_a_insertar);
		}
	}
	public function cargar_comunidad()
	{
		$id_clap = $_SESSION['id_clap'];
		$nombre_Comunidad = isset($_POST["nombre_Comunidad"]) ? $_POST["nombre_Comunidad"] : "";
		$cedula_Comunidad = isset($_POST["cedula_Comunidad"]) ? $_POST["cedula_Comunidad"] : "";
		$cant_parques = isset($_POST["cant_parques"]) ? $_POST["cant_parques"] : "";
		$cant_canchas = isset($_POST["cant_canchas"]) ? $_POST["cant_canchas"] : "";
		$cant_modulos = isset($_POST["cant_modulos"]) ? $_POST["cant_modulos"] : "";

		// Validación de datos
		if (empty($nombre_Comunidad) || empty($cedula_Comunidad) || empty($cant_parques) || empty($cant_canchas) || empty($cant_modulos)) {
			throw new Exception("Faltan datos obligatorios.");
		}

		// Verificar si el nombre_Comunidad tiene al menos tres letras
		if (strlen($nombre_Comunidad) >= 3) {
			// Obtener las tres primeras letras de nombre_Comunidad
			$tres_primeras_letras = substr($nombre_Comunidad, 0, 3);

			// Reemplazar los espacios con ceros
			$tres_primeras_letras = str_replace(' ', '0', $tres_primeras_letras);

			// Combinar id_clap y las tres primeras letras de nombre_Comunidad
			$id_com = $id_clap . $tres_primeras_letras;
		}

		// Crear instancia del modelo
		$model = new clapmodel();

		// Insertar datos en la tabla comunidad
		$datos_a_insertar = array(
			'id_com' => $id_com,
			'id_clap' => $id_clap,
			'nom_com' => $nombre_Comunidad,
			'cant_par' => $cant_parques,
			'cant_can' => $cant_canchas,
			'cant_mod' => $cant_modulos,
			'comu_lid' => $cedula_Comunidad,
		);

		$nombreTablaComunidad = 'comunidad';
		$resultadoComunidad = $model->insertar_datos($nombreTablaComunidad, $datos_a_insertar);

		// Incrementar cant_com en la tabla clap
		$resultadoIncremento = $this->model->obtener_cant_com($id_clap);
		echo $resultadoIncremento;
		$resultadoIncremento = $resultadoIncremento + 1;
		if ($resultadoIncremento !== false) {
			// Actualizar cant_com en la tabla clap
			$resultado = $model->actualizar_datos('clap', ['cant_com' => $resultadoIncremento], 'id_clap', $id_clap);


			if ($resultadoComunidad && $resultado) {

				exit();
			} else {
				throw new Exception("Error al actualizar la comunidad.");
			}
		} else {
			throw new Exception("Error al incrementar cant_com.");
		}
	}
	public function obtenerCLAPs()
	{
		// Obtener los CLAPs desde el modelo
		$claps = $this->model->obtenerCLAPs();

		// Crear el select
		echo '<select name="cod_clap" id="cod_clap">';
		echo '<option value="">seleccionar</option>';

		// Verificar si $claps no está vacío
		if (!empty($claps)) {
			// Iterar sobre los CLAPs y agregar opciones al select
			foreach ($claps as $clap) {
				echo '<option id="Clap" value="' . $clap['id_clap'] . '">' . $clap['nom_clap'] . '</option>';
			}
		}

		// Cerrar el select
		echo '</select>';
	}
	public function verificar_usuario()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$usuario = isset($_POST["Usuario"]) ? $_POST["Usuario"] : "";

			if (!empty($usuario)) {

				$usuarioValidado = $this->model->verificar_usuario($usuario);

				if ($usuarioValidado) {

					exit();
				} else {
					echo "Usuario o contraseña incorrectos";
				}
			} else {
				echo "Por favor, completa los campos de usuario y contraseña.";
			}
		} else {
			echo "Error: El formulario solo debe enviarse mediante POST.";
		}
	}
	public function incertar_Gfamiliar()
	{
		// Recuperar los datos enviados por AJAX
		$datos_json = file_get_contents('php://input');
		$datos_array = json_decode($datos_json, true);


		// Nombre de la tabla en la base de datos
		$nombreTabla = 'personas';

		// Verificar si hay datos y que es un array
		if (is_array($datos_array) && !empty($datos_array)) {
			$resultados = array();

			// Iterar sobre cada elemento del array
			foreach ($datos_array as $elemento) {
				// Llamar a la función del modelo para insertar datos
				$resultado = $this->model->insertar_datos($nombreTabla, $elemento);
				$resultados[] = $resultado;
			}

			// Verificar el resultado y enviar una respuesta
			if (in_array(false, $resultados, true)) {
				echo "2";
			} else {
				echo "1";
			}
		} else {
			echo "2"; // No se recibieron datos válidos
		}
	}
	public function recibir_preguntas()
	{
		$cedula = $_POST["cedula"];
		$datosUsuario = $this->model->obtenerDatosPorCedula($cedula);
		$_SESSION['cedula'] = $cedula;

		// Verificar si $datosUsuario es null antes de intentar acceder a sus índices
		if ($datosUsuario !== null) {

			$preguntas = [
				isset($datosUsuario['pregunta1']) ? $datosUsuario['pregunta1'] : '',
				isset($datosUsuario['pregunta2']) ? $datosUsuario['pregunta2'] : '',
				isset($datosUsuario['pregunta3']) ? $datosUsuario['pregunta3'] : '',
				isset($datosUsuario['pregunta4']) ? $datosUsuario['pregunta4'] : '',
			];

			// Shuffle para obtener preguntas en orden aleatorio


			// Obtener las respuestas correspondientes a las preguntas seleccionadas
			$respuestas = [
				$datosUsuario['respuesta1'],
				$datosUsuario['respuesta2'],
				$datosUsuario['respuesta3'],
				$datosUsuario['respuesta4'],
			];

			$Preguntas = [
				"1" => "¿Cuando es tu cumpleaños?",
				"2" => "¿Como se llamaba tu mama?",
				"3" => "¿Como se llamaba tu papa?",
				"4" => "¿A qué escuela fuiste?",
				"5" => "¿Cual es la fecha de nacimiento de tu padre?",
				"6" => "¿Cual es la fecha de nacimiento de tu madre?",
				"7" => "¿En que mes naciste?",
				"8" => "¿Como se llamo tu primera mascota?",
			];

			if ($datosUsuario !== null) {
				for ($i = 0; $i < 2; $i++) {
					$claveAleatoria = array_rand($preguntas);
					$preguntaAleatoria = $preguntas[$claveAleatoria];
					$PREGUNTA = $Preguntas[$preguntaAleatoria];
					$respuestaAleatoria = $respuestas[$claveAleatoria];

					// Asignar el valor de $respuestaAleatoria a las variables correspondientes
					if ($i === 0) {
						$_SESSION['respuesta1'] = $respuestaAleatoria;
						echo '<label>' . $PREGUNTA . '</label>';
						echo '<input id="respuestaUsuario1" name="Pregunta1" type="text" placeholder="Su Respuesta">';
					} elseif ($i === 1) {
						$_SESSION['respuesta2'] = $respuestaAleatoria;
						echo '<label>' . $PREGUNTA . '</label>';
						echo '<input id="respuestaUsuario2" name="Pregunta2" type="text" placeholder="Su Respuesta">';
					}
					unset($preguntas[$claveAleatoria]);
				}
			} else {
				echo "fracaso";
			}
		} else {
			echo "fracaso";
		}
	}
	public function comparar_respuesta()
	{
		if (isset($_SESSION['respuesta1']) && isset($_SESSION['respuesta2'])) {
			$respuesta1_almacenada = $_SESSION['respuesta1'];
			$respuesta2_almacenada = $_SESSION['respuesta2'];
			$respuestaUsuario1 = isset($_POST['respuestaUsuario1']) ? $_POST['respuestaUsuario1'] : '';
			$respuestaUsuario2 = isset($_POST['respuestaUsuario2']) ? $_POST['respuestaUsuario2'] : '';
			if ($respuestaUsuario1 === $respuesta1_almacenada && $respuestaUsuario2 === $respuesta2_almacenada) {
				echo '<label>ingresa tu nueva contraseña</label>';
				echo '<input id="contraseña" name="contraseña1" type="password" placeholder="Confirmar Contraseña">';
				echo '<label>Confirma tu contraseña</label>';
				echo '<input id="confirmarcontraseña" name="contraseña2" type="password" placeholder="Confirmar contraseña">';
			} else {
				echo "fracaso";
			}
		} else {
			echo "fracaso";
		}
	}
	public function confirmar_contraseña()
	{
		session_start();
		$model = new clapmodel();
		$contraseña = $_POST['contraseña'];
		$confirmarcontraseña = $_POST['confirmarcontraseña'];
		if (isset($_SESSION['cedula'])) {
			$hash = password_hash($contraseña, PASSWORD_DEFAULT);


			$datosActualizar = array(
				'clave' => $hash,

			);
			if ($contraseña === $confirmarcontraseña) {
				$id = "ced_usu";
				$resultado = $model->actualizar_datos('usuarios', $datosActualizar,  $id, $_SESSION['cedula']);
				if ($resultado) {

					echo "exito";
					exit();
				} else {
					echo "fracaso";
				}
			} else {
				echo "fracaso";
			}
		} else {
			echo "fracaso";
		}
	}
	public function VerificarCedula()
	{
		// Obtener la cédula desde la solicitud AJAX
		$cedula = $_POST['usuario']; // Ajusta el nombre según el dato enviado desde JavaScript

		// Supongamos que ya tienes una instancia del modelo (ajusta según tu implementación)


		// Verificar si la cédula ya existe en la base de datos
		if ($this->model->verificar_usuario($cedula)) {
			// La cédula ya existe en la base de datos, muestra un mensaje de error
			echo "fracaso";
		} else {
			// La cédula no existe en la base de datos, no devuelve nada
			// (puedes ajustar esto según tus necesidades)
		}
	}
	public function mostrarTablaCLAP()
	{
		// Obtener la cédula del usuario desde la sesión
		$cedulaUsuario = $_SESSION["ced_usu"] ?? null;

		if ($cedulaUsuario) {
			// Obtener los datos utilizando la función obtenerDatos
			$resultadoClaps = $this->model->obtenerDatos("clap");

			// Filtrar los resultados para mostrar solo los datos del CLAP correspondiente a la cédula del usuario
			$resultadosFiltradosClaps = array_filter($resultadoClaps, function ($fila) use ($cedulaUsuario) {
				return $fila["clap_lid"] == $cedulaUsuario;
			});

			// Verificar si hay datos filtrados
			if (!empty($resultadosFiltradosClaps)) {

				echo '<table class="table table-striped rounded">';
				echo '<thead>';
				echo '<tr>';
				echo '<th colspan="4">Código del CLAP</th>';
				echo '<th colspan="4">Nombre del CLAP</th>';
				// Agrega más columnas según sea necesario
				echo '</tr>';
				echo '</thead>';
				echo '<tbody>';

				$totalComunidades = 0;
				$totalCalles = 0;
				$totalFamilias = 0;

				// Iterar sobre los resultados filtrados de CLAPs
				foreach ($resultadosFiltradosClaps as $filaClap) {
					echo '<tr>';
					echo '<td colspan="4">' . ($filaClap["id_clap"] ?? 0) . '</td>';
					echo '<td colspan="4">' . ($filaClap["nom_clap"] ?? 0) . '</td>';
					echo '</tr>';
					echo '<thead>';
					echo '<tr>';
					echo '<th>Nombre de la Comunidad</th>';
					echo '<th>Cantidad de Familias</th>';
					echo '<th>Cantidad de Calles</th>';
					echo '<th>Cantidad de Parques</th>';
					echo '<th>Cantidad de Canchas</th>';
					echo '<th>Cantidad de Modulos de Barrio Adentro</th>';
					echo '<th>Cédula del Líder de Comunidad</th>';
					echo '<th>Nombre del Líder de Comunidad</th>';
					// Agrega más columnas según sea necesario
					echo '</tr>';
					echo '</thead>';

					// Obtener el ID del CLAP actual
					$idCLAP = $filaClap["id_clap"];

					// Obtener las comunidades asociadas a este CLAP
					$resultadoComunidades = $this->model->obtenerDatos("comunidad");
					$resultadosFiltradosComunidades = array_filter($resultadoComunidades, function ($filaComunidad) use ($idCLAP) {
						return $filaComunidad["id_clap"] == $idCLAP;
					});

					// Iterar sobre las comunidades y mostrar los datos
					foreach ($resultadosFiltradosComunidades as $filaComunidad) {
						echo '<tr>';
						echo '<td>' . ($filaComunidad["nom_com"] ?? 0) . '</td>';
						echo '<td>' . ($filaComunidad["cant_fam"] ?? 0) . '</td>';
						echo '<td>' . ($filaComunidad["cant_call"] ?? 0) . '</td>';
						echo '<td>' . ($filaComunidad["cant_par"] ?? 0) . '</td>';
						echo '<td>' . ($filaComunidad["cant_can"] ?? 0) . '</td>';
						echo '<td>' . ($filaComunidad["cant_mod"] ?? 0) . '</td>';
						echo '<td>' . ($filaComunidad["comu_lid"] ?? 0) . '</td>';

						// Obtener la cédula del líder de la comunidad
						$ced_lid = $filaComunidad["comu_lid"];

						// Obtener información del líder de la comunidad
						$resultadoLideres = $this->model->obtenerDatos("usuarios");
						$resultadosFiltradosLideres = array_filter($resultadoLideres, function ($filaLideres) use ($ced_lid) {
							return $ced_lid == $filaLideres["ced_usu"];
						});

						// Mostrar información del líder de la comunidad o "No registrado" si no hay resultados
						if (!empty($resultadosFiltradosLideres)) {
							foreach ($resultadosFiltradosLideres as $liderComunidad) {
								echo '<td>' . ($liderComunidad["nombre"] ?? 0) . '</td>';
							}
						} else {
							echo '<td>No registrado</td>';
						}

						echo '</tr>';
					}



					// Sumar al total
					$totalComunidades += count($resultadosFiltradosComunidades);
					// $totalCalles += ($filaClap["cant_call"] ?? 0); // Puedes descomentar si necesitas la cantidad de calles
					$totalFamilias += ($filaClap["cant_fam"] ?? 0);
				}

				echo '</tbody>';

				// Mostrar totales al final de la tabla
				echo '<tfoot>';
				echo '<tr><td>Total de Comunidades:</td><td colspan="7">' . $totalComunidades . '</td>';
				echo '<tr><td>Total de Calles:</td><td colspan="7">' . $totalCalles . '</td>';
				echo '<tr><td>Total de Familias:</td><td colspan="7">' . $totalFamilias . '</td>';
				// Puedes agregar más totales según sea necesario
				echo '</tfoot>';

				echo '</table>';
			} else {
				echo '<p>No hay datos para mostrar para la cédula ' . $cedulaUsuario . '.</p>';
			}
		} else {
			echo '<p>No se encontró la cédula del usuario en la sesión.</p>';
		}
	}
	public function mostrarTablaComunidad()
	{
		// Obtener todos los datos de CLAPs
		$resultadoClaps = $this->model->obtenerDatos("clap");

		// Verificar si hay datos
		if (!empty($resultadoClaps)) {
			echo '<table class="table table-striped rounded">';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Código del CLAP</th>';
			echo '<th>Nombre del CLAP</th>';
			echo '<th>Cantidad de Comunidades</th>';
			echo '<th>Cantidad de Familias</th>';
			echo '<th>Número de Calles</th>';
			echo '<th>Cédula del Líder de CLAP</th>';
			echo '<th>Nombre del Líder de CLAP</th>';
			// Puedes agregar más columnas según sea necesario
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';

			// Iterar sobre los resultados de CLAPs
			foreach ($resultadoClaps as $filaClap) {
				echo '<tr>';
				echo '<td>' . ($filaClap["id_clap"] ?? 0) . '</td>';
				echo '<td>' . ($filaClap["nom_clap"] ?? 0) . '</td>';
				echo '<td>' . ($filaClap["cant_com"] ?? 0) . '</td>';
				echo '<td>' . ($filaClap["cant_fam"] ?? 0) . '</td>';
				echo '<td>' . ($filaClap["cant_call"] ?? 0) . '</td>';
				echo '<td>' . ($filaClap["clap_lid"] ?? 0) . '</td>';
				$idCLAP = $filaClap["clap_lid"];
				$resultadoLider = $this->model->obtenerDatos("usuarios");
				$resultadosFiltradosLider = array_filter($resultadoLider, function ($filaLider) use ($idCLAP) {
					return $filaLider["ced_usu"] == $idCLAP;
				});

				// Mostrar información del líder de CLAP
				if (!empty($resultadosFiltradosLider)) {
					foreach ($resultadosFiltradosLider as $liderCLAP) {
						echo '<td>' . ($liderCLAP["nombre"] ?? 'No registrado') . '</td>';
					}
				} else {
					echo '<td>No registrado</td>';
				}

				echo '</tr>';
			}

			echo '</tbody>';
			echo '</table>';
		} else {
			echo '<p>No hay datos de CLAPs registrados.</p>';
		}
	}
	public function mostrarTablaCalle()
	{
		// Obtener la cédula del usuario desde la sesión
		$cedulaUsuario = $_SESSION["ced_usu"] ?? null;

		if ($cedulaUsuario) {
			// Obtener los datos utilizando la función obtenerDatos
			$resultadoClaps = $this->model->obtenerDatos("comunidad");

			// Filtrar los resultados para mostrar solo los datos del CLAP correspondiente a la cédula del usuario
			$resultadosFiltradosClaps = array_filter($resultadoClaps, function ($fila) use ($cedulaUsuario) {
				return $fila["comu_lid"] == $cedulaUsuario;
			});

			// Verificar si hay datos filtrados
			if (!empty($resultadosFiltradosClaps)) {

				echo '<table class="table table-striped rounded">';
				echo '<thead>';
				echo '<tr>';
				echo '<th colspan="3">Código de la Comunidad</th>';
				echo '<th colspan="2">Nombre de la Comunidad</th>';
				// Agrega más columnas según sea necesario
				echo '</tr>';
				echo '</thead>';
				echo '<tbody>';

				$totalComunidades = 0;
				$totalCalles = 0;
				$totalFamilias = 0;

				// Iterar sobre los resultados filtrados de CLAPs
				foreach ($resultadosFiltradosClaps as $filaClap) {
					echo '<tr>';
					echo '<td colspan="3">' . ($filaClap["id_com"] ?? 0) . '</td>';
					echo '<td colspan="2">' . ($filaClap["nom_com"] ?? 0) . '</td>';
					echo '</tr>';
					echo '<thead>';
					echo '<tr>';
					echo '<th>Nombre de la calle</th>';
					echo '<th>Cantidad de Familias</th>';
					echo '<th>Cédula del Líder de Calle</th>';
					echo '<th>Nombre del Líder de Calle</th>';
					// Agrega más columnas según sea necesario
					echo '</tr>';
					echo '</thead>';

					// Obtener el ID del CLAP actual
					$idCLAP = $filaClap["id_com"];

					// Obtener las comunidades asociadas a este CLAP
					$resultadoComunidades = $this->model->obtenerDatos("calle");
					$resultadosFiltradosComunidades = array_filter($resultadoComunidades, function ($filaComunidad) use ($idCLAP) {
						return $filaComunidad["id_com"] == $idCLAP;
					});

					// Iterar sobre las comunidades y mostrar los datos
					foreach ($resultadosFiltradosComunidades as $filaComunidad) {
						echo '<tr>';
						echo '<td>' . ($filaComunidad["nom_call"] ?? 0) . '</td>';
						echo '<td>' . ($filaComunidad["cant_fam"] ?? 0) . '</td>';
						echo '<td>' . ($filaComunidad["calle_lid"] ?? 0) . '</td>';

						// Obtener la cédula del líder de la comunidad
						$ced_lid = $filaComunidad["calle_lid"];

						// Obtener información del líder de la comunidad
						$resultadoLideres = $this->model->obtenerDatos("usuarios");
						$resultadosFiltradosLideres = array_filter($resultadoLideres, function ($filaLideres) use ($ced_lid) {
							return $ced_lid == $filaLideres["ced_usu"];
						});

						// Mostrar información del líder de la comunidad o "No registrado" si no hay resultados
						if (!empty($resultadosFiltradosLideres)) {
							foreach ($resultadosFiltradosLideres as $liderComunidad) {
								echo '<td>' . ($liderComunidad["nombre"] ?? 0) . '</td>';
							}
						} else {
							echo '<td>No registrado</td>';
						}

						echo '</tr>';
					}



					// Sumar al total
					$totalComunidades += count($resultadosFiltradosComunidades);
					// $totalCalles += ($filaClap["cant_call"] ?? 0); // Puedes descomentar si necesitas la cantidad de calles
					$totalFamilias += ($filaClap["cant_fam"] ?? 0);
				}

				echo '</tbody>';

				// Mostrar totales al final de la tabla
				echo '<tfoot>';
				echo '<tr><td>Total de Comunidades:</td><td colspan="7">' . $totalComunidades . '</td>';
				echo '<tr><td>Total de Calles:</td><td colspan="7">' . $totalCalles . '</td>';
				echo '<tr><td>Total de Familias:</td><td colspan="7">' . $totalFamilias . '</td>';
				// Puedes agregar más totales según sea necesario
				echo '</tfoot>';

				echo '</table>';
			} else {
				echo '<p>No hay datos para mostrar para la cédula ' . $cedulaUsuario . '.</p>';
			}
		} else {
			echo '<p>No se encontró la cédula del usuario en la sesión.</p>';
		}
	}

	public function mostrarTablaNucleo()
	{
		// Obtener la cédula del usuario desde la sesión
		$cedulaUsuario = $_SESSION["ced_usu"] ?? null;

		if ($cedulaUsuario) {
			// Obtener los datos utilizando la función obtenerDatos
			$resultadocalle = $this->model->obtenerDatos("calle");
			$resultadocomunidad = $this->model->obtenerDatos("comunidad");
			$resultadoFamilia = $this->model->obtenerDatos("familia");
			$resultadoNucleo = $this->model->obtenerDatos("personas");

			// Filtrar los resultados para mostrar solo los datos del CLAP correspondiente a la cédula del usuario
			$resultadosFiltradoscalle = array_filter($resultadocalle, function ($fila) use ($cedulaUsuario) {
				return $fila["calle_lid"] == $cedulaUsuario;
			});

			// Verificar si hay datos filtrados
			if (!empty($resultadosFiltradoscalle)) {

				echo '<table class="table table-striped rounded">';
				echo '<thead>';
				echo '<tr>';
				echo '<th colspan="3">Nombre de la Calle</th>';
				echo '<th colspan="2">Nombre de la Comunidad</th>';
				// Agrega más columnas según sea necesario
				echo '</tr>';
				echo '</thead>';
				echo '<tbody>';

				$totalComunidades = 0;
				$totalCalles = 0;
				$totalFamilias = 0;

				// Iterar sobre los resultados filtrados de CLAPs
				foreach ($resultadosFiltradoscalle as $filaCalle) {
					echo '<tr>';
					echo '<td colspan="3">' . ($filaCalle["nom_call"] ?? 0) . '</td>';
					$direccion = $filaCalle["nom_call"];
					$idComunidad = $filaCalle["id_com"];
					$resultadosFiltradoscomunidad = array_filter($resultadocomunidad, function ($fila) use ($idComunidad) {
						return $fila["id_com"] == $idComunidad;
					});
					foreach ($resultadosFiltradoscomunidad as $filaComu) {
						// Filtrar los resultados para mostrar solo los datos del CLAP correspondiente a la cédula del usuario
						$direccion = $filaComu["nom_com"] . ", " . $direccion;
					echo '<td colspan="2">' . ($filaComu["nom_com"] ?? 0) . '</td>';
					}
					echo '</tr>';
					echo '<thead>';
					echo '<tr>';
					echo '<th>Nombre del Jefe de Familia</th>';
					echo '<th>Cedula del Jefe de Familia</th>';
					echo '<th>Telefono</th>';
					echo '<th>Direccion</th>';
					echo '</tr>';
					echo '</thead>';

					// Obtener el ID del CLAP actual
					$idcalle = $filaCalle["id_call"];

					// Obtener las comunidades asociadas a este CLAP
					$resultadosFiltradosFamilia = array_filter($resultadoFamilia, function ($filaComunidad) use ($idcalle) {
						return $filaComunidad["id-call"] == $idcalle;
					});
					// Iterar sobre las comunidades y mostrar los datos
					foreach ($resultadosFiltradosFamilia as $filaFamilia) {
						$Id_familia = $filaFamilia["id_fam"];
						echo '<tr>';
						$resultadosFiltradosNucleo = array_filter($resultadoNucleo, function ($filaLideres) use ($Id_familia) {
							return $Id_familia == $filaLideres["id_fam"];
						});
						$direccion = $direccion . ", Casa # " .  $filaFamilia["num_cas"];
						// Mostrar información del líder de la comunidad o "No registrado" si no hay resultados
						if (!empty($resultadosFiltradosNucleo)) {
							foreach ($resultadosFiltradosNucleo as $liderComunidad) {
								if($liderComunidad["ced_per"] == $Id_familia){
								echo '<td>' . ($liderComunidad["nom_per"] ?? "no") . '</td>';
								echo '<td>' . ($liderComunidad["ced_per"] ?? "no") . '</td>';
								echo '<td>' . ($liderComunidad["tlf_per"] ?? "no") . '</td>';
								}
							}
							echo '<td>' . ($direccion ?? "no") . '</td>';
							echo '<thead>';
							echo '<tr>';
							echo '<th>Nombre</th>';
							echo '<th>Cedula del Jefe de Familia</th>';
							echo '<th>Telefono</th>';
							echo '<th>Direccion</th>';
							echo '</tr>';
							echo '</thead>';
						} else {
							echo '<td>No registrado</td>';
						}

						echo '</tr>';
					}



					// Sumar al total
					// $totalCalles += ($filaClap["cant_call"] ?? 0); // Puedes descomentar si necesitas la cantidad de calles
					$totalFamilias += ($filaClap["cant_fam"] ?? 0);
				}

				echo '</tbody>';

				// Mostrar totales al final de la tabla
				echo '<tfoot>';
				echo '<tr><td>Total de Comunidades:</td><td colspan="7">' . $totalComunidades . '</td>';
				echo '<tr><td>Total de Calles:</td><td colspan="7">' . $totalCalles . '</td>';
				echo '<tr><td>Total de Familias:</td><td colspan="7">' . $totalFamilias . '</td>';
				// Puedes agregar más totales según sea necesario
				echo '</tfoot>';

				echo '</table>';
			} else {
				echo '<p>No hay datos para mostrar para la cédula ' . $cedulaUsuario . '.</p>';
			}
		} else {
			echo '<p>No se encontró la cédula del usuario en la sesión.</p>';
		}
	}






	public function enviarNivUsuario()
	{
		if (isset($_SESSION['tip_usu'])) {
			// Accede al valor de la variable de sesión
			$tipoUsu = $_SESSION['tip_usu'];
			echo $tipoUsu;
		} else {
			// La clave 'mi_variable' no está definida en el array de sesión
			echo 'Variable no definida';
		}
	}
}
