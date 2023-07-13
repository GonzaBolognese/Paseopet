<?php 
error_reporting(0);
session_start();
include ("../backend/conect_data_base.php");

$id=$_GET['id'];

$sql="DELETE FROM `paseo` WHERE id='$id';";
$respuesta=mysqli_query($conexion, $sql);

if($respuesta){
    header("location: ../frontend/misturnosmascotas.php");
} else {
    include("../frontend/misturnosmascotas.php");
    ?>
        <div class="alert alert-danger" role="alert"> Error al cancelar paseo.</div>
    <?php
}


?>