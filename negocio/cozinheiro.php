<?php
namespace command\restaurante\negocio;

class Cozinheiro
{
    public function receberPedido(string $a): void
    {
        echo "Recebi aqui na cozinha o pedido: " . $a . ".\n";
    }

    public function receberAdicional(string $b): void
    {
        echo "Seguintes adicionais: " . $b . ".<br>";
    }
}
?>