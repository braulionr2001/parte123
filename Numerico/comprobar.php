<!DOCTYPE html>
<html>
<head>
   <title>Resultado</title>
</head>
<body>
   <?php
   $caracter = $_POST["caracter"];

   if (ctype_alpha($caracter)) {
      if (ctype_upper($caracter)) {
         echo "<p>El carácter ingresado es una letra mayúscula.</p>";
      } else {
         echo "<p>El carácter ingresado es una letra minúscula.</p>";
      }
   } elseif (ctype_digit($caracter)) {
      echo "<p>El carácter ingresado es un número.</p>";
   } else {
      echo "<p>El carácter ingresado no es ni una letra ni un número.</p>";
   }
   ?>
</body>
</html>




