<?php

require_once "../librerias_php/setup_red_bean.php";

$idEditar = $_GET['idEditar'];
$juego = R::load('juegos', $idEditar);

$juego->nombre = $_POST['nombre'];
$juego->categoria = $_POST['categoria'];
$juego->precio = $_POST['precio'];
$juego->duracion = $_POST['duracion'];
$juego->dificultad = $_POST['dificultad'];
$juego->n_jugadores = $_POST['n_jugadores'];
$juego->idioma = $_POST['idioma'];
$juego->descripcion = $_POST['descripcion'];


if($_FILES["imagen1"]['size'] > 0){
    move_uploaded_file($_FILES["imagen1"]["tmp_name"],"../server/imagenes/$idEditar-1.jpg");
}
if($_FILES["imagen2"]['size'] > 0){
    move_uploaded_file($_FILES["imagen2"]["tmp_name"],"../server/imagenes/$idEditar-2.jpg");
}
if($_FILES["imagen3"]['size'] > 0){
    move_uploaded_file($_FILES["imagen3"]["tmp_name"],"../server/imagenes/$idEditar-3.jpg");
}
if($_FILES["imagen4"]['size'] > 0){
    move_uploaded_file($_FILES["imagen4"]["tmp_name"],"../server/imagenes/$idEditar-4.jpg");
}

if (isset($_REQUEST['alta'])) {
    $juego->alta = TRUE;
}else{
    $juego->alta = FALSE;
}

R::store($juego);

include "editar_ok.php";
