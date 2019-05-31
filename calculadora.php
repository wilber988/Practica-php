<?php
$respuesta="";
$num1="";
$num2="";
$i="s";
echo "Bien benido a la calculadora de PHP \n";
echo "Digite el numero de la operacion que desea realizaar \n";
echo "1= Suma \n";
echo "2= Resta \n";
echo "3= Multiplicacion \n";
echo "4= Division \n";
while ($i =="s" or $i== "S") {
		# code...
	$respuesta = readline ("Que operacion desea realizar: \n ");

	if ($respuesta==1) {
		$num1 = readline("Digite su primer numero: ");
		$num2 = readline("Digiete el segundo numero: ");
		$total=$num1+$num2;
		echo "La Respuesta de su operacion es:".$total."\n";
	}
	if ($respuesta==2) {
		$num1 = readline("Digite su primer numero: ");
		$num2 = readline("Digiete el segundo numero: ");
		$total=$num1-$num2;
		echo "La Respuesta de su operacion es:".$total."\n";
	}
	if ($respuesta==3) {
		$num1 = readline("Digite su primer numero: ");
		$num2 = readline("Digiete el segundo numero: ");
		$total=$num1*$num2;
		echo "La Respuesta de su operacion es:".$total."\n";
	}
	if ($respuesta==4) {
		$num1 = readline("Digite su primer numero: ");
		$num2 = readline("Digiete el segundo numero: ");
		$total=$num1/$num2;
		echo "La Respuesta de su operacion es:".$total."\n";
	}
	$i = readline("Desea continuar con otra operacion?: S/N ");
}