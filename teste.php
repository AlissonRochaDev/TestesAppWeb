<?php

    // strip_tags: Função Nativa de Segurança do PHP para anulação de Scripts!

    if(isset($_POST['btnEnviar'])){
        // $palavra = trim($_POST['texto']);
        $palavra = strip_tags(trim($_POST['texto']));
        $especiais = array(".", ",", ";", "!", "@", "#", "%", " ̈", "*", "(", ")", "+", "-", "=", "§", "$", "/", "|", "\\", ":", "<", ">", "?", "{", "}", "[", "]", "&", "'", "`", " ́", " ", "°", "ª", "^", "~", '"', ".");

        $palavra = str_replace($especiais, "", $palavra);

        echo $palavra;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 1</title>
</head>
<body>
    <form action="teste_1.php" method="POST">
        <label>Digite uma Palavra:</label>
        <input type="text" name="texto">
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>