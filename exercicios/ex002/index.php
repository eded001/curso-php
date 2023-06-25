<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style-principal.css">
    <title>PHP</title>
</head>
<body>
    <h1>exemplo de PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); // especifica uma timezone

        echo "hoje é dia " . date("d/M/Y");// dia/mês/ano
        echo " e as hora são " . date("G:i:s T");//hora/segundo/microssegundo/timezone
        // o "." concatena
    ?>
</body>
</html>