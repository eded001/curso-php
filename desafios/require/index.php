<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style-principal.css">
    <title>include</title>
</head>
<body>
    <?php
        require ('./path/operacoes.php');

        echo operacoes(4, 9, "/");
    ?>
</body>
</html>