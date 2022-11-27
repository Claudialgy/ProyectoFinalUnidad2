<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $codigo = $_GET['id'];
    $codigo = (int)$codigo;
    $sentencia = $bd->prepare("select * from usuario where Id = ?;");
    $sentencia->execute( [$codigo]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                <div class="mb-3">
                        <label class="form-label">Id: </label>
                        <input type="number" class="form-control" name="txtId"  required 
                        value="<?php echo $persona->Id; ?>">
                    </div>

                <div class="mb-3">
                        <label class="form-label">Documento: </label>
                        <input type="number" class="form-control" name="txtDocumento" required 
                        value="<?php echo $persona->Documento; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $persona->Nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido: </label>
                        <input type="text" class="form-control" name="txtApellido" autofocus required
                        value="<?php echo $persona->Apellido; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="text" class="form-control" name="txtemail" autofocus required
                        value="<?php echo $persona->email; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Celular: </label>
                        <input type="text" class="form-control" name="txtCelular" required 
                        value="<?php echo $persona->Celular; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $persona->Id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>