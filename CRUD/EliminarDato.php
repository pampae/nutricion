<?php
    include_once('../config/conexion.php');

    $id_paciente =$_REQUEST['id_paciente'];
    $sql = "DELETE FROM pacientes WHERE id_paciente ='$id_paciente'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('location: ../index.php');
    }
?>
