<?php
    if(isset($_POST['nome']) && isset($_POST['idade'])){
        $nome = trim($_POST['nome']);
        $idade = trim($_POST['idade']);

        if($_POST['nome'] == '' || $_POST['idade'] == ''){
            header('location: pagina_1.php');
            exit;
        }else{
            $msg = 'Meu nome é ' . $nome . ' e tenho ' . $idade . ' anos de idade!';
            echo 'Meu nome é ' . $nome . ' e tenho ' . $idade . ' anos de idade!<br>';
        }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    <span><?= isset($msg) ? $msg : '' ?></span>
</body>
</html>