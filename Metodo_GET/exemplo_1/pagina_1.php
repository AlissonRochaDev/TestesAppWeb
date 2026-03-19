<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $idade = trim($_POST['idade']);

        if($nome == '' || $idade == ''){
            $msgError = 'Preencher todos os campos obrigatórios!';
        }else{
            header("location: pagina_2.php?pessoa=$nome&anos=$idade");
            exit;
        }
    }

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
    <form action="pagina_1.php" method="POST">
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