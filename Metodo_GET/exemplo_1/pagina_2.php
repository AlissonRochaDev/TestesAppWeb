<?php
    if(
        isset($_GET['pessoa']) && $_GET['pessoa'] != '' &&
        isset($_GET['anos']) && $_GET['anos'] != '' 
    ){
        $nome = $_GET['pessoa'];
        $idade = $_GET['anos'];

        $msg = 'Meu nome é ' . $nome . ' e tenho ' . $idade . ' anos de idade!';
    }else{
        header('location: pagina_1.php');
        exit;
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