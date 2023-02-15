<?php
class triangulo extends figura implements formulas{

	private $lado_1;
	private $lado_2;
	private $lado_3;
	private $tipo;
	//private $area=NULL;
	private $perimetro = NULL;

	//Constructor
	function __construct($lado_1,$lado_2,$lado_3,$tipo){
		$this->lado_1 = $lado_1;
		$this->lado_2 = $lado_2;
		$this->lado_3 = $lado_3;
		$this->perimetro = $this->lado_1 + $this->lado_2 + $this->lado_3;
		$this->tipo=$tipo;
	}
	//Overide
		public function area(){
		return (sqrt(
   ($this->perimetro/2) *
   (($this->perimetro/2) - $this->lado_1) *
   (($this->perimetro/2) - $this->lado_2) *
   (($this->perimetro/2) - $this->lado_3)));
	}

	public function perimetro(){
		return $this->perimetro;
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

