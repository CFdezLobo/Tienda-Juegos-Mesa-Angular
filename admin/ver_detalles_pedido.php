<?php

require_once "../librerias_php/setup_red_bean.php";

$id_pedido = $_GET["id_pedido"];

$pedido = R::findOne('pedidos', ' id = ? ', [$id_pedido]);

// Obtener la información de los productos del pedido:

$sql = "SELECT j.nombre, j.categoria, j.precio, pp.cantidad FROM juegos AS j, productopedido AS pp WHERE j.id = pp.id_producto AND pp.id_pedido = ? ORDER BY pp.id ASC ";

$productos = R::getAll($sql, [$id_pedido]);

$precioTotal = 0;
foreach($productos as $producto){
    $cantidad = $producto["cantidad"];
    $precioTotal = $precioTotal + ($producto["precio"] * $cantidad);
}

require "ver_detalles_pedido_html.php";
