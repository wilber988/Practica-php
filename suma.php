<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Suma de 2 numeros en PHP</title>
</head>
<body>
<H2>Suma de 2 numeros en PHP</H2>
<form action="suma.php" method="POST">
	<table>
	<tr>
		<td><input type="text" name="numero1"></td>
	</tr>
	<tr>
		<td><input type="text" name="numero2"></td>
	</tr>
	<tr>
		<td> <input type="submit" value="sumar"> </td>
	</tr>
</table>
</form>
</body>
</html>
<?php
	if($_POST)
	{	
		$num1 = $_POST
		['numero1'];
		$num2 = $_POST
		['numero2'];
		$suma = $num1 
		+ $num2;
		echo "La suma de ".$num1." y ".$num2." es ".$suma; 
	}
?>