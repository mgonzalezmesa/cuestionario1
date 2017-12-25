<?php
    include_once 'dbAbstract.php';
    
    class dbAccess{
        private $dbAbstract;
        public function dbAccess(){
            $this->dbAbstract=new dbAbstract();
        }
        public function crearConexion(){
            $this->dbAbstract->crearConexion("localhost", "cuestionario", "cuestionario", "cuestionario");
        }
		public function getIdPreguntas($dificultad){
            $this->crearConexion();
            $idPreguntas=array();
            $consulta=$this->dbAbstract->consulta("SELECT id FROM wp_preguntas WHERE dificultad='".$dificultad."'");
			for($i=0;$i<$consulta->num_rows;$i++){
				$fila=$this->dbAbstract->getResultado($consulta);
				$idPreguntas[$i]=$fila['id']; 
			}
            $this->dbAbstract->cerrarConexion();
            return $idPreguntas;
        }
        public function getPregunta($n){
            $this->crearConexion();
            $consulta=$this->dbAbstract->consulta("SELECT * FROM wp_preguntas where id=".$n);
            $fila=$this->dbAbstract->getResultado($consulta);
            $pregunta=new pregunta($fila['enunciado'],$fila['respuesta1'],$fila['respuesta2'],$fila['respuesta3'],$fila['imagen']); 
            $this->dbAbstract->cerrarConexion();
            return $pregunta;
        }
        
        
    }
