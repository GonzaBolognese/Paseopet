<?php 

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
    <link rel="stylesheet" href="../frontend/style.css">
    <title>Paseo Pet</title>
     <link rel="icon" href="../frontend/imgs/Paseo-pet.png" type="image/x-icon">

</head>
<margin-top: 50px;> </margin-top:>
<body>
  
  
  <!-- Hero section -->
  <section id="hero">
    <div class="container">
        <div class="row">
          <div class="col">
              <img src="../frontend/imgs/Paseo-pet.png" class="w-100" alt="">
             </div>
            <div class="col">
                <h1>Iniciar sesión</h1>

                    <form action="../backend/validar.php" method="post">

                    <div class="form-group">
                      <label class="form-label mt-4">Tipo de usuario</label>
                      <div class="form-floating mb-3">
                      <select class="form-select" aria-label="Default select example" name='userType'>
                        <option selected>Seleccione su tipo de usuario</option>
                        <option value="mascota">Perrito</option>
                        <option value="paseador">Paseador</option>
                      </select>
                      </div>
                      <label class="form-label mt-4">Email</label>
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" >
                        <label for="floatingInput">Escribí aquí tu email</label>
                      </div>
                      <label class="form-label mt-4">Contraseña</label>
                      <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password"  >
                        <label for="floatingPassword">Contraseña</label>
                        <div class="row">
                          <!-- <div class="col">
                            <button type="button" id="olvide" class="btn btn-outline-light">Olvidé mi contraseña</button>
                          </div> -->
                          <div class="col">
                            <a href="../frontend/register_gral.php" id="olvide" class="btn btn-outline-light">Registrarme</a>
                          </div>
                        </div>
                      </div>
                     
                       <div class="row">
                          <div class="col">
                            <div class="float-start">
                               <button type="submit" id="next" class="btn btn-lg float">Ingresar</a>
                            </div>
                          </div>
                          <div class="col">
                            <div class="float-end"> 
                            </div>
                          </div>
                        </div>

                        </form>

                
                    </div>
                </div>
                
             </div>
             
        
        
</body>
<script type="text/javascript">
  if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
  }
</script>
</html>