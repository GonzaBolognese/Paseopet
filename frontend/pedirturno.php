<?php 
error_reporting(0);
session_start();
include ("../backend/conect_data_base.php"); //Conectos la base de datos

$user = $_SESSION['email']; //Esto es que los datos de cuando ingreso queden guardos
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
    <link rel="icon" href="../frontend/imgs/Paseo-pet.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../frontend/style.css">
    <link rel="stylesheet" href="../frontend/date.css">
  </head>
<body>
<?php 
include('../frontend/navMascotas.php')
?>
  <br>
  <div>
  <form action="../backend/cargarpaseo.php" method="post">
  <div class="">
      
      <div class="form-group">
        <h1 class="fs-6 text-center">Elegi un servicio</h1>
          <select multiple class="form-control form-control-lg" name='service'>
            <option class="text-center" value="hourGroup">Paseo de 1 hora en grupo</option>
            <option class="text-center" value="halfHourGroup">Paseo de 1/2 hora en grupo</option>
            <option class="text-center" value="hourOnly">Paseo de 1 hora individual</option>
            <option class="text-center" value="halfHourOnly">Paseo de 1/2 hora individual</option>
          </select>
      </div>  

        <h1 class="fs-4 text-center"> Elegi día </h1>
        <input type="datetime-local" name="date" id="date">


        <div class="container text-center botones" id="btn"> 
          <a href="../frontend/iniciomascotas.php" id="log" class="btn btn-lg float-end">Atras</a> 
          <button type="submit" id="log" class="btn btn-lg float-end">Pedir paseo</button>
          
        </div>    
    </form>
  </div>
</body>

<script type="text/javascript">
  if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
  }
</script>

</html>