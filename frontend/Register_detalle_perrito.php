<?php 
error_reporting(0);
session_start();
include ("../backend/conect_data_base.php"); //Conectos la base de datos

$user = $_SESSION['email']; //Esto es que los datos de cuando ingreso queden guardos

$sql = "SELECT * FROM mascota WHERE email='".$user."'";
$resultado=$conexion->query($sql); // Uso este metodo para que me traiga toda la informacion

while($data=$resultado->fetch_assoc()){
  $id = $data['id'];
  $username = $data['username'];
  $name = $data['name'];
  $email = $data['email'];
  $race = $data['race'];
  $sex = $data['sex'];
  $size = $data['size'];
  $age = $data['age'];
  $location = $data['location'];
  $address = $data['address'];
  $vacunas = $data['vacunas'];
  $castrado = $data['castrado'];
  $description = $data['description'];
  $image = $data['image'];
  $phone = $data['phone'];
  $password = md5($data['password']);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Mi Perfil</title>
    <link rel="icon" href="../frontend/imgs/Paseo-pet.png" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php include('navMascotas.php') ?>

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
                      <div class="mx-auto" style="width: 140px; ">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                          <img class="mx-auto" style="width: 140px ; height: 140px;" src="http://c.files.bbci.co.uk/48DD/production/_107435681_perro1.jpg" alt="" >
                        </div>
                      </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                      <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php	echo $username;?></h4>

                        <form method="post" class="form" action="../backend/validar_detalle_perrito.php"> 

                        <div class="mb-3">
                          <h5><label for="formFile" class="form-label pt-sm-2 pb-1 mb-0 text-nowrap">Subir foto de perfil</label></h5>
                          <input class="form-control" type="file" name='image' id="formFile" enctype='multipart/form-data'>
                          </div>
                      </div>
                      
                    </div>
                  </div>
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="active nav-link">Mis Datos</a></li>
                  </ul>
                  <div class="tab-content pt-3">
                    <div class="tab-pane active">
                      
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Nombre/s</label>
                                  <input class="form-control" type="text" name="name" placeholder="Nombre" value=<?php	echo $name;?> >
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label>Raza</label>
                                  <input class="form-control" type="text" name="race" placeholder="Raza" value=<?php	echo $race;?> >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                <label>Sexo</label>
                                  <select class="form-control" id="exampleFormControlSelect1"  value=<?php	echo $sex;?> >
                                    <option selected>Elegir sexo</option>
                                    <option value='Macho'>Macho</option>
                                    <option value='Hembra'>Hembra</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                <label>Tamaño</label>
                                  <select class="form-control" id="exampleFormControlSelect1" name="size"  >
                                    <option selected>Elegir tamaño</option>
                                    <option value='Chico'>Chico</option>
                                    <option value='Mediano'>Mediano</option>
                                    <option value='Grande'>Grande</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Edad</label>
                                  <input class="form-control" type="number" name="age" placeholder="Edad"  value=<?php	echo $age;?> >
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
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Direccion</label>
                                  <input class="form-control" type="text" placeholder="Dirección" name="address" value= <?php echo $address ?> >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                <label>¿Tiene todas las vacunas al día?</label>
                                  <select class="form-control" name="vacunas">
                                  <option value=<?php echo $location;?> ><?php echo $vacunas;?></option>
                                    <option selected>¿Vacunas al dia?</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label>¿Esta castrado?</label>
                                  <select class="form-control" name="castrado">
                                  <option value=<?php echo $location;?> ><?php echo $castrado;?></option>
                                    <option selected>¿Castrado?</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Celular de contacto</label>
                                  <input class="form-control" type="phone" placeholder="Numero de contacto" name="phone" value= <?php echo $phone ?> >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control" type="email" placeholder="Email" name="email" value= <?php echo $email;?> >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>Sobre mí</label>
                                  <textarea class="form-control" rows="5" type="text" name="description" placeholder="Contanos un poco sobre vos" value= <?php echo $description ?> ></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                              </div>
                            </div>
                          
                        </div>
                        <div class="row">
                          
                          <div class="col d-flex justify-content-end">
                            <button type="submit" name='submit' class="btn btn-md" id="log">Guardar</button>
                            
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