<?php
//Recibir los datos del pedido y guardarlos en la tabla pedidos
//También guardar en la tabla productopedido cada uno de los productos del pedido

session_start();
require("../librerias_php/setup_red_bean.php");

$jsonInfo = json_decode(file_get_contents("php://input"));

$pedido = R::dispense("pedidos");

$pedido->nombre = $jsonInfo->nombre;
$pedido->email = $jsonInfo->email;
$pedido->dni = $jsonInfo->dni;

// Validar con expresion regular:
if( preg_match("/^[0-9]{13,18}$/", $jsonInfo->tarjeta)){
    $pedido->tarjeta = $jsonInfo->tarjeta;
}else{
    $pedido->tarjeta = "Tarjeta no valida";
}

// Asi transformamos lo introducido a entidades html
$pedido->direccion = htmlentities( $jsonInfo->direccion );
$pedido->provincia = $jsonInfo->provincia;
$pedido->cp = $jsonInfo->cp;

// Alamacenar los datos de la conexion de usuario
$ip = "";
if( !empty($_SERVER["HTTP_CLIENT_IP"]) ){
    $ip = $_SERVER["HTTP_CLIENT_IP"];

}else if( !empty($_SERVER["REMOTE_ADDR"])){
    $ip = $_SERVER["REMOTE_ADDR"];
}

$pedido->ip = $ip;
// En las peticiones a servidor disponemos de una cadena de caracteres llamada user agent
$pedido->useragent = $_SERVER["HTTP_USER_AGENT"];


$id_generada_pedido = R::store($pedido);

//Registro de los productos del carrito asociándolos a la id generado

foreach($_SESSION["carrito"] as $pc){
    $producto_pedido = R::dispense("productopedido");
    $producto_pedido->id_pedido = $id_generada_pedido;
    $producto_pedido->id_producto = $pc[0];
    $producto_pedido->cantidad = $pc[1];
    R::store($producto_pedido);
}

// Vaciar carrito
$_SESSION["carrito"] = array();

echo json_encode("ok");