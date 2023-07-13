<?php 
session_start();
error_reporting(0);
$_SESSION['email'];

require('./conect_data_base.php'); // Esto conecta a la base de datos
$userType=$_GET['userType'];
$name=$_GET['name'];
$username=$_GET['username'];
$email=$_GET['email'];
$location=$_GET['location'];
$address=$_GET['address'];
$race=$_GET['race'];
$sex=$_GET['sex'];
$size=$_GET['size'];
$age=$_GET['age'];
$vacunas=$_GET['vacunas'];
$castrado=$_GET['castrado'];
$phone=$_GET['phone'];
$description=$_GET['description'];


$sql = 'UPDATE mascota SET name=".$name.",email='.$email.',location='.$location.',address='.$address.',race='.$race.',sex='.$sex.',size='.$size.',age='.$age.',vacunas='.$vacunas.',castrado='.$castrado.',description='.$description.',phone='.$phone.' WHERE email='.$_SESSION['email'].'';
$res=mysqli_query($conexion, $sql);
$filas=mysqli_num_rows($res);
if($filas){ //Si todos los datos ingresados son correctos entonces ->
    header("location: ../frontend/iniciomascotas.php"); //Nos va a mandar a la pagina de inicio de las mascotas
} else { //Sino nos va a dar una alerta
    ?>
    <?php
    include("../frontend/Register_detalle_perrito.php");
    ?> 
    <div class="alert alert-danger" role="alert">Error al actualizar</div>
  <?php
}

$_SESSION['email']=$email;

mysqli_free_result($res);
mysqli_close($conexion);

?>