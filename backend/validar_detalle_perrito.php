<?php 
session_start();
error_reporting(0);
require('./conect_data_base.php'); //Conectos la base de datos

$user = $_SESSION['email']; //Esto es que los datos de cuando ingreso queden guardos

$sql = "SELECT * FROM mascota WHERE email='".$user."'";
$resultado=$conexion->query($sql); // Uso este metodo para que me traiga toda la informacion

while($data=$resultado->fetch_assoc()){
  $id = $data['id'];
}


if( !empty($_POST['name']) || 
    !empty($_POST['race']) ||
    !empty($_POST['sex']) || 
    !empty($_POST['size']) || 
    !empty($_POST['age']) || 
    !empty($_POST['location']) || 
    !empty($_POST['address']) ||
    !empty($_POST['vacunas']) || 
    !empty($_POST['castrado']) || 
    !empty($_POST['phone']) || 
    !empty($_POST['email']) || 
    !empty($_POST['description']) ||
    !empty($_POST['image']) 
)
{
    $actulizacion="UPDATE `mascota` SET 
    `name`='$_POST['name']',
    `email`='$_POST['email']',
    `location`='$_POST['location']',
    `address`='$_POST['address']',
    `race`='$_POST['race']',
    `sex`='$_POST['sex']',
    `size`='$_POST['size']',
    `age`='$_POST['age']',
    `vacunas`='$_POST['vacunas']',
    `castrado`='$_POST['castrado']',
    `description`='$_POST['description']',
    `img`='$_POST['image']',
    `phone`='$_POST['phone']' 
    WHERE id='$id'"

    $resultado=mysqli_query($conexion, $sql);
    if($resultado){
 ?>
 <?php
 include('../frontend/Register_gral.php');
 ?>
   <div class="alert alert-success" role="alert">
    <h3> Los datos fueron completados con exito </h3>
    </div>
 <?php
 } else {
    ?>
   <div class="alert alert-danger" role="alert"> 
    <h3> Error al cargar datos, por favor reintentar! </h3>
</div>
 <?php
 }
}



?>