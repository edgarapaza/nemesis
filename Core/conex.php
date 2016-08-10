<?php 
class Conectarse{
	public static function Conecta(){
		$mysql = new mysqli("192.168.0.100","web","web123$","ar_historico");
		if($mysql->connect_errno)
		return $mysql;
		echo $mysql->host_info;
	}
}

$con = new Conectarse();
$con->Conecta();
?>

