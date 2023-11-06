<?PHP
    include_once("../config/conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $os = $_POST['os'];
    $tel = $_POST['tel'];
    $localidad = $_POST['localidad'];
    $talla = $_POST['talla'];

    $sql ="INSERT INTO pacientes(nombre,apellido,dni,os,tel,localidad,talla)VALUES('$nombre', '$apellido', '$dni', '$os', '$tel', '$localidad', '$talla')";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("location:../index.php");

    }