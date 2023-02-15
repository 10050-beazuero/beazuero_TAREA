<?php
class cuadrado extends figura implements formulas {
	private $lado_1;
	private $tipo;

	//constructor
	public function __construct($lado_1,$tipo){
		$this->lado_1=$lado_1;
		$this->tipo=$tipo;
	}

	//Overide
	public function area(){
		return pow($this->lado_1, 2);
	}

	public function perimetro(){
		return 4*($this->lado_1);
	}

	public function GetArea(){
		return $this->area();
	}
	public function GetPerimetro(){
		return $this->perimetro();
	}
	public function GetTipo(){
		return $this->tipo;
	}
	

}
?>
