<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>operações matemáticas</title>
</head>
<body>
    <h3>operações matemáticas</h3>

    <?php
        $n1 = $_GET['num1'] ?? 0;
        $n2 = $_GET['num2'] ?? 0;
    ?>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="num1">1º número:</label>
            <input type="number" name="num1" id="num1" value="<?= $n1?>">

            <label for="num2">2º número:</label>
            <input type="number" name="num2" id="num2" value="<?= $n2?>">

            <label for="operacao">operação:</label>
            <select name="operacao" id="operacao">
                <option value="+">somar</option>
                <option value="-">subtração</option>
                <option value="*">multiplicação</option>
                <option value="/">divisão</option>
            </select>

            <input type="submit" value="calcular">
        </form>

        <?php
            if (!isset($_GET['operacao']))
                $operacao = null;
            elseif (!is_string($_GET['operacao']))
                $operacao = false;
            else
                $operacao = $_GET['operacao'];

            $resultado = match($operacao)
            {
                "+" => $n1 + $n2,
                "-" => $n1 - $n2,
                "*" => $n1 * $n2,
                "/" => $n1 / $n2,
                default => "esperando o preenchimento do formulário..."
            };

            echo "<p style=\"text-align: center;\">o restultado da operação foi <b>$resultado</b></p>";
        ?>
    </main>
</body>
</html>