<?php namespace Views\Templates;
    $template =  new template();
    class template{
      public function __construct()
      {
?>
        <!DOCTYPE html>
        <html>
          <head>
            <meta charset="utf-8">
            <title>Administración de Estudiantes - ADSI</title>
            <link rel="stylesheet" href="<?php echo URL; ?>Views/Templates/css/bootstrap.css">
            <link rel="stylesheet" href="<?php echo URL; ?>Views/Templates/css/general.css">
          </head>
          <body>
            <div class="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toogle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" name="button">
                      <span class="sr-only"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Administración de Estudiantes</a>
                  </div>
                <div class="collapse navbar-collapse Barra" id="#bs-example-navbar-collapse-2">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo URL; ?>">Inicio</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estudiantes</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo URL; ?>estudiantes">Listados</a></li>
                        <li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Secciones</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo URL; ?>cursos">Listados</a></li>
                        <li><a href="<?php echo URL; ?>cursos/agregar">Agregar</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://cbisenapalmira.blogspot.com.co/">CBI-ADSI</a></li>
                  </ul>
                </div>
              </div>
            </nav>
<?php
      }
      public function __destruct()
      {
?>
        <footer class="navbar navbar-fixed-bottom">
            <div>Curso PHP, PDO, Postgres 2016</div>
          <div>ADSI 2016</b></div>
        </footer>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="<?php echo URL; ?>Views/Templates/js/bootstrap.js">

        </script>
        </div>
        </body>
        </html>
<?php
      }
    }
?>