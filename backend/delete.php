<?php 
error_reporting(0);
session_start();
include ("../backend/conect_data_base.php");

$id=$_GET['id'];

$sql="UPDATE `paseo` SET `id_paseador`=0 WHERE id='$id'";
$resultado=mysqli_query($conexion, $sql);

if($resultado){
    header("location: ../frontend/misturnospaseadores.php");
} else{
    include("../frontend/misturnospaseadores.php");
    ?>
        <div class="alert alert-danger" role="alert"> Error al cancelar paseo.</div>
    <?php
}

?>