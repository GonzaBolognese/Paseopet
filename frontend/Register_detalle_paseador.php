<?php 
error_reporting(0);
session_start();
include ("../backend/conect_data_base.php"); //Conectos la base de datos

$user = $_SESSION['email']; //Esto es que los datos de cuando ingreso queden guardos

$sql = "SELECT * FROM paseador WHERE email='".$user."'";
$resultado=$conexion->query($sql); // Uso este metodo para que me traiga toda la informacion

while($data=$resultado->fetch_assoc()){
  $id = $data['id'];
  $name = $data['name'];
  $username = $data['username'];
  $email = $data['email'];
  $location = $data['location'];
  $address = $data['address'];
  $password = md5($data['password']);
}




?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Mi Perfil</title>
    <link rel="icon" href="../frontend/imgs/Paseo-pet.png" type="image/x-icon">
</head>
<body>


<?php include("navPaseadores.php"); ?>
    <br>
   
    <div class="container">
    <div class="row flex-lg-nowrap">

    
      <div class="col">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body">
                <div class="e-profile">
                  <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                      <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                          <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                        </div>
                      </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                      <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php	echo $username;?></h4>
                        
                        <div class="mb-3">
                          <h5><label for="formFile" class="form-label pt-sm-2 pb-1 mb-0 text-nowrap">Subir foto de perfil</label></h5>
                          <input class="form-control" type="file" name='image' id="formFile" enctype='multipart/form-data'>
                          </div>
                      </div>
                    </div>
                  </div>
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="active nav-link">Mis Datos</a></li>
                  </ul>
                  <div class="tab-content pt-3">
                    <div class="tab-pane active">
                      <form class="form" method="post">
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input class="form-control" type="text" name="name" placeholder="Nombre" value=<?php	echo $name;?> >
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label>Apellido/s</label>
                                  <input class="form-control" type="text" name="lastname" placeholder="Apellido" value= <?php	echo $lastname;?>>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label>Sexo</label>
                                      <select class="form-control" name="sex">
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                        <option>Otros</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col">
                                <div class="form-group">
                                  <label>DNI</label>
                                  <input class="form-control" type="number" name="username" placeholder="DNI" value="<?php	echo $dni;?>">
                                </div>
                              </div>
                              </div>
                                <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Edad</label>
                                    <input class="form-control" type="number" name="edad" placeholder="Edad" value="<?php	echo $age;?>">
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Localidad</label>
                                      <select class="form-select  form-control" name='location' id="location" aria-describedby="emailHelp" aria-label=".form-select-sm example" >
                                        <option value=<?php echo $location;?> ><?php echo $location;?></option>
                                        <option value="Belgrano">Belgrano</option>
                                        <option value="Caballito">Caballito</option>
                                        <option value="Colegiales">Colegiales</option>
                                        <option value="La Paternal">La Paternal</option>
                                        <option value="Nuñez">Nuñez</option>
                                        <option value="Parque Chas">Parque Chas</option>
                                        <option value="Puerto Madero">Puerto Madero</option>
                                        <option value="Recoleta">Recoleta</option>
                                        <option value="Saavedra">Saavedra</option>
                                        <option value="Villa Crespo">Villa Crespo</option>
                                        <option value="Villa Devoto">Villa Devoto</option>
                                        <option value="Villa Pueyrredon">Villa Pueyrredon</option>
                                        <option value="Villa Urquiza">Villa Urquiza</option>
                                        <option value="Villa Del Parque">Villa del Parque</option>
                                        </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Direccion</label>
                                  <input class="form-control" type="email" placeholder="Dirección" name="address" value= <?php echo $address ?> >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                <div class="row">
                                  <div class="col">
                                    <div class="form-group">

                                  <label>Email</label>
                                  <input class="form-control" type="email" name="email" placeholder="Email" value= <?php echo $email;?> >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Servicios</label>
                                  <select class="form-select  form-control" name="service" id="services">
                                    <option value="hourGroup">Paseo de 1 hora en grupo</option>
                                    <option value="halfHourGroup">Paseo de 1/2 hora en grupo</option>
                                    <option value="hourOnly">Paseo de 1 hora individual</option>
                                    <option value="halfHourOnly">Paseo de 1/2 hora individual</option>
                                  </select>
                                </div>
                              </div>
                            </div>   
                            <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>Sobre mí</label>
                                  <textarea class="form-control" rows="5" type="text" name="description" placeholder="Contanos un poco sobre vos"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                                
                                
                              </div>
                            </div>

                            <input type="text" name="userType" value="paseador" hidden >

                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-left">
                            <a href=""></a>
                              </div>
                          <div class="col d-flex justify-content-end">
                            <button type="submit" id="log" class="btn btn-lg">Guardar</button>
                            
                          </div>
                        </div>
                        
                      </form>
    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
    </div>
    </div>
</body>

</html>