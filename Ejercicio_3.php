<?php

for($i = 1; $i<=30; $i++){
	
$cuadrado =$i*$i;

	echo "El cuadrado de ".$i." es ".$cuadrado;

	if ($cuadrado%2 == 0) {
		echo " Y es par ";
	}else{
		echo " Y es impar ";
	}

echo "<br/>";
		# code...
	}


?>