<?php namespace Models;
class Conexion{
    private $user = "postgres";
    private $pass = "1234";
    private $con;
    
    public function __construct()
    {
        $this->con = new \PDO('pgsql:host=localhost;port=5432;dbname=proyecto', $this->user, $this->pass);
    }
    
    public function consultaSimple($sql){
        //exec se usa cuando  la consulta no retorna nada, cada que quiera utilizar una consulta que n retorna valores uso exec($sql) esto es el codigo generico para que reciba a consulta o solicitud
        echo $this->con->exec($sql);
    }
    public function consultaRetorno($sql){
        //cuando realizamos un sql que retorna algo se usa query()
        $datos = $this->con->query($sql);
        return $datos;
    }
    
}
?>
