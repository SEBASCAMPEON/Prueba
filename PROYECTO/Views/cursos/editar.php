<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="box-principal">
      <h3 class="titulo">Editar Secciones <hr></h3>
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Editar seccion <?php echo $datos['nombre_seccion']; ?></h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <form class="form-horizontal" action="" method="POST">
                  <div class="form-group">
                    <label for="inputEmail" class="control-label">Nombre de la seccion</label>
                    <input class="form-control" value="<?php echo $datos['nombre_seccion']; ?>" type="text" name="nombre_seccion" required>
                    </div>
                    <input value="<?php echo $datos['id_sec']; ?>" type="hidden" name="id_sec">
                            <div class="form-group">
                              <button type="submit" class="btn btn-success">Editar</button>
                              <button type="reset" class="btn btn-warning">Cancelar</button>
                              </div>
                             </form>
                             </div>
                             <div class="col-md-1"></div>
                             </div>
                             </div>
                             </div>
                             </div>


  </body>
</html>
