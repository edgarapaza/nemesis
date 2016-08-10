<?php

	class Solicitud
	{

		private $mysqli;

		function __construct()
		{
			require_once "../Core/Conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		public function Listado1($fecha){
			$sql = "SELECT codSol, codUsu, codTipSol, idSol FROM solicitudes WHERE fecCreacion LIKE '$fecha%'";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		public function AddEncontrados($num_solicitud,$num_registro,$num_expediente,$num_caja,$num_tomo,$num_libro,$num_legajo,$num_protocolo,$num_escritura,$ini_folio,$fin_folio,$nom_buscador,$observaciones)
		{
			$sql = "INSERT INTO encontrados (id_encontrados,num_solicitud,num_registro,num_expediente,num_caja,num_tomo,num_libro,num_legajo,num_protocolo,num_escritura,ini_folio,fin_folio,nom_buscador,observaciones) VALUES (NULL,'$num_solicitud','$num_registro','$num_expediente','$num_caja','$num_tomo','$num_libro','$num_legajo','$num_protocolo','$num_escritura','$ini_folio','$fin_folio','$nom_buscador','$observaciones')";
			$this->mysqli->query($sql);
		}
	}

	$fecha = '2016-02-11';
	echo $fecha."<br>";
	$solicitud = new Solicitud();
	$datos = $solicitud->Listado1($fecha);

	while ($fila = $datos->fetch_assoc())
	{
		echo $fila['codSol']." ";
		echo $fila['codUsu']." ";
		echo $fila['codTipSol']." ";
		echo $fila['idSol']." ";
		echo "<br>";
	}
?>