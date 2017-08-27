<?php
class archivo{
	
	public $id;
	public $numero;
	public $x;
	public $y;
	//tour
	public function __construct($id, $numero, $x, $y){
	
		$this->id 	  = $id;
		$this->numero = $numero;
		$this->x 	  = $x;
		$this->y 	  = $y;
		
	}
} 