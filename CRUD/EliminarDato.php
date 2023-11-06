<?php
    include_once('..conexion.php');

    $id =$_REQUEST['id'];
    $sql = "DELETE FROM paciente WHERE id ='$id'";
    $query = mysqli_query($conextion, $sql);

    if ($query) {
        header('location: ../index.php');
    }
?>
