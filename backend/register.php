<?php 
session_start();
error_reporting(0);
require('./conect_data_base.php'); //Conectos la base de datos

    if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['location']) || empty($_POST['address']) || empty($_POST['password']) || empty($_POST['cpassword']))
       {
        ?>
        <?php
        include('../frontend/Register_gral.php');
        ?>
          <div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>
        <?php
       } else {

        $userType=$_POST['userType'];
        $name=$_POST['name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $location=$_POST['location'];
        $address=$_POST['address'];
        $password=md5($_POST['password']); //El md5 encripta la clave
        $cpassword=md5($_POST['cpassword']);

        if($password == $cpassword){
          if($userType == 'mascota'){
            $sql = "SELECT * FROM mascota WHERE username = '$username' OR email = '$email'";
            $query = mysqli_query($conexion, $sql);
            $filas = mysqli_fetch_array($query);
                if($filas > 0){
                  include('../frontend/Register_gral.php');
                  ?>
                    <div class="alert alert-danger" role="alert"> El correo o el usuario ya existe.</div>'
                  <?php
                  } else {
                  $insert = "INSERT INTO `mascota`(name,username,email,location,address,password) VALUES ('$name', '$username', '$email', '$location', '$address', '$password')";
            $query_insert= mysqli_query($conexion, $insert);
            if($query_insert){
              include('../frontend/Register_gral.php');
                  ?>
                  <div class="alert alert-success" role="alert"> 
                    <h3>Usuario creado con exito!</h3>
                    <hr>
                    <a href="../frontend/index.php" id="log" class="btn btn-lg float">Continuar</a>
                  </div>
            <?php
            
            } else {
              include('../frontend/Register_gral.php');
                  ?>
                  <div class="alert alert-danger" role="alert"> Error al crear el usuario.</div>
                  <?php

                    } 
                   }
            
            
          } else {
            $sql = "SELECT * FROM paseador WHERE username = '$username' OR email = '$email'";
            $query = mysqli_query($conexion, $sql);
            $filas = mysqli_fetch_array($query);
                if($filas > 0){
                  include('../frontend/Register_gral.php');
                  ?>
                    <div class="alert alert-danger" role="alert"> El correo o el usuario ya existe.</div>'
                  <?php
                  } else {
                  $insert = "INSERT INTO `paseador`(`name`, `username`, `email`, `location`, `address`, `password`) VALUES ('$name','$username', '$email','$location','$address','$password')";
            $query_insert= mysqli_query($conexion, $insert);
            if($query_insert){
              include('../frontend/Register_gral.php');
                  ?>
                  <div class="alert alert-success" role="alert"> Usuario creado con exito! </div>
                  <a href="../frontend/index.php" id="log" class="btn btn-lg float">Continuar</a>
            <?php
            
            } else {
              include('../frontend/Register_gral.php');
                  ?>
                  <div class="alert alert-danger" role="alert"> Error al crear el usuario.</div>
                  <?php

                    } 
                   }
            
                     
          }
        } else {
          include('../frontend/Register_gral.php');
          ?>
          <div class="alert alert-danger" role="alert">Las contraseñas no coinciden!</div>
          <?php
        }

            
        }      

?>