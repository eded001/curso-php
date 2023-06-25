<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style-principal.css">
    <title>formatando strings</title>
</head>
<body>
    <?
        $nome = "edgar";
        $idade = 18;
        echo <<< TEXTO
            $nome
                    de $idade anos
            está estudando sobre
                        PHP

        e usando heredoc
            \n
        TEXTO;

        echo <<< 'TEXTO'
            $nome
                    de $idade anos
            está estudando sobre
                        PHP

        e usando nowdoc
            \n
        TEXTO;

        echo "aperte 'Ctrl + Shift + I' ou 'F2' para acessar ao código-fonte da página";
    ?>
</body>
</html>