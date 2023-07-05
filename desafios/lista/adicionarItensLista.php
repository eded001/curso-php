<?php
//verifica se o item enviado existe ($_POST['itemLista'] != null)
if(isset($_POST['itemLista'])) // o 'isset' verifica se uma variável foi iniciada
{
    $itemLista = $_POST['itemLista'];

    adicionarItem($itemLista);

    header('Location: index.php');
}

function adicionarItem($itemLista)
{
    // inicializa e armazena a tarefa em uma array de sessão
    session_start();
    $_SESSION['itemLista'][] = $itemLista; // a sintaze "[]" adiciona um novo elemento no final do array
}

function pegarItem()
{
    // recupera todas as tarefas implementadas a fim de torná-las retornáveis
    session_start();

    if(isset($_SESSION['itemLista']))
    {
        return $_SESSION['itemLista'];
    }
    else
    {
        return [];
    }
}
?>