	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$numero = $_POST["numero"];
			$raiz_cuadrada = sqrt($numero);
			echo "<p>La raíz cuadrada de $numero es: $raiz_cuadrada</p>";
		}
	?>