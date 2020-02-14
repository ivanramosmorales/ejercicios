<meta charset="utf-8"/>
<?php
$numero = 1;
$contador= 2;
	while($contador <=20){

		// $numero =$numero * $contador;
		$numero *= $contador;
echo $numero."<br/>";

$contador++;
	}

echo "El resultado de multiplicar los 20 primeros numeros es ".$numero;


?>