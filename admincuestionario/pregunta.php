<?php

class pregunta{
	public $id;
    public $enunciado;
    public $r1;
    public $r2;
    public $r3;
	public $foto;
	public $dificultad;
    
    public function __construct($id,$e,$res1,$res2,$res3,$foto,$dificultad) {
			$this->id=$id;
            $this->enunciado=$e;
            $this->r1=$res1;
            $this->r2=$res2;
            $this->r3=$res3;
			$this->foto=$foto;
			$this->dificultad=$dificultad;
    }
               
}   