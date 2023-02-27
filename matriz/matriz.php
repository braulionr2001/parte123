<?php
        // Crear matriz de 3x3 con números del 1 al 9
        $matriz = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );

        // Función para rotar la matriz 90 grados en sentido contrario a las agujas del reloj
        function rotate90(&$matriz) {
            $matriz = array_map(null, ...$matriz);
            $matriz = array_map('array_reverse', $matriz);
        }

        // Función para rotar la matriz 180 grados en sentido contrario a las agujas del reloj
        function rotate180(&$matriz) {
            $matriz = array_reverse(array_map('array_reverse', $matriz));
        }

        // Función para rotar la matriz 270 grados en sentido contrario a las agujas del reloj
        function rotate270(&$matriz) {
            $matriz = array_reverse(array_map(null, ...$matriz));
        }

        // Función para rotar la matriz 360 grados en sentido contrario a las agujas del reloj (es lo mismo que no hacer nada)
        function rotate360(&$matriz) {
            // No hacer nada
        }

        // Obtener la acción del botón enviado por el formulario
        if (isset($_POST['accion'])) {
            $accion = $_POST['accion'];
            switch ($accion) {
                case '90':
                    rotate90($matriz);
                    break;
                case '180':
                    rotate180($matriz);
                    break;
                case '270':
                    rotate270($matriz);
                    break;
                case '360':
                    rotate360($matriz);
                    break;
            }
        }

        // Mostrar la matriz en la tabla HTML
        foreach ($matriz as $fila) {
            echo '<tr>';
            foreach ($fila as $valor) {
                echo '<td>' . $valor . '</td>';
            }
            echo '</tr>';
        }
    ?>