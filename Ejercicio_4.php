<meta charset="utf-8"/>
<?php
$numero = 1;
$contador= 2;
$cont2 = 26;
	while($contador <=$cont2){

		// $numero =$numero * $contador;
		$numero *= $contador;
echo $numero."<br/>";

$contador++;
	}

echo "El resultado de multiplicar los ".$cont2." primeros numeros es ".$numero;


?>