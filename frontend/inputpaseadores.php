<?php 
error_reporting(0);
session_start();
include ("../backend/conect_data_base.php"); //Conectos la base de datos

$user = $_SESSION['email']; //Esto es que los datos de cuando ingreso queden guardos

$sql = "SELECT * FROM paseador WHERE email='".$user."'";
$resultado=$conexion->query($sql); 

while($data=$resultado->fetch_assoc()){
  $id = $data['id'];
  $name = $data['name'];
  $username = $data['username'];
  $email = $data['email'];
  $location = $data['location'];
  $address = $data['address'];
  $password = md5($data['password']);
}

$paseadores=array();

$sqlPaseador = "SELECT * FROM paseador WHERE location='$location'";
$resultado=$conexion->query($sqlPaseador);

while($data=$resultado->fetch_assoc()){
    $idPaseador = $data['id'];
    $namePaseador = $data['name'];
    $usernamePaseador = $data['username'];
  
    $paseador=array( $idPaseador, $namePaseador, $usernamePaseador);

    array_push($paseadores, $paseador);
}

?>