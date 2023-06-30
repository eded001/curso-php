<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>resultado final</title>
</head>
<body>
    <section>
        <h1>resultado final</h1>

        <?php
            $num = $_GET["num"] ?? 0;
            $numAntes = $num - 1;
            $numSuces = $num + 1;

            echo "<p>o número escolhido foi <b>$num</b></p>";
            echo "<p>o seu antecessor é $numAntes</p>";
            echo "<p>o seu sucessor é $numSuces</p>";
        ?>

        <button type="button" onclick="history.go(-1)">voltar</button>
    </section>
</body>
</html>