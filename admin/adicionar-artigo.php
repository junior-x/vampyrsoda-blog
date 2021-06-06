<?php

require '../Config.php';
require '../src/Artigo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo -> adicionar($_POST['titulo'], $_POST['conteudo']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>New Post</title>
</head>

<body>
    <div id="container">
        <h1>New Post</h1>
        <form action="adicionar-artigo.php" method="POST">
            <p>
                <label for="">Digite o título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" placeholder="How is going?" />
            </p>
            <p>
                <label for="">Digite o conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="conteudo" placeholder=". . ."></textarea>
            </p>
            <p>
                <button class="botao">Create!</button>
            </p>
        </form>
    </div>
</body>

</html>