<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>tabela</title>
</head>
<body>
    <h1>resultado</h1>

    <main>
        <table>
            <caption>resultado do mais velho ao mais novo</caption>
            <tr>
                <th>nome</th>
                <th>idade</th>
            </tr>

            <?php
            $db = new SQLite3('registros-maior-menor.db');
            $result = $db -> query('SELECT * FROM registrosMaiorMenor ORDER BY idade DESC');
            while($row = $result -> fetchArray(SQLITE3_ASSOC)):
            ?>
            <tr>
                <td><?= $row['nome']?></td>
                <td><?= $row['idade']?></td>
            </tr>
            <?php
            endwhile;
            ?>
        </table>

        <p style="text-align: center;"><a href="index.html" target="_self" rel="noopener noreferrer">voltar para o início</a></p>
    </main>
</body>
</html>