<?php namespace Config;

    //los metodos static no hay ecesidad de instanciarlo donde lo llamen para acceder a este solo basat con nombremetodo::metodo y ya
    class autoload{
        public static function run()
        {
            spl_autoload_register(function($class){
                //este str_replace se usa porque el manda \ asi que yo le digo que donde encuentre esto lo reemplace por un / ya que los nameSpace siempre usan el backslash asi que el lo pasa asi, asi que toca hacer esto... fin.
                $ruta = str_replace("\\", "/", $class ). ".php";
                require_once $ruta;//se pone require porqeu reuiere de este atributom variable o loq eus ea para funcionar asi que lo llama

                
            });            
            
        }
        
        
    }



?>
