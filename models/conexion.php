<?php 

$nombre_bd= "crud";
$usuario= "root";
$contrasena="";

try{
    // PDO es para crear instancias, generar conexiones a BD
    $bd= new PDO(
        'mysql:host=localhost;
        dbname='.$nombre_bd,
        $usuario,
        $contrasena
    );

}catch(Exception $e){
    //manejo de errores
    echo "No funcionó la conexión porque: ".$e->getMessage();
}


?>