<?php
    include_once 'dbAbstract.php';
    
    class dbAccess{
        private $dbAbstract;
        public function dbAccess(){
            $this->dbAbstract=new dbAbstract();
        }
        public function crearConexion(){
            $this->dbAbstract->crearConexion("localhost", "iescelia", "Icv2012", "cv_wordpress");
        }
       
        public function getPreguntas($dificultad){
			$preguntas=array();
			$this->crearConexion();
			$consulta=$this->dbAbstract->consulta("SELECT * FROM wp_preguntas WHERE dificultad='".$dificultad."'");
			for($i=0;$i<$consulta->num_rows;$i++){
                $fila=$this->dbAbstract->getResultado($consulta);
                $preguntas[$i]=new pregunta($fila['id'],$fila['enunciado'],$fila['respuesta1'],$fila['respuesta2'],$fila['respuesta3'],$fila['imagen'],$fila['dificultad']);
            }
			$this->dbAbstract->cerrarConexion();
            return $preguntas;
        }
		public function addPreguntas($pregunta){
			$mensaje=false;
			$this->crearConexion();
			if($consulta=$this->dbAbstract->consulta("INSERT INTO wp_preguntas VALUES('".$pregunta->id."','".$pregunta->enunciado."','".$pregunta->r1."','".$pregunta->r2."','".$pregunta->r3."','".$pregunta->foto."','".$pregunta->dificultad."')")){
				$mensaje=true;
			}
			$this->dbAbstract->cerrarConexion();
			return $mensaje;
		}
		public function getIdPregunta(){
            $this->crearConexion();
            $idPregunta;
            $consulta=$this->dbAbstract->consulta("SELECT  MAX(id) FROM wp_preguntas");
            $fila=$this->dbAbstract->getResultado($consulta);
            $idPregunta=$fila["MAX(id)"]; 
            $this->dbAbstract->cerrarConexion();
            return $idPregunta;
        }
		public function borrarPregunta($id){
			$mensaje=false;
			$this->crearConexion();
			if($consulta=$this->dbAbstract->consulta("DELETE FROM wp_preguntas WHERE id='".$id."'")){
				$mensaje=true;
			}
			$this->dbAbstract->cerrarConexion();
			return $mensaje;
		}
		
		public function editarPregunta($pregunta){
			$mensaje=false;
			$this->crearConexion();
			if($consulta=$this->dbAbstract->consulta("UPDATE wp_preguntas SET enunciado='".$pregunta->enunciado."',respuesta1='".$pregunta->r1."',respuesta2='".$pregunta->r2."',respuesta3='".$pregunta->r3."',imagen='".$pregunta->foto."',dificultad='".$pregunta->dificultad."' WHERE id='".$pregunta->id."'")){
				$mensaje=true;
			}
			$this->dbAbstract->cerrarConexion();
			return $mensaje;
		}
		
		 public function getAllPreguntas(){
			$preguntas=array();
			$this->crearConexion();
			$consulta=$this->dbAbstract->consulta("SELECT * FROM wp_preguntas ");
			for($i=0;$i<$consulta->num_rows;$i++){
                $fila=$this->dbAbstract->getResultado($consulta);
                $preguntas[$i]=new pregunta($fila['id'],$fila['enunciado'],$fila['respuesta1'],$fila['respuesta2'],$fila['respuesta3'],$fila['imagen'],$fila['dificultad']);
            }
			$this->dbAbstract->cerrarConexion();
            return $preguntas;
        }
        
        
    }
