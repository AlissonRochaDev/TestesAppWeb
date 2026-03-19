<?php

    // Operadores Lógicos!
    // || - OU.
    // && - E.
    // ! - NEGAR.

    // Operadores Relacionais!
    // > - MAIOR.
    // < - MENOR.
    // >= - MAIOR IGUAL.
    // <= - MENOR IGUAL.
    // == - IGUAL.
    // === - IGUAL (Verifica a Tipagem).

$camp1 = '';
$camp2 = '';
$camp3 = '';
$camp4 = '';
$camp5 = '';
$resultado = '';


	if (isset($_POST['btnEnviar'])) {
		$camp1 = trim($_POST['c1']);
		$camp2 = trim($_POST['c2']);
		$camp3 = trim($_POST['c3']);
		$camp4 = trim($_POST['c4']);
		$camp5 = trim($_POST['c5']);

		//if($camp1 -- ''){
		//    echo 'Preencher o campo obrigatório CAMPO 1';
		//}else if($camp2 == ''){
		//    echo 'Preencher o campo obrigatório CAMPO 2';
		//}else if($camp3 == ''){
		//    echo 'Preencher o campo obrigatório CAMPO 3';
		//}else if($camp4 == ""){
		//    echo 'Preencher o campo obrigatório CAMPO 4';
		//}else if($camp5 == ''){
		//    echo 'Preencher o campo obrigatório CAMPO 5';
		//}else{
		//}

		if($camp1 == '' || $camp2 == '' || $camp3 == '' || $camp4 == '' || $camp5 == ''){
			echo 'Preencher todos os campos obrigatórios!<hr>';
		}else{

			$resultado = (($camp1 + $camp2) * 2) + $camp3 + $camp4 + $camp5;

			if($resultado < 0){
				echo 'Resultado não encontrado!<hr>';
			}else if($resultado < 100) {
				echo 'O RESULTADO é MENOR que 100!<hr>';
			}else if($resultado > 100) {
				echo 'O RESULTADO é MAIOR que 100!<hr>';
			}else{
				echo 'O RESULTADO é IGUAL a 100!<hr>';
			}
		}
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body style="font-family: Thoma;">
    <form method="POST" action="ex1_logica.php">
		<label>Campo 1</label>
		<input type="number" name="c1" value="<?= $camp1 ?>">
		<br>
		<label>Campo 2</label>
		<input type="number" name="c2" value="<?= $camp2 ?>">
		<br>
		<label>Campo 3</label>
		<input type="number" name="c3" value="<?= $camp3 ?>">
		<br>
		<label>Campo 4</label>
		<input type="number" name="c4" value="<?= $camp4 ?>">
		<br>
		<label>Campo 5</label>
		<input type="number" name="c5" value="<?= $camp5 ?>">
		<br>
		<button name="btnEnviar">ENVIAR</button>
		<br>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= $resultado ?>">
</body>
</html>