<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>resultado do formulário</title>
</head>
<body>
    <header>
        <h1>resultado do processamento do formulário</h1>
    </header>

    <main>
        <?php
            $nome = $_GET["nome"] ?? "nome não definido"; // ?? = operador null coalescing: verifica algo existe (null), se False, ele retorna um valor especificado
            $sobrenome = $_GET["sobrenome"] ?? "(sobrenome não definido)";

            echo "<p>olá <strong>$nome $sobrenome</strong>, é um prazer lhe conhecer!</p>";
        ?>

        <p><a href="javascript:history.go(-1)" target="_parent" rel="noopener noreferrer">voltar para a pagina anterior</a></p>
    </main>
</body>
</html>