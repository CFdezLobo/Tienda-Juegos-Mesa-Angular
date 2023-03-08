<?php

require "../librerias_php/setup_red_bean.php";

// obtener los juegos:
$juegos = R::getAll("select * from juegos");

require "gestionar_productos_html.php";

