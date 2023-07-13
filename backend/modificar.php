<?php 
error_reporting(0);
session_start();
include ("../backend/conect_data_base.php");

$idPaseo=$_GET['id'];
$idPaseador=$_GET['paseador'];

$sql = "UPDATE `paseo` SET `id_paseador`='$idPaseador'WHERE id='$idPaseo'";
$resultado = mysqli_query($conexion, $sql);

if($resultado){
    header("location: ../frontend/misturnospaseadores.php");
} else {
    include("../frontend/misturnospaseadores.php");
    ?>
        <div class="alert alert-danger" role="alert"> Error al aceptar usuario.</div>
    <?php
}
?>
