<?php

    include_once("../config/conexion.php");

    $id_paciente = $_POST['id_paciente'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $os = $_POST['os'];
    $tel = $_POST['tel'];
    $localidad = $_POST['localidad'];
    $talla= $_POST['talla'];
    
    $sql = "UPDATE pacientes SET nombre='$nombre', apellido='$apellido', dni='$dni', 
    os='$os', tel='$tel', localidad='$localidad', talla='$talla' WHERE id_paciente='$id_paciente'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('location: ../index.php');
    }
?>