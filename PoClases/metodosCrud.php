<?php 

	class metodos{
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into usuario (documento,nombre,apellido,email,celular)
							values ('$datos[0]','$datos[1]','$datos[1]','$datos[3]','$datos[4]')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizaDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE usuario set nombre='$datos[0]',
										apellido='$datos[1]'
								where id='$datos[2]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function eliminarDatosNombre($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from usuario where id='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>