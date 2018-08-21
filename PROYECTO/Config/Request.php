<?php namespace Config;
//este archivo sirve para

class Request{
    private $controlador;
    private $metodo;
    private $argumento;
    
    public function __construct()
    {//el url lo sacamos del .htacces que es el archivo de configuracion que esta en la raiz del proyecto
    //el .htacces se usa para dar direccones amigables para el usuario y el navegador
    //el GET que hay alli se pone $_GET porqeu es una constante de php
        if(isset($_GET['url'])){
            $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            //explode es para separar la ruta en varios, esto debe ser un array asociativ no puede ser otra cosa
            $ruta =  explode("/", $ruta);
            //array filter es para sacar elementos de un array
            $ruta = array_filter($ruta);
            //array_shift lo que hace es ir asignando pedazo de la ruta lo vuelve minuscula y lo asigna; osea que va pasando pedazos de la ruta Models/estudiantes/estudiantes.php el primero pasa el primer nivel y asi hasta llegar a el metodo que necesitamos
            $this->controlador = strtolower(array_shift($ruta));
            $this->metodo = strtolower(array_shift($ruta));
            if(!$this->metodo){
                $this->metodo = "index";
            }
            $this->argumento = $ruta;
            
        }else{
            $this->controlador = "estudiantes";
            $this->metodo = "index";
        }
    }
    
    
     public function getControlador()
    {
       return $this->controlador;
    }
    
    public function getMetodo()
    {
        return $this->metodo;
    }
    
    public function getArgumento()
    {
        return $this->argumento;
    }
}
 

?>