<?php

    require_once 'ClassDAO.php';

    $gas = '';

    if(isset($_POST['btnCalcular'])){
        $gas = $_POST['gas'];
        $litros = trim($_POST['litros']);

        $objDAO = new ClassDAO();
        $ret = $objDAO->Etanol($gas, $litros);

        if($ret == 0){
            $msgError = '<br><span style="color: #FF0000; font weight: bold;">Preencher todos os campos obrigatórios!</span><br>';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_1.php" method="">
        <label>Selecione o Tipo do Combustível:</label>
        <select name="Combustível">
            <option value="">Selecione</option>
            <option value="1" <?php $gas == 1 ? 'selected' : '' ?>>Etanol</option>
            <option value="2" <?= $gas == 2 ? 'selected' : '' ?>>Gasolina</option>
            <option value="3" <?= $gas == 3 ? 'selected' : '' ?>>Diesel</option>
        </select>
        <br>
        <label>Digite a quantidade de Litros:</label>
        <input type="number" name="litros" value="<?= isset($litros) ? $litros : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>

    <!-- === Validação de Campos em Vazio! === -->
    <?= isset($msgError) ? $msgError : '' ?>
    <!-- === Fim da Validação de Campos em Vazio! === -->

    <?php if(isset($ret) && $ret != '' && $ret != 0){ ?>
        <span>Resultado Final:</span>
        <input disabled value="R$ <?= isset($ret) ? number_format($ret, 2, ',', '.') : '' ?>">
    <?php } ?>
</body>
</html>