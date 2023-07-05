<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];

$db = new SQLite3('registros-maior-menor.db');
$db -> exec("INSERT INTO registrosMaiorMenor (nome, idade) VALUES (\"$nome\", \"$idade\");");

header('Location: tabela.php');
?>