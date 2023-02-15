<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '<div class="col-auto text-center">
			<div>
			<form name="figuras" method="POST" action="">
			<table border=0>
				<tr>
					<th colspan="3">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td style="width:50px;"></td>
					<td>
						<select class="form-select" name="tipo">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td></td>
					<td><input class = "form-control-sm" type="text" name="lado_1"></td>
				</tr>
				<tr>
					<td>Lado 2: </td>
					<td></td>
					<td><input class = "form-control-sm" type="text" name="lado_2"></td>
				</tr>
				<tr>
					<td>Lado 3: </td>
					<td></td>
					<td><input class = "form-control-sm" type="text" name="lado_3"></td>
				</tr>							
				<tr>
					<th colspan="3" class="text-center"><input type="submit" name="calcular" value="Calcular" class="btn btn-success"></th>
				</tr>
			</table>
			</form></div>';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
