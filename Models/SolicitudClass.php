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

		public function Listado1(){

		}

	}

?>