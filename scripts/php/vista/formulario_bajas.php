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
    <title>BAJAS</title>

    <style>
        <style>
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </style>
</head>
<body>
    
    <?php
        require_once('header.php');
    ?>

    <h3 style="background-color:red;
                text-align: center;
                padding: 15px;"> Eliminar ALUMNOS </h3>

    <div class="alert alert-danger" role="alert" 
        style="width: 50%; margin: auto;">
            This is a success alert—check it out!
    </div>


    <?php
        include('../controlador/alumno_DAO.php');
        $aDAO = new AlumnoDAO();
        $res = $aDAO->mostrarAlumnos();
       
        //var_dump($res);

        if(mysqli_num_rows($res)>0){

            //mysqli_fetch_row  => obtiene datos como un vector normal (indices numericos)
            //mysqli_fetch_assoc  => obtiene datos como un vector asociativo

            echo "<table id='customers'>";
            while($fila = mysqli_fetch_assoc($res)){
                printf("<tr>
                            <td>".$fila['Num_Control']."</td>".
                            "<td>".$fila['Nombre']."</td>".
                            "<td>".$fila['Primer_Ap']."</td>".
                            "<td>".$fila['Segundo_AP']."</td>".
                            "<td>".$fila['Edad']."</td>".
                            "<td>".$fila['Semestre']."</td>".
                            "<td>".$fila['Carrera']."</td>".
                            "<td> <a href='../controlador/procesar_bajas.php?nc=%s'>ELIMINAR</a> </td> </tr>", $fila['Num_Control'] );
            }

        }else{
            echo "SIN registros para mostrar";
        }
        echo "</table>";
    ?>


</body>
</html>