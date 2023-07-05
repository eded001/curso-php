<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>registros salvos</title>
</head>
<body>
    <section>
        <h2 style="text-align: center;">registros salvos</h2>
        <table>
            <tr>
                <th style="border-right: 1px solid;">nome</th>
                <th>sobrenome</th>
            </tr>
            <?php
            $db = new SQLite3('registros.db');
            $result = $db -> query('SELECT * FROM registros');
            while ($row = $result->fetchArray(SQLITE3_ASSOC)):
            ?>
            <tr>
                <td><?=$row['nome']?></td>
                <td><?=$row['sobrenome']?></td>
            </tr>
            <?php
            endwhile;
            ?>
        </table>

        <p style="text-align: center;"><a href="index.html" target="_self">voltar para o início</a></p>
    </section>
</body>
</html>