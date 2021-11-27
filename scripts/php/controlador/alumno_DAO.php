<?php

    include('../conexiones_BD/conexion_bd_escuela.php');

    class AlumnoDAO{

        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBDEscuela();
        }

        //------------------------ METODOS ABCC --------------------------------

        // ========= ALTAS 
        public function agregarAlumno($nc, $n, $pa, $sa, $e, $s, $c){
            $sql = "INSERT INTO alumnos VALUES ('$nc', '$n', '$pa', '$sa', $e, $s, '$c')";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        //====== BAJAS
        public function eliminarAlumno($nc){
            $sql = "DELETE FROM alumnos WHERE Num_Control='$nc'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }



        //======CAMBIOS

        //======CONSULTAS
        public function mostrarAlumnos(){
            $sql = "SELECT * FROM alumnos";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }
        public function mostrarAlumnosPorNc($nc){
            $sql = "SELECT * FROM alumnos where Num_Control ='$nc'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        public function modificarAlumno($nc, $n, $pa, $sa, $e, $s, $c){
        
        $sql = "UPDATE alumnos SET Nombre = '$n', Primer_Ap = '$pa', Segundo_AP = '$sa',
         Edad = $e, Semestre = $s, Carrera = '$c' WHERE Num_Control = '$nc'";
         $res = mysqli_query($this->conexion->getConexion(), $sql);
         return $res;
        }

    }//class Alumno

    

?>