<?php
namespace command\restaurante\comandos;

require_once('interfaces/comando-pedido.php');

use command\restaurante\interfaces\IComandoPedido;

class Bebida implements IComandoPedido
{
    private $bebida;

    public function __construct(string $bebida)
    {
        $this->bebida = $bebida;
    }

    public function executar(): void
    {
        echo "O garçom foi buscar uma: " . $this->bebida . "<br>";
    }
}

?>