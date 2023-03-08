<?php

require_once "../librerias_php/setup_red_bean.php";

$idEditar = $_GET['idEditar'];
$juego = R::load('juegos', $idEditar);
$checkBox = "";

if($juego->alta == 1){
    $checkBox = "checked";
}else{
    $checkBox = "unchecked";
}

require "editar_juego_html.php";