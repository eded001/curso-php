<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style-principal.css">
    <title>formatos de strings</title>
</head>
<body>
    <h1>formatos de strings</h1>

    <?
        $nome = "edgar";
        const CIDADE = "belem";
        const ESTADO = "pará";

        echo '<p>aqui é single quoted, logo não haverá interpretação: $nome</p>';
        echo "<p>aqui é double quoted, logo haverá interpretação: $nome</p>";

        echo "<p>moro em " . CIDADE . " do " . ESTADO . "</p>";
    ?>
</body>
</html>