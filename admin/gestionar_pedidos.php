<?php

require "../librerias_php/setup_red_bean.php";

$sql = "SELECT p.id, p.nombre AS nombreCompleto, p.dni, p.tarjeta, p.direccion, p.provincia, p.cp, p.email, j.nombre, j.categoria, j.precio, pp.cantidad 
FROM juegos AS j, pedidos AS p, productopedido AS pp WHERE p.id = pp.id_pedido AND j.id = pp.id_producto
ORDER BY p.id DESC";

$pedidos = R::getAll($sql);
require("gestionar_pedidos_html.php");