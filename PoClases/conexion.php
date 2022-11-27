<?php 

	class conectar{
		
		public $servidor="localhost";
		public $usuario="root";
		public $bd="ibero";
		private $password="";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
		//$conexion = mysqli_connect($servidor,$usuario,$bd,$password);
									 



		
			return $conexion;
		}

	}




	
 ?>