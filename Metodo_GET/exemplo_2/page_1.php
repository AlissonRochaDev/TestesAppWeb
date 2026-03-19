<?php
    if (isset($_POST['btnCalcular'])){
        $num1 = trim($_POST['num1']);
        $num2 = trim($_POST['num2']);
        $num3 = trim($_POST['num3']);
        $num4 = trim($_POST['num4']);
        $num5 = trim($_POST['num5']);

        if($num1 == '' || $num2 == '' || $num3 == '' || $num4 == '' || $num5 == ''){
            $msgError = '<br><span style="color: #FF0000; font weight: bold;">Preencher os campos obrigatórios!</span><br>';
        } else {
            header("location: page_2.php?numero1=$num1&numero2=$num2&numero3=$num3&numero4=$num4&numero5=$num5");
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body style="font-family: Tahoma;">
    <form action="page_1.php" method="POST">
        <label>Número 1: </label>
        <input type="number" name="num1" value="<?= isset($num1) ? $num1 : '' ?>">
        <br>
        <label>Número 2: </label>
        <input type="number" name="num2" value="<?= isset($num2) ? $num2 : '' ?>">
        <br>
        <label>Número 3: </label>
        <input type="number" name="num3" value="<?= isset($num3) ? $num3 : '' ?>">
        <br>
        <label>Número 5: </label>
        <input type="number" name="num4" value="<?= isset($num5) ? $num4 : '' ?>">
        <br>
        <label>Número 5: </label>
        <input type="number" name="num5" value="<?= isset($num5) ? $num5 : '' ?>">
        <br>
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <!-- ==== Validações PHP! ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <!-- == Fim das validações PHP! == -->
</body>
</html>