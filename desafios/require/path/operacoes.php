<?php
    function operacoes($n1 = 0, $n2 = 0, $operacao = "+")
    {
        $resultado = match($operacao)
        {
            "+" => $n1 + $n2,
            "-" => $n1 - $n2,
            "*" => $n1 * $n2,
            "/" => $n1 / $n2,
            default => "a operação $operacao não consta nos parâmetros da função"
        };

        return $resultado;
    }
?>