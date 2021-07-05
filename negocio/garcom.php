<?php
namespace command\restaurante\negocio;

require_once('iterator/ordem.php');

use command\restaurante\interfaces\IComandoPedido;
use command\restaurante\iterator\Collection;

class Garcom
{
    private $comandos;

    public function __construct()
    {
        $this->comandos = new Collection();
    }    

    public function adicionar(IComandoPedido $command): void
    {
        $this->comandos->addItem($command);
    }

    public function realizarPedido(): void
    {
        foreach ($this->comandos->getIterator() as $item) {
            $item->executar();
        }
    }
}
?>