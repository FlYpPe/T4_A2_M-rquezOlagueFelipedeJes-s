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
include('../controlador/alumno_DAO.php');

    $nc = $_POST['num'];
    $n = $_POST['nom'];
    $pa = $_POST['pa'];
    $sa = $_POST['sa'];
    $e = $_POST['e'];
    $s = $_POST['s'];
    $c = $_POST['c'];
        $aDAO = new AlumnoDAO();

       $resultado = $aDAO->modificarAlumno($nc, $n, $pa, $sa, $e, $s, $c);
        if ($resultado) {
            header('location:../vista/formulario_consultas.php');
        }else {
            header('location:../vista/formulario_consultas.php');
        }

?>

<script></script>
</body>
</html>


