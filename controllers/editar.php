<?php include '../templates/header.php'?>

<?php
include '../models/conexion.php';

$codigoJugador =$_GET['id'];

//prepare sirve para preparar la consulta
$consulta=$bd->prepare("SELECT * from jugadores WHERE id = ?");

$consulta->execute([$codigoJugador]);

$jugador= $consulta->fetch(PDO::FETCH_OBJ);

print_r($jugador);

?>

<div class="container">
    <div class="row justify-content-center">
    <div class="card-header">
        Editar datos del jugador de fútbol
        <form action="update.php" method="POST">
            <div class="mb-2 ml-2 mr-2">
                <label>Nombre</label>
            <input class="form-control" type="text" placeholder="Ingrese Nombre" name="InputNombre" value="<?php echo $jugador->nombre?>" required>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label>Apellido</label>
            <input class="form-control" type="text" placeholder="Ingrese Apellido" name="InputApellido" value="<?php echo $jugador->apellido ?>" required>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label>Edad</label>
            <input class="form-control" type="number" placeholder="Ingrese Edad" name="InputEdad" value="<?php echo $jugador->edad ?>"  required>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label>Posición</label>
            <input class="form-control" type="text" placeholder="Ingrese Posición" name="InputPosicion" value="<?php echo $jugador->posicion ?>"  required>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label>País</label>
            <input class="form-control" type="text" placeholder="Ingrese País" name="InputPais" value="<?php echo $jugador->pais ?>"  required>
            </div>
            <div class="mb-2 ml-2 mr-2" >
                <label>Equipo</label>
            <input class="form-control" type="text" placeholder="Ingrese Equipo" name="InputEquipo" value="<?php echo $jugador->equipo?>"  required>
            </div>
            <input type="hidden" name="id" value= "<?php echo $jugador->id ?>">
            <input type="submit" class="btn btn-primary mb-2 ml-2" value="Registrar">

        </form>
    </div>
    </div>



<?php include '../templates/footer.php'?>