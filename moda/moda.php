<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $num3 = $_POST["num3"];
  $num4 = $_POST["num4"];
  $num5 = $_POST["num5"];
  $num6 = $_POST["num6"];
  $num7 = $_POST["num7"];
  $num8 = $_POST["num8"];
  $num9 = $_POST["num9"];
  $num10 = $_POST["num10"];

  $num_array = array($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10);
  $num_freq = array_count_values($num_array);

  $max_freq = max(array_values($num_freq));

  $moda = array_keys($num_freq, $max_freq);

  if (count($moda) == 1) {
    echo "La moda es: " . $moda[0];
  } else {
    echo "Las modas son: ";
    foreach ($moda as $m) {
      echo $m . " ";
    }
  }
}
?>
