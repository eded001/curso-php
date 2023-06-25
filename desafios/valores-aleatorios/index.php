<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>gerador de valores aleatórios</title>
</head>
<body>
    <article>
        <h1>trabalhando com números aleatórios</h1>

        <?php
            $min = 0;
            $max = 100;
            $numAleat = mt_rand($min, $max);

            echo "<p>clique para gerar um valor aleatório entre $min $max</p>";

            echo "<p>o valor gerado foi $numAleat</p>"
        ?>

        <input type="button" onclick="location.reload()" value="gerar valor">
    </article>
</body>
</html>