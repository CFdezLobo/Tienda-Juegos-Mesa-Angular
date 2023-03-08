<?php

require_once "../librerias_php/setup_red_bean.php";

$juego = R::dispense("juegos");
$juego->nombre = $_POST["nombre"];
$juego->categoria = $_POST["categoria"];
$juego->precio = $_POST["precio"];
$juego->duracion = $_POST["duracion"];
$juego->dificultad = $_POST["dificultad"];
$juego->nJugadores = $_POST["nJugadores"];
$juego->idioma = $_POST["idioma"];
$juego->descripcion = $_POST["descripcion"];

$id_generada = R::store($juego);

// Para guardar el archivo subido, con un nombre igual a la id_generada:

if($_FILES["imagen1"]['size'] > 0){
    move_uploaded_file($_FILES["imagen1"]["tmp_name"],"../server/imagenes/$id_generada-1.jpg");
}
if($_FILES["imagen2"]['size'] > 0){
    move_uploaded_file($_FILES["imagen2"]["tmp_name"],"../server/imagenes/$id_generada-2.jpg");
}
if($_FILES["imagen3"]['size'] > 0){
    move_uploaded_file($_FILES["imagen3"]["tmp_name"],"../server/imagenes/$id_generada-3.jpg");
}
if($_FILES["imagen4"]['size'] > 0){
    move_uploaded_file($_FILES["imagen4"]["tmp_name"],"../server/imagenes/$id_generada-4.jpg");
}

if (isset($_REQUEST['alta'])) {
    $juego->alta = TRUE;
}else{
    $juego->alta = FALSE;
}


include("registro_ok.php");

