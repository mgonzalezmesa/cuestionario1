<?php

class dbAbstract{
    private $db;
    
    public function crearConexion($servidor,$usuario,$clave,$dbname){
        $this->db=new mysqli($servidor,$usuario,$clave,$dbname);
		//codificacion en caracteres uft8
		$this->db->set_charset("utf8");
    }
    
    public function cerrarConexion(){
        $this->db->close();
    }
    
    public function consulta($sql){
        return $this->db->query($sql);
    }
    
    public function getResultado($resultado){
        return $resultado->fetch_assoc();
    }
}
