<?php 
session_start();
error_reporting(0);

include ("../backend/conect_data_base.php"); //Conectos la base de datos

$user = $_SESSION['email']; //Esto es que los datos de cuando ingreso queden guardos
 
$sql = "SELECT * FROM mascota WHERE email='".$user."'";
$resultado=$conexion->query($sql); 

while($data=$resultado->fetch_assoc()){
  $id = $data['id'];
  $name = $data['name'];
  $username = $data['username'];
  $email = $data['email'];
  $location = $data['location'];
  $address = $data['address'];
} 

if(empty($_POST['date']) || empty($_POST['service'])){
    include('../frontend/pedirturno.php');
    ?>
    <br><br><br><br><br><br><br><br><br><br><br>
    <div class="alert alert-danger contenedor" role="alert" >
        <h4 class="text-center">Seleccione servicio y horario</h4>
    </div>
  <?php
  
} else {
    $time = $_POST['date']; //Esto toma la hora que se cargo en la pagina
    $timeInt=strtotime($time);//Esto transforma la hora para que después la podamos comparar
    $service = $_POST['service']; //Esto toma el tipo de servicio que se cargo en la pagina
    $currentDate = strtotime(date("d-m-Y H:i:00",time()));
    if($currentDate > $timeInt){
        include('../frontend/pedirturno.php');
        ?>
        <br><br><br><br><br><br><br><br><br><br><br>
        <div class="alert alert-danger" role="alert"> 
            <h4 class="text-center">La fecha solicitada ya ha pasado</h4>
        </div>
        <?php
    } else {
        $insert = "INSERT INTO `paseo`(`id_mascota`, `fechayhora`, `fechayhoraint`, `duracion`, `location`, `ubicacion`) VALUES ('$id','$time','$time','$service','$location','$address')";
        $query_insert= mysqli_query($conexion, $insert);
            if($query_insert){
              include('../frontend/pedirturno.php');
                  ?>
                  <br><br><br><br><br><br><br><br><br><br><br>
                <div class="alert alert-success" role="alert"> 
                    <h4 class="text-center">Turno solicitado con exito! Aguarde a que el paseo sea aceptado.</h4>
                    <hr>
                    <div class="form-group">
                        <a href="../frontend/iniciomascotas.php" id="log" class="btn btn-lg fs-6 text-center">Continuar</a>
                    </div>
                </div>
                  
                <?php
            }
        }
    }



?>