<?php
  session_start();
  if($_SESSION['u_valido']==false){
    //header('location:pagina_acceso_prohibido.html');
    header('location: login.html');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        require_once('header.php');
    ?>

    <h3 style="background-color:lightgreen;
                text-align: center;
                padding: 15px;
                
                "> Agregar ALUMNOS </h3>

<div class="alert alert-success" role="alert" 
    style="width: 50%; margin: auto;">
  This is a success alert—check it out!
</div>


    <form action="../controlador/procesar_altas.php" method="POST" >
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Numero de control</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Solo numeros">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Nombre</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="Solo letras">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Primer Apellido</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Segundo Apellido</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Edad</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="semestre">Semestre</label>
          <select id="semestre" class="form-control">
            <option selected>Elige opcion...</option>
            <?php
              for ($i=0; $i <=12; $i++) { 
                echo "<option>".$i."</option>";
              }
            ?>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Carrera</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            <a href="#"> Aviso de privacidad </a>
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary"> AGREGAR </button>
    </form>


</body>
</html>