<?php
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="pagina_2.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite sua Idade:</label>
        <input type="text" name="idade" value="<?= isset($idade) ? $idade : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>