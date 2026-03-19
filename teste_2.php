<?php

$numero1 = '';
$numero2 = '';

$soma = '';
$dividir = '';
$resultado = '';

if (isset($_POST['btn_somar'])) {
    $numero1 = $_POST['n1'];
    $numero2 = $_POST['n2'];

    $soma = $numero1 + $numero2;
    $resultado = $soma / $numero2;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Exercicio Calculo</title>
</head>

<body>

    <form method="post" action="ex1_calculo.php">

        <label>Número 1</label>
        <input type="text" name="n1" value="<?= $numero1 ?>">

        <label>Número 2</label>
        <input type="text" name="n2" value="<?= $numero2 ?>">

        <button name="btn_somar">Calculo</button>

        <input disabled value="<?= $soma ?>">
        <input disabled value="<?= $resultado ?>">
    </form>
</body>

</html>