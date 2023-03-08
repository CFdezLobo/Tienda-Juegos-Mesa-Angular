<?php

require_once "../librerias_php/setup_red_bean.php";

$idPedido = $_GET["id_pedido"];
$sql = "id=$idPedido";
$pedido = R::findOne("pedidos", $sql);

R::trash($pedido);

include "borrar_pedido_ok.php";