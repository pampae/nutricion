<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NUTRICION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
  </head>
  <body>
    <h1 CLASS="bg-warning p-2 text-white text-center">NUTRICION</h1>
    <br>
    <div class="container">
    <a href="forms/agregar_paciente.php" class="btn btn-danger"> Agregar paciente</a>
    
    </div>
    <br>
    <div class="container bg-light p-3 border border-dark rounded">
        <h1>Lista de pacientes</h1>
        <table class="table">
            <thead class="table-dark">
                
    <tr>
      <th scope="col">id_pacientes</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">dni</th>
      <th scope="col">os</th>
      <th scope="col">tel</th>
      <th scope="col">localidad</th>
      <th scope="col">talla</th>
    </tr>
  </thead>
  <tbody>
  <?php
                    include ("config/conexion.php");

                    $sql = "SELECT * FROM pacientes";
                    $query = mysqli_query($conexion, $sql);
                    
                    while ($fila = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                             <th scope="row"><?php echo $fila['id_paciente']?></th>
                             <th scope="row"><?php echo $fila['nombre']?></th>
                             <th scope="row"><?php echo $fila['apellido']?></th>
                             <th scope="row"><?php echo $fila['dni']?></th>
                             <th scope="row"><?php echo $fila['os']?></th>
                             <th scope="row"><?php echo $fila['tel']?></th>
                             <th scope="row"><?php echo $fila['localidad']?></th>
                             <th scope="row"><?php echo $fila['talla']?></th>
                             <th scope="row">
                                <a href="forms/EditarDato.php?id=<?php echo $fila['id']?>" class="btn btn-warning">editar</a>
                                <a href="CRUD/EliminarDato.php?id=<?php echo $fila['id']?>"class="btn btn-danger">eliminar</a>
                             </th>

                        </tr>

                    <?php

                    }
                    ?>
    
    
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>