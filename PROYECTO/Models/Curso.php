<?php namespace Models;
//el nombre de la clase debe coincidir con el nombre del archivo
    class Curso{
        private $id_sec;
        private $nombre_seccion;
        private $con;
        
   //crear objeto de una clase $seccion = new Curso() crear un objeto de la clase Curso....     
    
    //metodos para el CRUD
    public function __construct(){
        $this->con = new Conexion();
        // aqui le estoy diciendo que la variable con es  una instancia de la clase Conexion() dandole todos sus atributos
        //de esta forma se incluyen los metodos de otra clase para usarlos en la actual... lo que tambien permite esto es el namesapace y los autoloads
    }
    
    
    public function set($atributo, $contenido){
        $this->$atributo = $contenido;
        
    }
    public function set2($atributo, $contenido){
    $this->$atributo = $contenido[0];
        
    }
    
    public function get($atributo){
        return $this->$atributo;
        
    }
    
    
    public function listar(){
        $sql ="select s.* from secciones s order by s.nombre_seccion asc;";
        $result = $this->con->consultaRetorno($sql); 
        return $result;
    }
    
    public function add(){
        $sql ="insert into secciones (nombre_seccion) values ('{$this->nombre_seccion}')";
        $result=$this->con->consultaSimple($sql);
    }
    
    public function delete(){
        $sql="delete from secciones where id_sec = {$this->id_sec}";
        $result=$this->con->consultaSimple($sql);
        
        
    }
    public function edit(){
        $sql="update secciones set nombre_seccion = '{$this->nombre_seccion}' where id_sec = {$this->id_sec}";
        $result=$this->con->consultaSimple($sql);

    }
    public function view(){
        $sql = "select * from secciones  where id_sec = {$this->id_sec}";
        $result = $this->con->consultaRetorno($sql);
        $row = $result->fetch(\PDO::FETCH_ASSOC);
        return $row; 
    }
}

//la creacion de metodos es bastante simple aqui ponemos el rest

?>