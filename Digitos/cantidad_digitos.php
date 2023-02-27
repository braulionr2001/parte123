<!DOCTYPE html>
<html>
<head>
	<title>Cantidad de dígitos de un número</title>
</head>
<body>
<?php
	if(isset($_POST['numero'])){
		$numero = $_POST['numero'];
		$cantidad_digitos = strlen($numero);
		echo "El número ingresado tiene ".$cantidad_digitos." dígitos.";
	}
?>
</body>
</html>
