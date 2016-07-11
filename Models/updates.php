<?php 

class Updates{

	private $con;

	function __construct(){
		include "../core/conex.php";
		$od = new Conectarse();
		$this->con=$od->Conecta();
		return $this->con;
	}

	public function actualizaPagoBusqueda($id){
		$consulta="UPDATE solicitudestesting SET pagoSolicitud=1 WHERE id='$id'";
		$query=$this->con->query($consulta);
	}

	public function intermedioStatus($id){
		$verificaPago="SELECT pagoSolicitud FROM solicitudestesting WHERE id='$id'";
		$query1=$this->con->query($verificaPago);
		$res=$query1->fetch_array();
		if($res[0]==1){
			echo "SE REALIZO EL PAGO";
		}
		else {echo "NO SE REALIZO EL PAGO";}
		
	}

}

$q=new Updates();
$q->intermedioStatus(1);
?>