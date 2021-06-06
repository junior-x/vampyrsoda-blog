<?php 

require '../Config.php';
require 'src/Artigo.php';

$artigo = new Artigo($mysql);
$artigo = $artigo->encontrarPorId($_GET['id']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>FlashBlog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1 class="text-titleName"><?php echo $artigo['titulo']; ?></h1>

        <p>
            <?php echo $artigo['conteudo']; ?>
        </p>
        
        <div>
            <a class="botao botao-block" href="index.php">   <   </a>
        </div>

    </div>
</body>

</html>