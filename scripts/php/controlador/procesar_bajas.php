
<?php

    include('alumno_DAO.php');

    //codigo para obtener los datos del formulario

    //Validacion ...(PENDIENTE)

    $aDAO = new AlumnoDAO();

    //obtener el numero de control ?????
    $nc = $_GET['nc'];

    $aDAO->eliminarAlumno($nc);

    header('location:../vista/formulario_bajas.php');

?>