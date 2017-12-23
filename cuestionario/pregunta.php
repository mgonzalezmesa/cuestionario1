<?php

class pregunta{
    public $enunciado;
    public $r1;
    public $r2;
    public $r3;
	public $foto;
    
    public function __construct($e,$res1,$res2,$res3,$foto) {
            $this->enunciado=$e;
            $this->r1=$res1;
            $this->r2=$res2;
            $this->r3=$res3;
			$this->foto=$foto;
    }
            

      
}   