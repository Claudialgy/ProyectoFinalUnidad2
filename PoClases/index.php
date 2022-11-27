<?php include '../TrabajoIbero/template/header.php' ?>
<?php 
	require_once "conexion.php";
	require_once "metodosCrud.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
<div class="col-md-6">
<div class="card">

<form class="p-4" method="POST" action="procesos/insertar.php">

	
<div class="mb-3">
	<input type="text" name="txtdocumento">
	<label>Documento</label>
</div>

<div class="mb-3">
	<input type="text" name="txtnombre">
	
	<label>Nombre</label>
</div>
<div class="mb-3">
	<input type="text" name="txtapellido">
	<label>apellido</label>
</div>
<div class="mb-3">
	<input type="text" name="txtemail">
	<label>email</label>
</div>
<div class="mb-3">
	<input type="text" name="txtcelular">
	<label>Celular</label>
</div>
	<p></p>
	<button>Agregar</button>

</form>

<br><br>
</div>
</div>
<div class="card">
<table style="border-collapse: collapse;" border="1">
	<tr>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Actualizar</td>
		<td>Eliminar</td>
	</tr>
<?php 
	$obj= new metodos();
	$sql="SELECT id,Nombre,Apellido from usuario";
	$datos=$obj->mostrarDatos($sql);

	foreach ($datos as $key ) {
 ?>
	<tr>
		<td><?php echo $key['Nombre']; ?></td>
		<td><?php echo $key['Apellido']; ?></td>
		<td>
			<a href="editar.php?id=<?php echo $key['id'] ?>">
			Editar
			</a>
		</td>
		<td>
			<a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">
			eliminar
			</a>
		</td>
	</tr>
<?php 
	}
 ?>
</table>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>