<?php
namespace command\restaurante\comandos;

use command\restaurante\interfaces\IComandoPedido;
use command\restaurante\negocio\Cozinheiro;

class Prato implements IComandoPedido
{
    private $cozinheiro;

    private $prato;
    private $adicionais;

    public function __construct(Cozinheiro $cozinheiro, string $prato, string $adicionais)
    {
        $this->cozinheiro = $cozinheiro;
        $this->prato = $prato;
        $this->adicionais = $adicionais;
    }

    public function executar(): void
    {
        $this->cozinheiro->receberPedido($this->prato);
        $this->cozinheiro->receberAdicional($this->adicionais);
    }
}

?>