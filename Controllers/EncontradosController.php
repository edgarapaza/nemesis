<?php

	class Encontrados
	{
		private $num_solicitud;
		private $num_registro;
		private $num_expediente;
		private $num_caja;
		private $num_tomo;
		private $num_libro;
		private $num_legajo;
		private $num_protocolo;
		private $num_escritura;
		private $ini_folio;
		private $fin_folio;
		private $nom_buscador;
		private $observaciones;
		private $fecha;

		function __construct()
		{

			$this->num_solicitud = $_REQUEST['num_solicitud'];
			$this->num_registro = $_REQUEST['num_registro'];
			$this->num_expediente = $_REQUEST['num_expediente'];
			$this->num_caja = $_REQUEST['num_caja'];
			$this->num_tomo = $_REQUEST['num_tomo'];
			$this->num_libro = $_REQUEST['num_libro'];
			$this->num_legajo = $_REQUEST['num_legajo'];
			$this->num_protocolo = $_REQUEST['num_protocolo'];
			$this->num_escritura = $_REQUEST['num_escritura'];
			$this->ini_folio = $_REQUEST['ini_folio'];
			$this->fin_folio = $_REQUEST['fin_folio'];
			$this->nom_buscador = $_REQUEST['nom_buscador'];
			$this->observaciones = $_REQUEST['observaciones'];
			$this->fecha = $_REQUEST['fecha'];

			$this::SolicitudesDia($fecha);
			$this::Validar($this->num_solicitud);
		}

		public function SolicitudesDia($fecha){

			require_once "../Models/SolicitudClass.php";

			$solicitud = new Solicitud();
			$datos = $solicitud->Listado1($fecha);

			return $datos;
		}

		public function Validar($numSolicitud){

			require_once "../Models/SolicitudClass.php";
			$solicitud = new Solicitud();
			$num = $solicitud->Duplicados($numSolicitud);
			echo "Numero de Registros:".$num;

			if($num == 0)
			{
				$this::AddEncontrado();
			}else{
				header("location: ../Views/newsolicitud.php");
			}
		}

		public function AddEncontrado(){
			require_once "../Models/SolicitudClass.php";
			$solicitud = new Solicitud();
			$solicitud->AddEncontrados($this->num_solicitud,$this->num_registro,$this->num_expediente,$this->num_caja,$this->num_tomo,$this->num_libro,$this->num_legajo,$this->num_protocolo,$this->num_escritura,$this->ini_folio,$this->fin_folio,$this->nom_buscador,$this->observaciones);
			#header("location: ../Views/newsolicitud.php");
		}

	}


	if(isset($_REQUEST['btnGuardar'])){
		$encontrado = new Encontrados();
	}
 ?>