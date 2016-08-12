<?php

	function SolicitudesDia($fecha){

		require_once "../Models/SolicitudClass.php";

		$solicitud = new Solicitud();
		$datos = $solicitud->Listado1($fecha);

		return $datos;
	}


	$num_solicitud = $_REQUEST['num_solicitud'];
	$num_registro = $_REQUEST['num_registro'];
	$num_expediente = $_REQUEST['num_expediente'];
	$num_caja = $_REQUEST['num_caja'];
	$num_tomo = $_REQUEST['num_tomo'];
	$num_libro = $_REQUEST['num_libro'];
	$num_legajo = $_REQUEST['num_legajo'];
	$num_protocolo = $_REQUEST['num_protocolo'];
	$num_escritura = $_REQUEST['num_escritura'];
	$ini_folio = $_REQUEST['ini_folio'];
	$fin_folio = $_REQUEST['fin_folio'];
	$nom_buscador = $_REQUEST['nom_buscador'];
	$observaciones = $_REQUEST['observaciones'];

	echo $num_solicitud;
	echo $num_registro;
	echo $num_expediente;
	echo $num_caja;
	echo $num_tomo;
	echo $num_libro;
	echo $num_legajo;
	echo $num_protocolo;
	echo $num_escritura;
	echo $ini_folio;
	echo $fin_folio;
	echo $nom_buscador;
	echo $observaciones;

	//$solicitud->AddEncontrados($num_solicitud,$num_registro,$num_expediente,$num_caja,$num_tomo,$num_libro,$num_legajo,$num_protocolo,$num_escritura,$ini_folio,$fin_folio,$nom_buscador,$observaciones)
 ?>