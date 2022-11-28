<?php include 'templates/header.php'?>

<?php include 'models/conexion.php';
$sentencia= $bd->query("SELECT * FROM jugadores");

$jugadores=$sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($jugadores);
?>

<style>
.div-3 {
    background-color: #fff3cd;
        
    }
    
</style>
<div class="container">
    <div class="row">
    <table class="table table-warning">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Posición</th>
      <th scope="col">País</th>
      <th scope="col">Equipo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jugadores as $dato){ ?>
    <tr>
      <th scope="row"><?php echo $dato->id ?></th>
      <td><?php echo $dato->nombre ?></td>
      <td><?php echo $dato->apellido ?></td>
      <td><?php echo $dato->edad ?></td>
      <td ><?php echo $dato->posicion ?></td>
      <td><?php echo $dato->pais ?></td>
      <td ><?php echo $dato->equipo ?></td>
      <td><a href="controllers/editar.php?id=<?php echo $dato->id ?>"  class="btn btn-primary">Editar<a href="controllers/eliminar.php?id=<?php echo $dato->id ?>"  class="btn btn-danger ml-2">Eliminar</td>
    </tr>
    <tr>
    <?php } ?>
  </tbody>
</table>
    </div>
</div>

<div class="container div-3">
    <div class="card-header">
        Ingrese los datos del jugador de fútbol
        <form action="controllers/registro.php" method="POST">
            <div class="mb-2 ml-2 mr-2">
                <label>Nombre</label>
            <input class="form-control" type="text" placeholder="Ingrese Nombre" name="InputNombre" aria-label="default input example" required>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label>Apellido</label>
            <input class="form-control" type="text" placeholder="Ingrese Apellido" name="InputApellido" aria-label="default input example" required>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label>Edad</label>
            <input class="form-control" type="number" placeholder="Ingrese Edad" name="InputEdad" aria-label="default input example" required>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label>Posición</label>
            <input class="form-control" type="text" placeholder="Ingrese Posición" name="InputPosicion" aria-label="default input example" required>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label>País</label>
            <input class="form-control" type="text" placeholder="Ingrese País" name="InputPais" aria-label="default input example" required>
            </div>
            <div class="mb-2 ml-2 mr-2" >
                <label>Equipo</label>
            <input class="form-control" type="text" placeholder="Ingrese Equipo" name="InputEquipo" aria-label="default input example" required>
            </div>
            <input type="submit" class="btn btn-primary mb-2 ml-2" value="Registrar">

        </form>
    </div>
    </br></br></br></br>
</div>

<?php include 'templates/footer.php'?>


