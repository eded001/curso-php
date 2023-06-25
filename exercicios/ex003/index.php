<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style-principal.css">
    <title>tipos primitivos</title>
</head>
<body>
    <h1>tipos primitivos</h1>

    <?
        $string = (string)10; // coerção: capacidade de mudar o tipo de um dado
        $num = (int)"20";

        var_dump($string); // verifica o tipo e mede o conteúdo do dado
        var_dump($num);
    ?>
</body>
</html>