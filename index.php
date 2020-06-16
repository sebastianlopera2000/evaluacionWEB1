<?php

//Taller punto 1
/*$numero1=40;
$numero2=50;

$suma=$numero1+$numero2;
    echo("La suma de 40+50 es igual a: ".$suma);
    echo("<br>");
$resta=$numero1-$numero2;
    echo("La resta de 40-50 es igual a: ".$resta);
    echo("<br>");
$multi=$numero1*$numero2;
    echo("La multiplicacion de 40x50 es igual a: ".$multi);
    echo("<br>");
$dividir=$numero1/$numero2;
    echo("La division de 40/50 es igual a: ".$dividir);*/

//Taller punto 2
/*$peso=82;
$altura=1.76;

$imc=$peso/($altura*$altura);
echo("Tu indice de masa corporal es: ".$imc);
echo("<br>");

if($imc < 18.5)
{
    echo("Tienes un BAJO PESO, Porfavor alimentate mas");
}
else if ($imc<=24.9)
{
    echo("Tienes un PESO NORMAL,¡Felicitaciones!");
}
else if($imc<=29.9)
{
    echo("Tienes SOBRE PESO, Cuida mas tu alimentacion");
}
else if($imc==30)
{
    echo("Tienes OBESIDAD, ten cuidado y alimentate mejor");
}
else if ($imc<=34.9)
{
    echo("Tienes OBESIDAD TIPO 1, Cuida tu alimentacion");
}
else if($imc<=39.5)
{
    echo("Tienes OBESIDAD TIPO 2, COMIENZA UNA DIETA URGENTE");
}
else if($imc==40)
{
    echo("Tienes OBESIDAD TIPO 3, CUIDATE BASTANTE");
}*/
//Taller punto 3
/*$cantitenis=5;
$tenis=$cantitenis*150000;

//El 10% de 750.000 es 75.000
$descuento1=$tenis-75000;
//El 20% de 750.000 es 150.000
$descuento2=$tenis-150000;
//El 40% de 750.000 es 300.000
$descuento3=$tenis-300000;
if($cantitenis==3){
    echo("Tu compra tiene un valor total de:".$descuento1);
}
else if($cantitenis<=5){
    echo("Tu compra tiene un valor total de:".$descuento2);
}
else if($cantitenis>5){
    echo("Tu compra tiene un valor total de:".$descuento3);
}*/
//Taller punto 4
/*$horastrabajadas=36;

if($horastrabajadas<40){
    $calculo1=$horastrabajadas*20000;
    echo("Su salario es:".$calculo1);
}
else if($horastrabajadas>40){
    $calculo2=$horastrabajadas*25000;
    echo("Su salario es: ".$calculo2);
}*/
//Taller punto 5
$arreglo=array("banano","manzana","durazno","piña","naranja","lulo");
$salpicon=array('dulce1'=>"banano", 'dulce2'=>"manzana", 'dulce3'=>"durazno", 'acido1'=>"piña", 'acido2'=>"naranja", 'acido3=> "lulo');
print_r($salpicon)





?>