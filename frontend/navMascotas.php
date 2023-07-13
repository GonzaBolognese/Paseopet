<?php 

error_reporting(0);
session_start();
include ("../backend/conect_data_base.php"); //Conectos la base de datos

$user = $_SESSION['email']; //Esto es que los datos de cuando ingreso queden guardos

// Funcion de botones

$sqlMascota = "SELECT * FROM mascota WHERE email='".$user."'";
$resultado=$conexion->query($sqlMascota); 

while($data=$resultado->fetch_assoc()){
  $usernameMascota = strtoupper($data['username']);
} 

?>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../frontend/iniciomascotas.php"><img src="../frontend/imgs/Paseo-pet.png" width="50px" alt=""></a>
    </div>

      <div class="container-fluid title">
        <h2 >PASEO PET - <?php echo $usernameMascota?></h2>
      </div>

      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Menu Pet 
        </a>
      
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="../frontend/Register_detalle_perrito.php">Mi Perfil</a></li>
          <li><a class="dropdown-item" href="../frontend/pedirturno.php">Pedir turno</a></li>
          <li><a class="dropdown-item" href="../frontend/misturnosmascotas.php">Mis turnos</a></li>
          <!-- <li><a class="dropdown-item" href="../frontend/comentariosperritos.php">Mis reseñas</a></li> -->
          <li><a class="dropdown-item" href="../frontend/index.php">Cerrar sesion</a></li>
        </ul>
      </div>
      
      </div>
      
  </nav>
