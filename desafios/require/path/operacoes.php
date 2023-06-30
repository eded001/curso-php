<?php
    function operacoes($n1 = 0, $n2 = 0, $operacao = "+")
    {
        switch($operacao)
        {
            case "+":
                return $n1 + $n2;

            case "-":
                return $n1 - $n2;

            case "*":
                return $n1 * $n2;
            case "x":
                return $n1 * $n2;

            case "/":
                return $n1 / $n2;

            default:
                return "a operação $operacao não consta nos parâmetros da função";
        }
    }
?>