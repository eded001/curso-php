<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>médias aritméticas</title>
</head>
<body>
    <?php
        $valor1 = $_GET["valor1"] ?? 0;
        $valor2 = $_GET["valor2"] ?? 0;
        $mediaSimp = ($valor1 + $valor2)/2;
        $medSimForm = number_format($mediaSimp, 2);

        $peso1 = $_GET["peso1"] ?? 1;
        $peso2 = $_GET["peso2"] ?? 1;
        $mediaPond = ($valor1 * $peso1 + $valor2 * $peso2)/$peso1 + $peso2;
        $medPonForm = number_format($mediaPond, 2);
    ?>

    <main>
        <h2>médias aritméticas</h2>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor1">1° valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">

            <label for="peso1">1° peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">

            <label for="valor2">2° valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">

            <label for="peso2">2° peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">

            <input type="submit" value="calcular médias">
        </form>
    </main>

    <section>
        <h2>cálculo das médias</h2>

        <p>analisando os valores <i><?=$valor1?></i> e <i><?=$valor2?></i>:</p>
        <ul>
            <li>a <b>média aritmética</b> simples entre os valores é igual a <b><i><?=$medSimForm?></i></b></li>
            <li>a <b>média ponderada</b> entre os valores, com os pesos <u><?=$peso1?></u> e <u><?=$peso2?></u>, é igual a <b><i><?=$medPonForm?></i></b></li>
        </ul>
    </section>
</body>
</html>