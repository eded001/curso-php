<?php
$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];

$db = new SQLite3('registros.db');
$db -> exec("INSERT INTO registros (nome, sobrenome) VALUES (\"$nome\", \"$sobrenome\")");

header('Location: tabela.php');
?>