<?php 
error_reporting(0);
session_start();
include ("../backend/conect_data_base.php"); //Conectos la base de datos

$user = $_SESSION['email']; //Esto es que los datos de cuando ingreso queden guardos

// Funcion de botones

$sqlPaseador = "SELECT * FROM paseador WHERE email='".$user."'";
$resultado=$conexion->query($sqlPaseador); 

while($data=$resultado->fetch_assoc()){
  $idPaseador = $data['id'];
  $namePaseador = $data['name'];
  $locationPaseador = $data['location'];
} 
$currentDate = strtotime(date("d-m-Y H:i:00",time()));
$paseos = array(
  'hourOnly' => 'Paseo de 1 hora individual',
  'hourGroup' => 'Paseo de 1 hora en grupo',
  'halfHourOnly' => 'Paseo de 1/2 hora individual',
  'halfHourGroup' => 'Paseo de 1/2 hora en grupo',
  
);


$sqlPaseo = "SELECT * FROM paseo WHERE id_paseador=0 AND location='$locationPaseador' AND fechayhora>'$currentDate'";
$resultadoPaseo = $conexion->query($sqlPaseo); 
$sqlPaseoConfirmado = "SELECT * FROM paseo WHERE id_paseador='$idPaseador'";
$resultadoPaseoConfirmado = $conexion->query($sqlPaseoConfirmado); 





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Turnos</title>
    <link rel="icon" href="../frontend/imgs/Paseo-pet.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../frontend/style.css">
    <link rel="stylesheet" href="../frontend/date.css">
  </head>

<body>

  <?php include('navPaseadores.php') ?>
  <br>
      <div class="row">

      <!-- SECCION DE SOLICITUDES -->
        <div class="col">
          <div class="bg-secondary">
            <br>
            <h1 class="text-center">Solicitudes de paseo</h1>
            <br>
          </div>
          <?php 
            while($dataPaseo=$resultadoPaseo->fetch_assoc()){
              $idPaseo=$dataPaseo['id'];
              $idMascota=$dataPaseo['id_mascota'];
              $fechaPaseo=$dataPaseo['fechayhora'];
              $direccion=$dataPaseo['ubicacion'];
              $tipo=$dataPaseo['duracion'];
              $sqlMascota = "SELECT * FROM mascota WHERE id='$idMascota'";
              $resultadoMascota=$conexion->query($sqlMascota); // Uso este metodo para que me traiga toda la informacion

              while($dataMascota=$resultadoMascota->fetch_assoc()){
                $nameMascota = $dataMascota['name'];
              }
              ?>
            <div class="bg-light">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $nameMascota.' - '.$fechaPaseo ?></h5>
                  <hr>
                  <p class="card-text"><?php echo $direccion.', '.$locationPaseador ?></p>
                  <hr>
                  <a class="btn btn-success" href='../backend/modificar.php?id=<?php echo $idPaseo ?>&paseador=<?php echo $idPaseador ?>' >Aceptar paseo</a>
                </div>
                <div class="card-footer text-muted">
                <?php echo $paseos[$tipo] ?>
                </div>
            </div>
          </div>
          <br>

          <?php
            }
          ?>
          
        </div>
        
     <!-- SECCION DE PASEOS CONFIRMADOS -->   
     <div class="col">
          <div class="bg-success">
            <br>
            <h1 class="text-center">Paseos Aceptados</h1>
            <br>
          </div>
          <?php 
            while($dataPaseoConfirmado=$resultadoPaseoConfirmado->fetch_assoc()){
              $idPaseoConfir=$dataPaseoConfirmado['id'];
              $idMascotaConfir=$dataPaseoConfirmado['id_mascota'];
              $fechaPaseoConfir=$dataPaseoConfirmado['fechayhora'];
              $direccionConfir=$dataPaseoConfirmado['ubicacion'];
              $tipoConfir=$dataPaseoConfirmado['duracion'];
              $sqlMascotaConfir = "SELECT * FROM mascota WHERE id='$idMascotaConfir'";
              $resultadoMascotaConfir=$conexion->query($sqlMascotaConfir);

              while($dataMascotaConfir=$resultadoMascotaConfir->fetch_assoc()){
                $nameMascotaConfir = $dataMascotaConfir['name'];
              }

              // Uso este metodo para que me traiga toda la informacion
              ?>
            <div class="bg-light">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $nameMascotaConfir.' - '.$fechaPaseoConfir ?></h5>
                  <hr>
                  <p class="card-text"><?php echo $direccionConfir.', '.$locationPaseador ?></p>
                  <hr>
                  <a class="btn btn-danger" href='../backend/delete.php?id=<?php echo $idPaseoConfir ?>' >Cancelar paseo</a>
                </div>
                <div class="card-footer text-muted">
                <?php echo $paseos[$tipoConfir] ?>
                </div>
            </div>
          </div>
          <br>

          <?php
            }
          ?>
          
        </div>
        
        
      </div>
           
</body>
</html>