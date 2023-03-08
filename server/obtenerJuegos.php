<?php

require("../librerias_php/setup_red_bean.php");

echo json_encode(R::getAll("SELECT * FROM juegos WHERE alta = 1"));