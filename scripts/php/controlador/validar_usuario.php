<?php

    //echo "login";
    include('../conexiones_BD/conexion_bd_usuarios.php');

    //uDAO  usuario_DAO

    $con = new ConexionBDUsuarios();
    $conexion = $con->getConexion();

    //var_dump($conexion);

    if($conexion){

        if(isset($_POST['caja_usuario']) && isset($_POST['caja_contraseña']) 
                && !empty($_POST['caja_usuario']) && !empty($_POST['caja_contraseña'])){
            
            $u = $_POST['caja_usuario'];
            $p = $_POST['caja_contraseña'];

            $u_cifrado = sha1($u);
            $p_cifrado = sha1($p);

            //PREPARED STATEMENTS para evitar SQL INJECTION
            $sql = "SELECT * FROM Usuarios WHERE usuario='$u_cifrado' AND password='$p_cifrado'";

            $res = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($res)==1){
                //echo "Magia magia con SESIONES";
                //ESTABLECER EL INICIO DE SESION !!!!!!!!!!!!
                
                session_start();
                
                $_SESSION['usuario'] = $u;
                $_SESSION['u_valido'] = true;
                header('location:../vista/fomulario_altas.php');
            }else{
                //echo "Mejor me dedico a las redes =/ ";

                //enviar informacion con sesiones de ERROR en la AUTENTICACION
                //y enviar a la pagina de REGISTRO
                header('location:../vista/login.html');
            }



        }else
            echo "ERROR en varialbes o estan VACIAS";
    }else
        echo "SIN conexion";
?>