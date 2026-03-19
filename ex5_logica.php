<?php

if (isset($_POST['btnCalcular'])) {
    $peso = trim($_POST['peso']);
    $altura = trim($_POST['altura']);

    if ($peso == '' || $altura == '') {
        $msgError = '<br><span style="color: #FF0000; font weight: bold;">Preencher todos os campos obrigatórios!</span><br>';
    } else {

        $imc = round($peso / ($altura * $altura), 2);

        if ($imc <= 0) {
            $warning = '<br><span style="color: #FF4500; font weight: bold;">Valor não encontrado!</span>';
        } else if ($imc > 0 && $imc <= 20) {
            $status = '<br><span style="color: #006400; font weight: bold;">Magro!</span>';
        } else if ($imc > 20 && $imc <= 25) {
            $status = '<br><span style="color: #006400; font weight: bold;">Peso Ideal!</span>';
        } else if ($imc > 25 && $imc <= 30) {
            $status = '<br><span style="color: #006400; font weight: bold;">Obeso!</span>';
        } else {
            $status = '<br><span style="color: #006400; font weight: bold;">Muito Obeso!</span>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>

<body style="font-family: Tahoma;">
    <form action="ex5_logica.php" method="POST">
        <label>Digite seu Peso:</label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <label>Digite sua Altura:</label>
        <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>

    <?php if (isset($imc) != '') { ?>
        <hr>
        <strong>Resultado do IMC:</strong>
        <input disabled value="<?= $imc ?>">
    <?php } ?>

    <!-- ==== Validações PHP! ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($warning) ? $warning : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- == Fim das Validações PHP! == -->
</body>

</html>