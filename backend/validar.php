<?php  
session_start();
error_reporting(0);

    $userType=$_POST['userType'];
    $email=$_POST['email'];
    $password=md5($_POST['password']); //La funcion md5 encripta la contraseña
    $_SESSION['email']=$email;
    $_SESSION['id']=$email;

    
    require('./conect_data_base.php'); // Esto conecta a la base de datos
    
  if(empty(($_POST['email'])) || empty(($_POST['password']))|| empty(($_POST['userType']))){
     ?>
        <?php
        //Con el include ponemos toodo el html que esta en index.php
        include("../frontend/index.php");
        ?> 
    <div class="alert alert-danger alerta" role="alert"> Todos los campos son obligatorios.</div>
            <?php
    }else {
 
              if($userType == 'mascota'){
                    $sql="SELECT*FROM mascota WHERE email='$email' AND password='$password'"; //Esta es la consulta sql que vamos a hacer a la base de datos
                    $res=mysqli_query($conexion, $sql);//Este dato hace la consulta en la base de datos que nosotros conectamos
                    $filas=mysqli_num_rows($res); //Este metodo almacena el resultado y hace la validacion correspondiente
                        if($filas){ //Si todos los datos ingresados son correctos entonces ->
                              header("location: ../frontend/iniciomascotas.php"); //Nos va a mandar a la pagina de inicio de las mascotas
                          } else { //Sino nos va a dar una alerta
                              ?>
                              <?php
                              include("../frontend/index.php");
                              ?> 
                              <div class="alert alert-danger" role="alert">Usuario inexistente o contraseña incorrecta!</div>
                            <?php
                          }
                    mysqli_free_result($res);
                    mysqli_close($conexion);
              }else {
                $sql="SELECT*FROM paseador WHERE email='$email' AND password='$password'";//Esta es la consulta sql que vamos a hacer a la base de datos
                $res=mysqli_query($conexion, $sql);//Este dato hace la consulta en la base de datos que nosotros conectamos
                $filas=mysqli_num_rows($res); //Este metodo almacena el resultado y hace la validacion correspondiente
                    if($filas){ //Si todos los datos ingresados son correctos entonces ->
                          header("location: ../frontend/iniciopaseadores.php"); //Nos va a mandar a la pagina de inicio de las mascotas
                      } else { //Sino nos va a dar una alerta
                          ?>
                          <?php
                          include("../frontend/index.php");
                          ?> 
                          <div class="alert alert-danger" role="alert">Usuario inexistente o contraseña incorrecta!</div>
                        <?php
                      }
                mysqli_free_result($res);
                mysqli_close($conexion);
                }
              }






?>
 <script type="text/javascript">
  if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
  }
</script>