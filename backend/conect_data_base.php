<?php
$arrSConn = array( 
    "servername"  => "localhost",
    "username"    => "root",
    "password"    => "",
    "dbname"      => "paseopet",
    
);

//La funcion mysqli_connect() nos conecta a la base de datos
//A la funcion recibe 4 parametro
//      mysqli_connect(   Nombre Del Server   , nombre Del Usuario   , Contraseña Del Usario, El Nombre De La Base De Datos)
$conexion = mysqli_connect($arrSConn["servername"], $arrSConn["username"], $arrSConn["password"], $arrSConn["dbname"]);

//Esto es por si falla la conexion
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
} 

//Me conecto a la base de datos para posteriormente poder hacer consultas y modificaciones de la misma

?>