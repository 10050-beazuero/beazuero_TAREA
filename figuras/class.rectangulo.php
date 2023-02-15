<?php
class rectangulo extends figura implements formulas{

	private $lado_1;
	private $lado_2;
	private $tipo;

	//Constructor
	function __construct($lado_1,$lado_2,$tipo){
		$this->lado_1 = $lado_1;
		$this->lado_2 = $lado_2;
		$this->tipo=$tipo;
	}
	//Overide
	public function area(){
		return $this->lado_1 * $this->lado_2;
	}

	public function perimetro(){
		return 2*($this->lado_1 + $this->lado_2);
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
