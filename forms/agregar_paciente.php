<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>agregar paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class= "bg-warning p-2 text-white text-center">agregar paciente</h1>
    <br>
 <div class="container">
 <form action="../CRUD/insertar.php" method="POST">
   <div class="mb-3">
       <input type="text" class="form-control" placeholder="nombre"name="nombre">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control"placeholder="apellido"name="apellido">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control"placeholder="dni"name="dni">
    </div>
    <div class="mb-3">
       <input type="text" class="form-control"placeholder="os"name="os">
    </div>  
    <div class="mb-3">
    <input type="text" class="form-control"placeholder="tel"name="tel">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control"placeholder="localidad"name="localidad">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control"placeholder="talla"name="talla">
    </div>
    <div class="container text-center"> 
      <button type="submit" class="btn btn-primary">agregar paciente</button>
      <a href="../index.php" class="btn btn-dark">regresar</a>
    </div>
</form>
 </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>