<?php
require_once('negocio/cozinheiro.php');
require_once('negocio/garcom.php');
require_once('comandos/bebida.php');
require_once('comandos/prato.php');

use command\restaurante\comandos\Bebida;
use command\restaurante\comandos\Prato;
use command\restaurante\negocio\Cozinheiro;
use command\restaurante\negocio\Garcom;

echo "Padrão - Command<br>";

$cozinheiro = new Cozinheiro();

$garcom = new Garcom();
$garcom->adicionar(new Bebida("Coca-Cola 2L"));
$garcom->adicionar(new Prato($cozinheiro, "X-Salada", "Com 2 ovos"));
$garcom->adicionar(new Prato($cozinheiro, "X-Salada", "Sem ervilha"));
$garcom->adicionar(new Prato($cozinheiro, "X-Tudo", "Com maionese extra"));

$garcom->realizarPedido();
?>