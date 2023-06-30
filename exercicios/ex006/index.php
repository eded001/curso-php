<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>formulário retroalimentado</title>
</head>
<body>
    <?php
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
    ?>

    <main>
        <h1>soma de valores</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">

            <label for="v2">valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">

            <input type="submit" value="somar">
        </form>
    </main>

    <section>
        <h2>resultado da soma</h2>

        <?php
            $soma = $valor1 + $valor2;
            echo "a soma entre <b>$valor1</b> e <b>$valor2</b> é igual a <b>$soma</b>";
        ?>
    </section>
</body>
</html>