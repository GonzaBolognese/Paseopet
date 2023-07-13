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
      <a class="navbar-brand" href="#"><img src="./imgs/Paseo-pet.png" width="50px" alt=""></a>
      </div>
      <div>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Menú
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./iniciopaseadores.php">Inicio</a></li>
                <li><a class="dropdown-item" href="./misturnospaseadores.php">Mis turnos</a></li>
                <li><a class="dropdown-item" href="./comentariosperritos.php">Mis reseñas</a></li>
                <li><a class="dropdown-item" href="./index.php">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      </div>
      
  </nav>
    
     

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Genial, ya casi tienes el turno de paseo de Tony! </h4>
    <p>En breve el paseador seleccionado confirmara tu solicitud de paseo.</p>
    <hr>
  </div>
  <div class="text-center">
    <div class="float-end"> <a href="./iniciomascotas.php" id="log" class="btn btn-lg float-end">Atras</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>