
<?php 
use Controllers\estudiantesController as Estudiante;
$estudiante = new Estudiante();
$cursos = $estudiante->listarCursos(); ?>

<div class="content">
<div class="box-principal">
<h3 class="titulo">Editar Estudiante <?php echo $datos['nombre'];?><hr></h3>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Editar Estudiante<?php echo $datos['nombre'];?></h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <img class="img-responsive" src="<?php echo URL; ?>Views/Templates/imagenes/avatars/<?php echo $datos['imagen'];?>" />
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <form class="form-horizontal" action="" method="POST">
              <div class="form-group">
                <label for="inputEmail" class="control-label">Nombre del Estudiante</label>
                  <input class="form-control" type="text" value="<?php echo $datos['nombre'];?>" name="nombre" required>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label">Edad</label>
                  <input class="form-control" type="number" value="<?php echo $datos['edad'];?>" name="edad" required>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label">Promedio</label>
                  <input class="form-control" type="number" value="<?php echo $datos['promedio'];?>" name="promedio" required>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label">Sección (<b>Sección Actual: <?php echo $datos['id_sec']; ?></b>)</label>
                  <select name="id_sec" class="form-control">
                    <?php while($row = $cursos->fetch(\PDO::FETCH_ASSOC)){ ?>
                      <option value="<?php echo $row['id_sec']; ?>"><?php echo $row['nombre_seccion']; ?></option>
                    <?php } ?>
                  </select>
              </div>
<input value="<?php echo $datos['id']; ?>" type="hidden" name="id" required>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Editar</button>
                <button type="reset" class="btn btn-warning">Cancelar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
