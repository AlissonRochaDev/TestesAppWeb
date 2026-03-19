<?php
    if (
        isset($_GET['numero1']) && $_GET['numero1'] != '' &&
        isset($_GET['numero2']) && $_GET['numero2'] != '' &&
        isset($_GET['numero3']) && $_GET['numero3'] != '' &&
        isset($_GET['numero4']) && $_GET['numero4'] != '' &&
        isset($_GET['numero5']) && $_GET['numero5'] != ''
    ) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $numero3 = $_GET['numero3'];
        $numero4 = $_GET['numero4'];
        $numero5 = $_GET['numero5'];

        $resultado = round(($numero1 + $numero2 + $numero3) / ($numero4 * $numero5), 2);

        if ($resultado < 0) {
            $warning = '<br><span style="color: #FF0000; font weight: bold;">Resultado não existe!</span><br>';
        }

    }else {
        header('location: page_1.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body style="font-family: Tahoma;">
    <strong>Resultado</strong>
    <span>
        <?= isset($resultado) ? $resultado : '' ?>
        <br>
        <?= isset($warning) ? $warning : '' ?>
    </span>
</body>
</html>