<?php


class clapmodel
{
	private $servidor = "localhost";
	private $usuario = "root";
	private $clave = "";
	private $bd = "clap";
	private $conexion;

	public function __CONSTRUCT()
	{
		$this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->bd);
		$acentos = $this->conexion->query("set names 'utf8'");

		if ($this->conexion->connect_errno) {
			die("no conecto");
		}
	}
	public function obtenerInfoUsuario($usuario)
	{
		// Consulta SQL para obtener el tipo de usuario y el id_clap
		$query = "SELECT tip_usu, id_clap FROM usuarios WHERE ced_usu = ?";

		// Preparar la consulta utilizando una sentencia preparada
		$stmt = $this->conexion->prepare($query);

		// Verificar si la preparación de la consulta fue exitosa
		if ($stmt) {
			// Vincular el parámetro
			$stmt->bind_param("s", $usuario);

			// Ejecutar la consulta
			$stmt->execute();

			// Obtener los resultados
			$resultado = $stmt->get_result();

			// Verificar si la ejecución de la consulta fue exitosa
			if ($resultado) {
				// Obtener el tipo de usuario y el id_clap
				$fila = $resultado->fetch_assoc();

				// Crear un arreglo asociativo para devolver ambas informaciones
				$infoUsuario = array(
					'tip_usu' => $fila['tip_usu'],
					'id_clap' => $fila['id_clap']
				);

				return $infoUsuario;
			} else {
				// Manejar el error según tus necesidades
				// En este ejemplo, simplemente devolvemos null para indicar un fallo.
				return null;
			}
		} else {
			// Si hay un error en la preparación de la consulta, manejarlo según tus necesidades
			// En este ejemplo, simplemente devolvemos null para indicar un fallo.
			return null;
		}
	}

	public function insertar_datos($nombreTabla, $datos)
	{

		if ($this->conexion->query("DESCRIBE $nombreTabla")) {
			if (is_array($datos) && count($datos) > 0) {

				$columnas = implode(', ', array_keys($datos));
				$placeholders = rtrim(str_repeat('?, ', count($datos)), ', ');

				$query = "INSERT INTO $nombreTabla ($columnas) VALUES ($placeholders)";

				$stmt = $this->conexion->prepare($query);

				if (!$stmt) {
					die("Error en la preparación de la consulta: " . $this->conexion->error);
				}


				$valores = array_values($datos);


				$tipos = str_repeat('s', count($valores));
				$stmt->bind_param($tipos, ...$valores);


				if ($stmt->execute()) {
					return true;
				} else {
					return false;
				}
			}
		}
		return false;
	}
	public function actualizar_datos($nombreTabla, $datos, $columnaCondicion, $valorCondicion)
	{
		if ($this->conexion->query("DESCRIBE $nombreTabla")) {
			if (is_array($datos) && count($datos) > 0) {
				$setClause = '';
				foreach ($datos as $columna => $valor) {
					$setClause .= "`$columna` = ?, ";
				}
				$setClause = rtrim($setClause, ', ');

				// Modificar la consulta para usar un marcador de posición para la condición
				$query = "UPDATE $nombreTabla SET $setClause WHERE `$columnaCondicion` = ?";

				$stmt = $this->conexion->prepare($query);

				if (!$stmt) {
					die("Error en la preparación de la consulta: " . $this->conexion->error);
				}

				$valores = array_values($datos);
				$valores[] = $valorCondicion; // Agregar el valor de la condición al final del array
				$tipos = str_repeat('s', count($valores));
				$stmt->bind_param($tipos, ...$valores);

				if ($stmt->execute()) {
					return true;
				} else {
					return false;
				}
			}
		}
		return false;
	}
	// Función para realizar consultas
	public function consulta($nombreTabla, $identificador = null)
	{
		// Construir la consulta base
		$query = "SELECT * FROM $nombreTabla";

		// Si se proporciona un identificador, agregar la condición WHERE
		if ($identificador !== null) {
			$query .= " WHERE id = $identificador";
		}

		// Ejecutar la consulta y obtener los resultados
		$resultado = $this->conexion->query($query);

		// Manejo de errores (debes mejorar esto según tus necesidades)
		if (!$resultado) {
			die("Error en la consulta: " . $this->conexion->error);
		}

		// Obtener los datos como un array asociativo
		$datos = array();
		while ($fila = $resultado->fetch_assoc()) {
			$datos[] = $fila;
		}

		// Devolver los datos
		return $datos;
	}
	public function validar_usu($usuario, $contraseña)
	{
		// Obtén la información del usuario desde la base de datos
		$query = "SELECT ced_usu, clave FROM usuarios WHERE ced_usu = ?";
		$stmt = $this->conexion->prepare($query);

		if (!$stmt) {
			die("Error en la preparación de la consulta: " . $this->conexion->error);
		}

		$stmt->bind_param("s", $usuario);
		$stmt->execute();
		$resultado = $stmt->get_result();

		// Verifica si se encontró un usuario con esa cédula
		if ($resultado->num_rows === 1) {
			// Obtén la fila del resultado
			$fila = $resultado->fetch_assoc();

			// Verifica si la contraseña proporcionada coincide con la almacenada en la base de datos
			if (password_verify($contraseña, $fila['clave'])) {
				return true; // Contraseña válida
			} else {
				return false; // Contraseña no válida
			}
		} else {
			return false; // No se encontró un usuario con esa cédula
		}
	}

	public function verificar_usuario($usuario)
	{

		$query = "SELECT * FROM usuarios WHERE ced_usu = ?";


		$stmt = $this->conexion->prepare($query);

		if (!$stmt) {
			die("Error en la preparación de la consulta: " . $this->conexion->error);
		}


		$stmt->bind_param("s", $usuario);


		$stmt->execute();


		$resultado = $stmt->get_result();


		if ($resultado->num_rows === 1) {
			return true;
		} else {
			return false;
		}
	}
	public function obtenerDatosPorCedula($cedula)
	{
		// Corregir el uso de signos de interrogación en lugar de dos puntos
		$sql = "SELECT * FROM usuarios WHERE ced_usu = ?";
		$resultado = $this->conexion->prepare($sql);

		// Vincular la cédula al marcador de posición
		$resultado->bind_param("s", $cedula);

		$resultado->execute();

		// Obtener los resultados como un array asociativo
		return $resultado->get_result()->fetch_assoc();
	}
	public function obtenerCLAPs()
	{
		// Consulta SQL para obtener todos los datos de la tabla "claps"
		$sql = "SELECT * FROM clap";

		// Ejecutar la consulta
		$resultado = $this->conexion->query($sql);

		// Verificar si la consulta fue exitosa
		if ($resultado) {
			// Inicializar un array para almacenar los datos de los CLAP
			$claps = array();

			// Recorrer los resultados y agregar cada fila al array
			while ($fila = $resultado->fetch_assoc()) {
				$claps[] = $fila;
			}

			// Liberar el resultado
			$resultado->free();

			// Devolver el array de CLAPs
			return $claps;
		} else {
			// Si la consulta no fue exitosa, devolver un mensaje de error
			return array('error' => 'Error al obtener los datos de los CLAP.');
		}
	}
	public function obtener_cant_com($id_clap)
	{
		$select_query = "SELECT cant_com FROM clap WHERE id_clap = ?";
		$stmt = $this->conexion->prepare($select_query);

		if (!$stmt) {
			die("Error en la preparación de la consulta: " . $this->conexion->error);
		}

		// Vincular el parámetro
		$stmt->bind_param("s", $id_clap);

		// Ejecutar la consulta
		$stmt->execute();

		// Obtener los resultados como un array asociativo
		$resultado = $stmt->get_result();

		// Verificar si la consulta fue exitosa
		if ($resultado) {
			// Obtener el valor de cant_com
			$row = $resultado->fetch_assoc();
			return $row['cant_com'];
		} else {
			return false; // Error al obtener el valor de cant_com
		}
	}
	public function obtenerDatos($tabla)
	{
		// Preparar la consulta utilizando una sentencia preparada
		$stmt = $this->conexion->prepare("SELECT * FROM $tabla");

		// Verificar si la preparación de la consulta fue exitosa
		if ($stmt) {
			// Ejecutar la consulta
			$stmt->execute();

			// Obtener los resultados
			$resultado = $stmt->get_result();

			// Verificar si la ejecución de la consulta fue exitosa
			if ($resultado) {
				return $resultado->fetch_all(MYSQLI_ASSOC);
			} else {
				// Manejar el error según tus necesidades
				// Puedes loguear el error, lanzar una excepción, etc.
				// En este ejemplo, simplemente devolvemos un array vacío para indicar un fallo.
				return [];
			}
		} else {
			// Si hay un error en la preparación de la consulta, manejarlo según tus necesidades
			// En este ejemplo, simplemente devolvemos un array vacío para indicar un fallo.
			return [];
		}
	}
	public function validarDato($tabla, $columna, $valor, $columnaValidar, $valorValidar)
	{
		// Preparar la consulta utilizando una sentencia preparada
		$stmt = $this->conexion->prepare("SELECT $columnaValidar FROM $tabla WHERE $columna = ?");

		// Verificar si la preparación de la consulta fue exitosa
		if ($stmt) {
			// Vincular el valor del identificador
			$stmt->bind_param("s", $valor);

			// Ejecutar la consulta
			$stmt->execute();

			// Obtener el resultado
			$resultado = $stmt->get_result();

			// Verificar si la ejecución de la consulta fue exitosa
			if ($resultado) {
				// Obtener el valor de la columna a validar
				$fila = $resultado->fetch_assoc();
				$valorEnBaseDeDatos = $fila[$columnaValidar] ?? null;

				// Comparar el valor con el proporcionado y devolver true o false
				return $valorEnBaseDeDatos === $valorValidar;
			}
		}

		// Si hay algún error, devolver false
		return false;
	}
}
