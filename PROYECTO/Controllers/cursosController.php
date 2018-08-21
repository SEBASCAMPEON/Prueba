<?php namespace Controllers;
    //con use lo que hago es incluir ago de otra parte del proyecto en mi archivo actual y poder acceder a esta clase
    use Models\Curso as Curso;
    class cursosController{
        //Atributos
        private $curso;
        
        //Metodos
        public function __construct()
        {
            $this->curso = new Curso();    
        }
        public function index()
        {
            $datos = $this->curso->listar();
            return $datos;
        }      
        
        public function agregar(){

  if ($_POST) {
    $this->curso->set("nombre_seccion", $_POST['nombre_seccion']);
    $this->curso->add();
    header("location: " . URL . "cursos");
  }
}

public function editar($id){

  if ($_POST) {
    $this->curso->set("id_sec", $_POST['id_sec']);
    $this->curso->set("nombre_seccion", $_POST['nombre_seccion']);
    $this->curso->edit();
    header("location: " . URL . "cursos");
  }else{

    $this->curso->set2("id_sec", $id);
    $datos = $this->curso->view();
    return $datos;
  }
}

public function eliminar($id){
  $this->curso->set2("id_sec",$id);
  $this->curso->delete();
  header("location: " . URL . "cursos");
}

}

?>