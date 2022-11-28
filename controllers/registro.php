<?php 

//print_r($_POST);

if(empty($_POST['InputNombre']) || empty($_POST['InputApellido']) || empty($_POST['InputEdad']) || empty($_POST['InputPosicion']) ||empty($_POST['InputPais']) ||empty($_POST['InputEquipo'])){
    echo "Error, complete todo el formulario";
    exit();
}

include '../models/conexion.php';

$nombre = $_POST['InputNombre'];
$apellido = $_POST['InputApellido'];
$edad = $_POST['InputEdad'];
$posicion = $_POST['InputPosicion'];
$pais = $_POST['InputPais'];
$equipo = $_POST['InputEquipo'];

echo $nombre,$apellido, $edad, $posicion, $pais, $equipo;


$consulta=$bd->prepare("INSERT INTO jugadores(nombre,apellido, edad, posicion, pais, equipo) VALUES (?,?,?,?,?,?) ");

$resultado = $consulta->execute([$nombre,$apellido, $edad, $posicion, $pais, $equipo]);

if($resultado){
    header("Location: ../index.php");
}else{
    echo "Falló la consulta";
}

?>