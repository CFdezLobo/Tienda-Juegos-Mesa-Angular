<?php

require_once "../librerias_php/setup_red_bean.php";

$idJuego = $_GET["idBorrar"];
$sql = "id=$idJuego";
$juego = R::findOne("juegos", $sql);
$juego->alta = FALSE;

R::store($juego);

include "borrar_ok.php";



