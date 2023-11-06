<?php

    $include_once("../config/conexion.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $os = $_POST['os'];
    $tel = $_POST['tel'];
    $localidad = $_POST['localidad'];
    $talla= $_POST['talla'];
    
    $sql = "UPDATE paciente SET nombre='$nombre, apellido='$apellido', dni='$dni', 
    os='$os', tel='$tel', localidad='$localidad', talla='$talla' WHERE id='$id'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('location: ../index.php');
    }
?>