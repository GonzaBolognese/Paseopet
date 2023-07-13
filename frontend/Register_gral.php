<?php ?>
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
    <title>Registro</title>
    <link rel="icon" href="../frontend/imgs/Paseo-pet.png" type="image/x-icon">

</head>
<margin-top: 50px;> </margin-top:>
<body>
  
  
  <!-- Hero section -->
  <section id="hero">
    <div class="container">
     <div class="container">
        <div class="row">
            <div class="col">
        <h1>Ingresemos tus datos</h1>
    </div>
    <div class="col">
        <div class="float-end"> <a href="../frontend/" id="back" class="btn btn-lg float-end">Atras</a>
        </div>
       
    </div>
    </div>
     </div>
    
        
     <form  method="post" action="../backend/register.php">
              <div class="form-group">
              <label for="exampleInputEmail1" class="form-label mt-4">Soy</label>
              <select class="form-select  form-control" name='userType' id="userType" aria-describedby="emailHelp" aria-label=".form-select-sm example">
                <option value="paseador">Soy Paseador</option>
                  <option value="mascota">Soy Perrito</option>
                </select>
                <label for="name" class="form-label mt-4">Nombre</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Nombre/s">
                <label for="usuario" class="form-label mt-4">Usuario</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Usuario">
                <label for="email" class="form-label mt-4">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email">
                <label for="ubicacion" class="form-label mt-4">Ubicacion</label>
                <select class="form-select  form-control" name='location' id="location" aria-describedby="emailHelp" aria-label=".form-select-sm example">
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
                <label for="ubicacion" class="form-label mt-4">Direccion</label>
                <input type="text" class="form-control" name="address" id="address" aria-describedby="address" placeholder="Address">
                <label for="contraseña" class="form-label mt-4">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp" placeholder="Contraseña">
                <label for="ccontraseña" class="form-label mt-4">Confirmar Contraseña</label>
                <input type="password" class="form-control" name="cpassword" id="cpassword" aria-describedby="emailHelp" placeholder="Contraseña">
                <button type="submit" id="log" class="btn btn-lg" name="submit">Registrarme</button>
            </div>
        </form>
        
             </div>
        
</body>
<!-- Esto evita que los datos del FORM queden guardados -->
<script type="text/javascript">
  if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
  }
</script>
</html>