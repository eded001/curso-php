<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>cálculo de raízes</title>
</head>
<body>
    <h1>cálculo de raízes</h1>

    <? $num = $_GET["num"] ?? 0 ?>

    <main>
        <h2>insira um número</h2>

        <form action="<? echo $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="num">número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">

            <input type="submit" value="calcular raíz">
        </form>
    </main>

    <section>
        <h2>resultado</h2>

        <?php
            echo "<p>analisando o número $num, temos:</p>";

            $raizQuadra = number_format(sqrt($num), 2);
            $raizCubica = number_format($num ** (1/3), 2);

            echo <<< LISTA
                <ul>
                    <li>a sua raíz quadrada é $raizQuadra</li>
                    <li>a sua raíz cúbica é $raizCubica</li>
                </ul>
            LISTA;
        ?>
    </section>
</body>
</html>