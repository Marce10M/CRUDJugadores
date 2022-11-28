<?php 

print_r($_POST);

include '../models/conexion.php';

$codigoJugador = $_POST['id'];
$nombre = $_POST['InputNombre'];
$apellido = $_POST['InputApellido'];
$edad = $_POST['InputEdad'];
$posicion = $_POST['InputPosicion'];
$pais = $_POST['InputPais'];
$equipo = $_POST['InputEquipo'];

$consulta =$bd->prepare("UPDATE jugadores SET nombre = ?, apellido= ?, edad= ?, posicion= ?, pais=?, equipo=? WHERE id= ?");
$resultado= $consulta->execute([$nombre,$apellido, $edad, $posicion, $pais, $equipo, $codigoJugador]);

if($resultado){
    header("Location: ../index.php");
}else{
    echo "Su edición ha fallado";
}


?>