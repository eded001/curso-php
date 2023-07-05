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

    <?php $num = $_GET["num"] ?? 1?>

    <main>
        <h2>insira um número</h2>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">número</label>
            <input type="number" name="num" id="num" value="<?=$num?>" min="1">

            <input type="submit" value="calcular raíz">
        </form>
    </main>

    <section>
        <h2>resultado</h2>

        <?php
        if ($num < 1):
        ?>
        <p>não foi possível analisar o número "<strong><?=$num?></strong>" pois ele é menor que 1</p>

        <?php
        elseif (!is_numeric($num)):
        ?>
        <p>não foi possível analisar o número "<strong><?=$num?></strong>" pois ele não é um número</p>

        <?php
        else:
            $raizQuadra = number_format(sqrt($num), 2);
            $raizCubica = number_format($num ** (1/3), 2);
        ?>
        <p>analisando o número <strong><?=$num?></strong>, temos:</p>

        <ul>
            <li>a sua raíz quadrada é <?=$raizQuadra?></li>
            <li>a sua raíz cúbica é <?=$raizCubica?></li>
        </ul>

        <?php
        endif;
        ?>
    </section>
</body>
</html>