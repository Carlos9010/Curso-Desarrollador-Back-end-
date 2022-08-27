<!DOCTYPE html>
<html lang="es">


<head>
  
  <meta charset="UFT-8">
  <meta name="viewport" content="width=device-with, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejemplo PHP</title>
  </head>

  <body>

<?php
 //echo "Mi primer ejemplo en php y más";
?>

<?php
/*$valor1=true;
$valor2 =false;
if($valor1 and $valor2) {
echo “Ambos valores son verdaderos”;
}
else{
echo “Alguno de los valores es falso”;
}
else{
  echo “Ambos valores son falsos”;
  }
  if($valor1 or $valor2) {
  echo “Alguno de los valores es verdadero”
  }*/
  ?>

<?php
/*$variable="mio";
$numero=5;
//$somenamer = "nobodyr";
// Now we want to use $somename  somewhere
//echo $somemane ;
echo "Número ".$numero." este";*/
?>

<?php
/*$a = 3;
$b = &$a; // $b es una referencia para $a

print "$a\n"; // muestra 3
print "$b\n"; // muestra 3

$a = 4; // cambia $a

print "$a\n"; // muestra 4
print "$b\n"; // muestra 4 también, dado que $b es una referencia para $a, la cual ha
              // sido cambiada*/
?>


<?php
/*$valor1 = 10;
$valor2 = 20;
if($valor1==$valor2) {
echo "Los valores son iguales" ;
}
else if($valor1 > $valor2) {
echo "El valor 1 es mayor que el valor 2";
}
else if($valor1 < $valor2) {
print "El valor 2 es mayor que el valor 1";
}

echo ++$valor1;*/
?>

<?php
$colors = array("rojo", "azul", "verde", "amarillo");

foreach ($colors as $color) {
    echo "¿Le gusta el $color?.<br>";
}

echo ""."<br>";

?>

<?php
$firstquarter  = array(1 => 'Enero', 'Febrero', 'Marzo');
print_r($firstquarter);
?>

<?php
//Este código no funciona.
/*
$edades[3];
$edades(0)=34;
$edades(1)=7;
$edades(2)=43;
//$edades("90", "12", "3");
foreach ($edades as $edad) {
  echo "¿La edad es $edad?\n";
}*/
?>

</body>

</html>