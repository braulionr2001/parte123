
	<?php
		if(isset($_POST['numero'])) {
			$numero = $_POST['numero'];
			$matriz = array();

			// Llenar la matriz con valores aleatorios
			for($i=0; $i<$numero; $i++) {
				for($j=0; $j<$numero; $j++) {
					$matriz[$i][$j] = rand(0, 9);
				}
			}

			// Mostrar la matriz en pantalla
			echo "<table>";
			for($i=0; $i<$numero; $i++) {
				echo "<tr>";
				for($j=0; $j<$numero; $j++) {
					echo "<td>" . $matriz[$i][$j] . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "<p>Debe ingresar un número.</p>";
		}
	?>