<?php 
error_reporting(0);
session_start();
include ("../backend/conect_data_base.php"); //Conectos la base de datos

$user = $_SESSION['email']; //Esto es que los datos de cuando ingreso queden guardos

// Funcion de botones

$sqlPaseador = "SELECT * FROM paseador WHERE email='".$user."'";
$resultado=$conexion->query($sqlPaseador); 

while($data=$resultado->fetch_assoc()){
  $usernamePaseador = strtoupper($data['username']);
} 
?>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="./iniciopaseadores.php"><img src="./imgs/Paseo-pet.png" width="50px" alt=""></a>
      </div>

      <div class="container-fluid title">
        <h2>PASEO PET - <?php echo $usernamePaseador?></h2>
      </div>

      
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Menu Pet 
        </a>
      
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="Register_detalle_paseador.php">Mi Perfil</a></li>
          <li><a class="dropdown-item" href="./misturnospaseadores.php">Turnos</a></li>
          <li><a class="dropdown-item" href="./comentario_paseadores.php">Mis reseñas</a></li>
          <li><a class="dropdown-item" href="./index.php">Cerrar sesion</a></li>
        </ul>
      </div>
      
      </div>
      
  </nav>