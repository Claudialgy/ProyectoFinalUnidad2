<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtDocumento"])|| empty($_POST["txtNombre"]) || empty($_POST["txtApellido"])|| empty($_POST["txtemail"]) || empty($_POST["txtCelular"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $documento = $_POST["txtDocumento"];
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $email = $_POST["txtemail"];
    $celular = $_POST["txtCelular"];
    
    
    $sentencia = $bd->prepare("INSERT INTO usuario(Documento,nombre,Apellido,email,Celular) VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$documento,$nombre,$apellido,$email,$celular]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>