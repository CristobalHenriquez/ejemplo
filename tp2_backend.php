<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
 <meta charset="utf-8">

 <title></title>
 </head>
 <body>
<h1>punto 1</h1>
<?php
$numero = 58;
if ($numero > 0) {
  echo "El numero es positivo";
}
else {
  echo "El numero es negativo";
}
?>
<br>
<hr>
<h1>punto 2</h1>
<?php
$numero = 8;
if ($numero > 1 and $numero <10) {
  echo " Este numero pertenece al rango proporcionado";
}
else {
  echo " Este numero no pertenece al rango proporcionado";
}
?>
<br>
<hr>
<h1>punto 3</h1>
<?php
$numero = 1;
if ($numero > 10 or $numero < 2) {
  echo " Este numero cumple la condicion solicitada";
}
else {
  echo " Este numero no cumple la condicion solicitada";
}
?>
<h1>punto 4</h1>
<?php
$numero1 = 150;
$numero2 = 550;
if ($numero1 > $numero2) {
  echo " La suma  de estos es ",($numero1 + $numero2);
  echo ", La resta  de estos es ",($numero1 - $numero2);
}
elseif ($numero2 > $numero1) {
  echo " La multiplicacion  de estos es ",($numero2 * $numero1);
  echo ", La divicion  de estos es ",($numero2 / $numero1);
  echo ", El resto  de estos es ",($numero2 % $numero1);
}
else {
  echo " Los numeros ingresados son iguales";
}
?>

  <br>
  <hr>
  <h1>Alumno Cristobal Henriquez Potrero Digital Backend 2022</h1>
  <hr>
 </body>
</html>
