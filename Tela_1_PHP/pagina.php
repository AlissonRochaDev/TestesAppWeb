<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body id="box">
    <h1>Tela de Login</h1>
    <hr>
    <form action="pagina.php" method="POST">
        <label>E-mail:</label>
        <br>
        <input type="email" name="email" placeholder="Digite seu E-mail aqui..." class="campForm">
        <br>
        <label>Senha (Mínimo de 6 caracteres):</label>
        <br>
        <input type="password" name="senha" placeholder="Digite sua Senha aqui..." class="campForm">
        <br>
        <button name="btnEnviar" class="btn">Enviar</button>
    </form>
</body>
</html>