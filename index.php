<?php 

require 'Config.php';
include 'src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo -> exibirTodos();

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
        <h1 class="text-titleName">⚡vampyrsoda</h1>

        <?php foreach ($artigos as $artigo) : ?>
            <div class="container-style">

                <h2>
                    <a class="text-link" href="artigo.php?id=<?php echo $artigo['id']; ?>" >
                        <?php echo $artigo['titulo']; ?>
                    </a>
                </h2>
                <p>
                    <?php echo $artigo['conteudo'];?>
                </p>

            </div>
        <?php endforeach; ?>

    </div>
</body>

</html>