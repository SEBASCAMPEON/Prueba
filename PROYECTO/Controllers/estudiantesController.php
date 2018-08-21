<?php namespace Controllers;
    //con use lo que hago es incluir algo de otra parte del proyecto en mi archivo actual y poder acceder a esta clase
    use Models\Estudiante as Estudiante;
    use Models\Curso as curso;
    class estudiantesController{
        //Atributos
        private $estudiante;
        private $curso;
        
        //Metodos
        public function __construct()
        {
            $this->estudiante = new Estudiante();
            $this->curso = new Curso();       
        }
        public function index()
        {
            $datos = $this->estudiante->listar();
            return $datos;
        }
        public function agregar(){
            
            if(!$_POST){
            $datos = $this->curso->listar();
            return $datos;
            }else{
                //$_FILES es una palabra de php todo esto es codigo propio de php
            $permitidos =  array("image/jpeg", "image/png", "image/gif", "image/jpg");
            $limite = 700;
            if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size']<= $limite * 1024)
            {
            //date() es una funcion de php aqui lo que hago es que capture la fecha en la que se sube la imagen, con eso le decimos que tome minutos y segundos
            $nombre = date('is') . $_FILES['imagen']['name'];  
            //en este caso no se usa URL porque no es un archivo para cargar si no una ruta para guardar
            $ruta = "Views" . DS . "Templates" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
            //move_uploaded_file tambien es una palabra reservada de php para mover el archivo adjunto
            move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
            $this->estudiante->set("nombre", $_POST['nombre']);
            $this->estudiante->set("edad", $_POST['edad']);
            $this->estudiante->set("promedio", $_POST['promedio']);
            $this->estudiante->set("imagen", $nombre);
            $this->estudiante->set("id_sec", $_POST['id_sec']);
            $this->estudiante->add();
            
            header("location: " . URL . "estudiantes");
            }
        }
        
        
        } 
    
    public function listarCursos(){

     $datos = $this->curso->listar();
     return $datos;
        }
        
  public function editar($id){

  if (!$_POST) {
    $this->estudiante->set1("id", $id);
    $datos = $this->estudiante->view();
    return $datos;
  }else{

    $this->estudiante->set("id", $_POST['id']);
    $this->estudiante->set("nombre", $_POST['nombre']);
    $this->estudiante->set("edad", $_POST['edad']);
    $this->estudiante->set("imagen", $_POST['imagen']);
    $this->estudiante->set("promedio", $_POST['promedio']);
    $this->estudiante->set("id_sec", $_POST['id_sec']);
    $this->estudiante->edit();
    header("location: " . URL . "estudiantes");
  }

}




public function eliminar($id){

    $this->estudiante->set1("id",$id);
    $this->estudiante->delete();
    header("location: " . URL . "estudiantes");

  }

    
    
    }
    
    //$estudiantes = new estudiantesController();//esto ya no es necesario por que ya igualamos $datos a el resultado de call_func asi que ya no se necesita pasarlo en el index.php




?>