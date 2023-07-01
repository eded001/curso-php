<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>lista PHP</title>
</head>
<body>
    <h1>lista em PHP</h1>

    <main>
        <h2>adicione um item da lista</h2>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="itemLista" id="item" required placeholder="escreva aqui o item da lista" maxlength="50">
            <input type="submit" value="adicionar item">
        </form>

        <article style="margin-top: 50px;">
            <h3 style="text-align: center;">itens da lista</h3>
            <ol>
                <?php
                    $itemLista = $_POST['itemLista'];
                    $listaItens = []
                ?>
            </ol>
        </article>
    </main>
</body>
</html>