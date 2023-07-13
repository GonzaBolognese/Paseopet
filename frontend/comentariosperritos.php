<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="./iniciopaseadores.php"><img src="./imgs/Paseo-pet.png" width="50px" alt=""></a>
        </div>
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Menu Pet 
          </a>
        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./iniciopaseadores.php">Inicio</a></li>
            <li><a class="dropdown-item" href="./misturnospaseadores.php">Turnos</a></li>
            <li><a class="dropdown-item" href="./index.php">Cerrar sesion</a></li>
          </ul>
        </div>
        
        </div>
        
    </nav>
  
  <br>
      <div class="container text-center">
          <div class="row g-2"> 
              <div class="col-12">
                  <div class="p-3 border bg-light">
                      <p> Mis reseñas</p>
                  </div>
              </div>
          </div>  
      </div>
      <div class="container text-center">
          <div class="row g-2">
            <div class="col-6">
              <div class="p-3 border bg-light">
                <h2> <i class="fa-regular fa-user"></i> Reseñas pendientes </h2>
                <p>  Paseo con Julia Roble <button type="button" class="btn btn-info"> Reseñar </button> 
                <p>Paseo con Marcos Ritote <button type="button" class="btn btn-info"> Reseñar </button> 
              </div>
            </div>
            <div class="col-6">
              <div class="p-3 border bg-light">
                <h2> <i class="fa-regular fa-user"></i>  Registro de reseñas </h2>
                <p>Paseo con Pamela Holsihh</p>    <p> El paseo del martes salió muy bien, mi mascota volvió feliz</p>  
              </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            <div class="col">
              <div class="float-end"> <a href="./iniciopaseadores.php" id="log" class="btn btn-lg float-end">Atras</a>
              </div>
             
  </body>
  </html>