<?php namespace Models;
//el nombre de la clase debe coincidir con el nombre del archivo
    class Estudiante{
        private $id;
        private $nombre;
        private $edad;
        private $promedio;
        private $imagen;
        private $id_sec;
        private $fecha;
        private $con;
        
        public function __construct(){
        $this->con = new Conexion();
        // aqui le estoy diciendo que la variable con es  una instancia de la clase Conexion() dandole todos sus atributos
        //de esta forma se incluyen los metodos de otra clase para usarlos en la actual... lo que tambien permite esto es el namesapace y los autoloads
    }
        
   //crear objeto de una clase $estudiante = new Estudiante() crear un objeto de la clase Estudiante....     
    
    //metodos para el CRUD
    
    
    public function hola(){
        echo '<h3>Hola</h3>';
    }
    public function mensaje(){
        echo '<header style="background-color:black; color:white; font-family: sans-serif; text-align:center; font-size:2em;"><strong>Hola soy una prueba ya que Sebastian estaba aburrido asi que me hizo para matar el tiempo</strong></header>';
    }

    public function set($atributo, $contenido){
        $this->$atributo = $contenido;

        
    }
    public function set1($atributo, $contenido){
    $this->$atributo = $contenido[0];

        
    }
    
    public function get($atributo){
        return $this->$atributo;
        
    }
    
    
    public function listar(){
        $sql ="select * from estudiantes e inner join secciones s on s.id_sec = e.id_sec";
        $result = $this->con->consultaRetorno($sql); 
        return $result;
    }
    
    public function add(){
        $sql ="insert into estudiantes (nombre, edad, promedio, imagen, id_sec)values('{$this->nombre}', {$this->edad}, {$this->promedio},  '{$this->imagen}', {$this->id_sec})";
        $result=$this->con->consultaSimple($sql);
    }
    
    public function delete(){
        $sql="delete from estudiantes where id = {$this->id}";
        $result=$this->con->consultaSimple($sql);
        
        
    }
    public function edit(){
        $sql="update estudiantes set nombre = '{$this->nombre}', edad = {$this->edad}, promedio = {$this->promedio}, id_sec = {$this->id_sec} where id = {$this->id}";
        $result=$this->con->consultaSimple($sql);

    }
    public function view(){
        $sql = "select e.* from estudiantes e inner join secciones s on s.id_sec = e.id_sec where e.id = '{$this->id}'";
        $result = $this->con->consultaRetorno($sql);
        $row = $result->fetch(\PDO::FETCH_ASSOC);
        return $row; 
    }
}

?>