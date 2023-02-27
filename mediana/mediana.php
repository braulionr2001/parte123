<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$numeros = array();
	for ($i = 1; $i <= 10; $i++) {
		if (!empty($_POST['numero'.$i])) {
			$numeros[] = $_POST['numero'.$i];
		}
	}
	sort($numeros);
	$count = count($numeros);
	$mediana = 0;
	if ($count % 2 == 0) {
		$mediana = ($numeros[$count/2-1] + $numeros[$count/2]) / 2;
	} else {
		$mediana = $numeros[($count-1)/2];
	}
	echo "La mediana de los números ingresados es: ".$mediana;
}
?>
