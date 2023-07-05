<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style-principal.css">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        $db = new SQLite3('mySqliteProject.db');
        // $db -> exec('CREATE TABLE usuarios (users TEXT, age TEXT)');
        // $db -> exec("INSERT INTO usuarios (users, age) VALUES ('edmar', '56')");
        $result = $db->query('SELECT * FROM usuarios');
        while ($row = $result->fetchArray(1))
        {
            var_dump($row["users"]);
        }
        ?>
    </pre>
</body>
</html>