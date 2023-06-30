<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>operações matemáticas</title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"] ?? 1;
        $n2 = $_GET["n2"] ?? 1;
        $num1 = number_format($n1, 2);
        $num2 = number_format($n2, 2);

        $soma = $num1 + $num2;
        $subtracao = $num1 - $num2;
        $multiplicacao = $num1 * $num2;
        $divisao = number_format($num1 / $num2, 2);
        $resto = $num1 % $num2;
    ?>

    <main>
        <h1>anatomia de operações matemáticas</h1>

        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="n1">número 1</label>
            <input type="number" name="n1" id="n1" step="0.01" min="0" value="<?=$n1?>">

            <label for="n2">número 2</label>
            <input type="number" name="n2" id="n2" step="0.01" min="1" value="<?=$n2?>">

            <input type="submit" value="calcular">
        </form>
    </main>

    <section>
        <h2>estrutura das operações matemáticas</h2>

        <?php
            echo "<h3>adição</h3>";
            echo "<p>$num1 + $num2 = $soma</p>";

            echo "<h3>subtração</h3>";
            echo "<p>$num1 - $num2 = $subtracao</p>";

            echo "<h3>multiplicação</h3>";
            echo "<p>$num1 X $num2 = $multiplicacao</p>";

            echo "<h3>divisão</h3>";
            echo <<< LISTA
                <table class="divisao">
                    <tr>
                        <td>$num1</td>
                        <td>$num2</td>
                    </tr>
                    <tr>
                        <td>$resto</td>
                        <td>$divisao</td>
                    </tr>
                </table>
            LISTA;
        ?>
    </section>
</body>
</html>