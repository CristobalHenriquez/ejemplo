<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
 <meta charset="utf-8">
 
 <title></title>
 </head>
 <body>
<h1>punto 1</h1>
<h2>"Hola Mundo"</h2>
<br>
<hr>
<h1>punto 2</h1>
<?php
$mensaje = "Hola Mundo";
echo $mensaje;
?>
<br>
<hr>
<h1>punto 3</h1>
<h3>suma</h3>
<?php
$cajas = 100;
$pales = 20;
echo $cajas + $pales;
?>
<br>
<hr>
<h3>resta</h3>
<?php
$cajas = 100;
$pales = 20;
echo $cajas - $pales;
?>
<br>
<hr>
<h3>multiplicacion</h3>
<?php
$cajas = 100;
$pales = 20;
echo $cajas * $pales;
?>
<br>
<hr>
<h3>division</h3>
<?php
$cajas = 100;
$pales = 20;
echo $cajas / $pales;
?>
<br>
<hr>
<h3>resto</h3>
<?php
$cajas = 100;
$pales = 20;
echo $cajas % $pales;
?>
<br>
<hr>
<h1>punto 4</h1>
<?php
function CelciusAFahrenheit($centigrados)
{
    return $centigrados * 9 / 5 + 32;
}
$centigrados = 20;
$fahrenheit = CelciusAFahrenheit($centigrados);
echo "Los $centigrados grados centígrados equivalen a $fahrenheit grados fahrenheit";
?>
<br>
<hr>
<h1>punto 5</h1>
<h3>a) perimetro </h3>
<?php
$base=18;
$altura=12;
$perimetro=(2 * $base) + (2 * $altura);
echo "El perimetro del rectangulo es  $perimetro";
 ?>
<h3>a) area </h3>
<?php
$base=18;
$altura=12;
$area=$base * $altura;
echo "El area del rectangulo es  $area";
 ?>
 <br>
 <hr>
 <h3>b) perimetro </h3>
 <?php
 $radio=30;
 $py=3.14;
 $diametro=2;
 $perimetro=($radio * $py) * $diametro;
 echo "El perimetro de circulo es  $perimetro";
 ?>
  <h3>b) area </h3>
  <?php
  $radio=30;
  $py=3.14;
  $area=($radio * $radio)* $py;
  echo "El area del circulo es  $area";
  ?>
  <br>
  <hr>
  <h1>Alumno Cristobal Henriquez potrero digital backend </h1>
  <hr>
 </body>
</html>
