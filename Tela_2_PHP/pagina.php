<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício</title>
</head>
<body>
    <h1>Formulário de Contato.</h1>
    <hr>
    <div class="container">
        <div class="googleMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.8969842980755!2d-51.17864038554951!3d-23.31949615858873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94eb4313ff0ee975%3A0x1c33d6cf3ae5b478!2sWMBarros%20Treinamento%20em%20TI%20Cursos%20PHP%2C%20C%23%2C%20GAMES%2C%20Wordpress!5e0!3m2!1spt-BR!2sbr!4v1675812428135!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="formulario">
            <img src="logotipo.jpg" alt="Imagem do Logotipo!" title="Imagem do Logotipo!" class="img">
            <form action="pagina.php">
                <label>Nome:</label>
                <input type="text" name="nome" id="" value="" placeholder="Digite seu Nome aqui...">
                <label>E-mail:</label>
                <input type="email" name="email" id="" value="" placeholder="Digite seu E-mail aqui...">
                <label>Senha:</label>
                <input type="password" name="senha" id="" value="" placeholder="Digite sua Senha aqui...">
                <button name="btnEnviar" class="btn">ENVIAR</button>
            </form>
        </div>
    </div>

    <footer id="endPage">
        <p>Copyrith 2023 - Todos os direitos reservados.</p>
    </footer>
</body>
</html>