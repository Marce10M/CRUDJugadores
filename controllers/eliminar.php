<?php include '../templates/header.php'?>

<?php
include '../models/conexion.php';

$codigoJugador =$_GET['id'];

$consulta = $bd->prepare("DELETE FROM jugadores WHERE id = ?");

$resultado = $consulta->execute([$codigoJugador]);

if($resultado){
    header("Location: ../index.php");
}else{
    echo "Su eliminación ha fallado";
}

?>