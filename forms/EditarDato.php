<?php
    include_once('../config/conexion.php');
    $id_paciente = $_REQUEST['id_paciente'];

    $sql = "SELECT * FROM pacientes WHERE id_paciente = '$id_paciente'";
    $query = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>editar paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="colorToggle.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <h1 class= "bg-warning p-2 text-white text-center">editar paciente</h1>
    <button class="light-mode-btn" aria-label="activar modo oscuro"><i class="fa-solid fa-moon"></i></button>
    <button class="dark-mode-btn" aria-label="activar modo claro"><i class="fa-solid fa-sun"></i></button>
    <br>
 <div class="container">
 <form action="../CRUD/Editar.php" method="POST">
    <input type="hidden" name="id_paciente" value="<?php echo $fila['id_paciente']?>">
   <div class="mb-3">
        <label class="form-label">nombre</label>
       <input type="text" class="form-control" placeholder="nombre"name="nombre" value="<?php echo $fila['nombre']?>">
    </div>
    <div class="mb-3">
         <label class="form-label">apellido</label>
        <input type="text" class="form-control"placeholder="apellido"name="apellido"value="<?php echo $fila['apellido']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">dni</label>
        <input type="text" class="form-control"placeholder="dni"name="dni"value="<?php echo $fila['dni']?>">
    </div>
    <div class="mb-3">
       <label class="form-label">os</label>
       <input type="text" class="form-control"placeholder="os"name="os"value="<?php echo $fila['os']?>">
    </div>  
    <div class="mb-3">
        <label class="form-label">tel</label>
        <input type="text" class="form-control"placeholder="tel"name="tel"value="<?php echo $fila['tel']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">locallidad</label>    
        <input type="text" class="form-control"placeholder="localidad"name="localidad"value="<?php echo $fila['localidad']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">talla</label>    
        <input type="text" class="form-control"placeholder="talla"name="talla"value="<?php echo $fila['talla']?>">
    </div>
    <div class="container text-center"> 
        <button type="submit" class="btn btn-primary">editar paciente</button>
        <a href="../index.php" class="btn btn-dark">regresar</a>
    </div>
</form>
 </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>