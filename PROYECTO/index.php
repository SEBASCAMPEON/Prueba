<?php 
    //la directiva define se usa para crear constantes se crea la constante DS, este lo que hace es un slash osea que al conacternar con a constante root solo se le agrega un slash
    define ('DS', DIRECTORY_SEPARATOR);
    //en esta constante vamos a almacenar la ruta o url e realpath me devueve la ruta completa o basoluta donde esta el archivo; el __FILE__ me devuelve hasta llegar al archivo; a el directorio en el que me encuentro en el momento; y el dirname la ruta tambien pero hasta la carpeta no muestra el nombre del archivo solo el directorio.
    define ('ROOT',realpath(dirname(__FILE__))  . DS);
    define ('URL', "http://localhost/PROYECTO/");
    
  //echo "el valor de DS ". DS . "<br>";
  //echo "File" . __FILE__ . "<br>"; 
   //echo "dir" . dirname(__FILE__) . "<br>";
   //  echo "real" . realpath(dirname(__FILE__)) . "<br>";     
    //Aqui le paso el requerido para que funcione osea el autoload
    require_once "Config/autoload.php";
    Config\autoload::run();
    require_once "Views/Templates/template.php";
    Config\enrutador::run(new Config\Request());
    
    
   // print_r($_GET['url']);
 

    /*
    //esta linea tiene que ver con al autoload en dond dice $class el lo reemplaza con la clase Estudiante.
    
    $est = new Models\Estudiante();
    $est->set("id", 1);
    $datos = $est->view();
    print '<h1 style="font-family: sans-serif; color: darkblue; font-weight: bold; border-bottom: 1px solid darkblue; text-transform: uppercase;">'."nombre: ".$datos['nombre'].'</h1>';
     print '<h1 style="font-family: sans-serif; color: darkblue; font-weight: bold; border-bottom: 1px solid darkblue; text-transform: uppercase;">'."edad: ".$datos['edad'].'</h1>';
     print '<h1 style="font-family: sans-serif; color: darkblue; font-weight: bold; border-bottom: 1px solid darkblue; text-transform: uppercase;">'."promedio: ".$datos['promedio'].'</h1>';
     print '<h1 style="font-family: sans-serif; color: darkblue; font-weight: bold; border-bottom: 1px solid darkblue; text-transform: uppercase;">'."fecha: ".$datos['fecha'].'</h1>';
     print '<h1 style="font-family: sans-serif; color: darkblue; font-weight: bold; border-bottom: 1px solid darkblue; text-transform: uppercase;">'."idSeccion: ".$datos['id_sec'].'</h1>';
      print '<h1 style="font-family: sans-serif; color: darkblue; font-weight: bold; border-bottom: 1px solid darkblue; text-transform: uppercase;">'."Nombre seccion: ".$datos['id_sec'].'</h1>';
    
*/
    


?>