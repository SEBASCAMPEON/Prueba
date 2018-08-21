<?php namespace Config;

    class enrutador{
        //Los namesspace nos permiten crear metodos y atributos con nombres iguales, siempre y cuando esten en el mismo namespace pero en un clase diferente por eso
        //hay una funcion estatica llamada run en autoload y tambien una con el mismo nombre en enrutadorm estan en clases 
        //diferentes pero co le mismo namesapce que es Config
        public static function run(Request $request)//esta es otra forma de crear un objeto o instanciar una clase  public static 'function nombre(Class classobject)'.
        {
            $controlador = $request->getControlador() . "Controller";
            print $controlador;
            $ruta = ROOT . "Controllers" . DS . $controlador . ".php";
            $metodo = $request->getMetodo();
            $argumento = $request->getArgumento();
            if(is_readable($ruta)){
                require_once $ruta;
                //siempre los namespace van seguidos con \\ osea que Controllers es el namespace de los archivos de la carpeta Controllers
                $mostrar = "Controllers\\" .  $controlador;
                $controlador = new $mostrar;
                if(!isset($argumento)){
                   $datos = call_user_func(array($controlador, $metodo));
                }
                else{
                   $datos = call_user_func(array($controlador, $metodo), $argumento);
                }
                

                
            }
            
            //ROOT guarda la ruta hasta la raiz del proyecto
            
            $ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
            if(is_readable($ruta)){
                require_once $ruta;
            }else{
                print "No se puede encontrar la ruta";
            }
            
           
        }
    } 





?>