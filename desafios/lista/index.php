<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>lista PHP</title>
</head>

<body>
    <h1>lista de afazeres</h1>

    <main>
        <h2 style="text-align: center;">adicione um item à lista</h2>

        <form action="adicionarItensLista.php" method="post">
            <input type="text" name="itemLista" required placeholder="escreva aqui o item da lista" maxlength="50" autocomplete="off">
            <input type="submit" value="adicionar item">
        </form>

        <article style="margin-top: 50px">
            <h3 style="text-align: center;">itens da lista</h3>
            <ol>
                <?php
                require ('adicionarItensLista.php');
                $itensLista = pegarItem();

                foreach ($itensLista as $itemLista)
                {
                    echo "<li>$itemLista</li>";
                }
                // session_destroy()
                ?>
                <!--
                    caso queira se livrar da sessão estartada,
                    coloque session_destroy() para findar a sessão
                -->
            </ol>
        </article>
    </main>
</body>

</html>