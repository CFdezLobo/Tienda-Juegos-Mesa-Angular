<?php

session_start();
//session_destroy(); // eliminar todo lo que hay en sesión
$_SESSION["carrito"] = array();
echo json_encode("ok");

