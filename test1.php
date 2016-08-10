<?php

	class Alumno
	{
		public function getPeso(){
			return $this->peso;
		}

		public function setPeso($peso){
			$this->peso = $peso;
		}

		public function Estudiar(){
			echo "Estoy estudiando";
		}

		public function Aprender(){
			echo "Estoy Aprendiendo";
		}

		public function Trabajar(){
			echo "Estoy trabajando";
		}
	}

	$alumno = new Alumno();


 ?>