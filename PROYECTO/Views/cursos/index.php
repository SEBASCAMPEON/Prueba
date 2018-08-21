<div class="content">
<div class="box-principal">
<h3 class="titulo"><hr>Listado de Cursos</h3>

  <div class="panel panel-success">


    <div class="panel-heading">
      <h3 class="panel-title">Listado de Cursos</h3>
    </div>
       <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
    
      
            <th>Curso</th>

          </tr>
        </thead>
        <tbody>
        <?php

              while($row = $datos->fetch(\PDO::FETCH_ASSOC)){ ?>


          <tr>

                <td><?php echo $row['nombre_seccion']; ?></td>

                <td>
                    <a class="btn btn-warning" href="<?php echo URL; ?>cursos/editar/<?php echo $row['id_sec']; ?>">Editar</a>
                    
                </td>
                <td>
                   <a class="btn btn-danger" href="<?php echo URL; ?>cursos/eliminar/<?php echo $row['id_sec']; ?>">Eliminar</a>
                </td>
                
          </tr>

        <?php }  ?>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
</div>
