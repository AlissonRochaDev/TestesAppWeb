<?php

	$numero1 = '';
	$numero2 = '';
	$numero3 = '';
	$numero4 = '';
	$soma = '';
	$subtracao = '';
	$media = '';

	if(isset($_POST['btnCalcular'])){
		$numero1 = trim($_POST['numero1']);
		$numero2 = trim($_POST['numero2']);
		$numero3 = trim($_POST['numero3']);
		$numero4 = trim($_POST['numero4']);

		if($numero1 == '' || $numero2 == '' || $numero3 == '' || $numero4 == ''){
			echo 'Preencher Dados';
		}else{
			$soma = $numero1 + $numero2;
			
			$subtracao = $numero3 - $numero4;

			$media = ($soma + $subtracao) / 2;

			if($media > 100){
				echo 'O número ' . $media . ' é maior que 100.';
			}else if($media < 100){
				echo 'O número ' . $media . ' é menor que 100.';
			}else if($media = 100){
				echo 'O número ' . $media . ' é igual a 100.';
			}
			
		}

	}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    
<form action="exercicio.php" method="POST">
	<label>Número 1:</label>
	<input name="numero1" value="<?= $numero1 ?>">
	
	<label>Número 2:</label>
	<input name="numero2" value="<?= $numero2 ?>">
	<input disabled value="<?= $soma?>">
	
	<br>
	
	<label>Número 3:</label>
	<input name="numero3" value="<?= $numero3 ?>">
	
	<label>Número 4:</label>
	<input name="numero4" value="<?= $numero4 ?>">
	<input disabled value="<?= $subtracao?>">
	
	<br>
	
	<label>Média</label>
	<input disabled value="<?= $media?>">

	<button name="btnCalcular">Calcular</button>

</form>
</body>
</html>