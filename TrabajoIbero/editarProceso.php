<?php
    print_r($_POST);
   

    include 'model/conexion.php';
    $Id = $_POST['txtId'];
    $documento = $_POST['txtDocumento'];
    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    $email = $_POST['txtemail'];
    $celular = $_POST['txtCelular'];
    

    $sentencia = $bd->prepare("UPDATE usuario SET Documento = ?,  Nombre = ?, Apellido = ?, email = ?, Celular=?  where Id = $Id;");
    $resultado = $sentencia->execute([ $documento,$nombre, $apellido , $email,$celular]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>